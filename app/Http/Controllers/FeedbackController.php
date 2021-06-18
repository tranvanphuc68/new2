<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        if (Auth::user()->role == 'Student') {
            $courses = DB::table('students_courses')
            ->join('users', 'users.id', '=', 'students_courses.id_student')
            ->join('courses', 'courses.id', '=', 'students_courses.id_course')
            ->where('id_student', '=', "$id")
            ->select('students_courses.*', 'users.first_name', 'users.last_name', 'courses.name', 'courses.id', 'courses.status')
            ->get();
        }
        else 
            if (Auth::user()->role == 'Admin') {
                $courses = DB::table('courses')
                ->where('status','=','3')
                ->select('courses.*')
                ->get();
            }
            else {
                $courses = DB::table('courses')
                ->where('status','=','3')
                ->where('id_teacher', '=', "$id")
                ->select('courses.*')
                ->get();
            }

        
        return view('feedbacks.index', [
            'courses' => $courses
        ]);
    }

    public function show($id_course)
    {
        $course = DB::table('courses')
                ->where('id', '=', "$id_course")
                ->select('courses.*')
                ->get();
        $students = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course',"$id_course")
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name','users.dob')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        $id = Auth::user()->id;
        $feedbacks = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_student',"$id")
        ->where('id_course',"$id_course")
        ->select('students_courses.*','courses.status')
        ->get();
        return view('feedbacks.show', [
            'course' => $course,
            'feedbacks' => $feedbacks,
            'students' => $students,
            'id_course' => $id_course
        ]);
    }

    public function student_edit($id_course)
    {   
        $id = Auth::user()->id; 
            $data = Feedback::where('id_student', '=', "$id")
            ->where('id_course', '=', "$id_course")
            ->get();
            $students = DB::table('students_courses')
            ->join('courses','courses.id','=','students_courses.id_course')
            ->where('id_course',"$id_course")
            ->select('students_courses.*','courses.name')
            ->get();
            $feedback = $data[0];
            return view('feedbacks.edit', [
                'feedback' => $feedback,
                'id_course' => $id_course,
                'students' => $students
            ]);     
    }

    public function update(FeedbackRequest $request, $id_course)
    {
        $id = Auth::user()->id;
        $feedback = Feedback::where('id_student', '=', "$id")
        ->where('id_course', '=', "$id_course")
        ->update([
            'feedback' => $request->feedback
        ]);
        return redirect("feedbacks/{$id_course}");
    }

    public function search()
    {   
        $courseName = $_GET['search'];
        $id = Auth::user()->id;
        if( Auth::user()->role == 'Admin' )
        {   
            $courses = DB::table('courses')
            ->where('status','=','3')
            ->where(function ($query) use ($courseName){
                $query->where('name', 'LIKE', '%'.$courseName.'%')
                    ->orWhere('id','LIKE', "%".$courseName."%");
                })
            ->select('courses.*')
            ->get();
        } 
        elseif( Auth::user()->role == 'Teacher' ){
            $courses = DB::table('courses')
            ->where('status','=','3')
            ->where('id_teacher', '=', "$id")
            ->where(function ($query) use ($courseName){
                $query->where('name', 'LIKE', '%'.$courseName.'%')
                    ->orWhere('id','LIKE', "%".$courseName."%");
                })
            ->select('courses.*')
            ->get();
        }
        else{ 
            $courses = DB::table('courses')
            ->join('students_courses','students_courses.id_course','=','courses.id')
            ->where(function($query) use ($id)
                {
                    $query->select(DB::raw(1))
                    ->from('students_courses')
                    ->whereRaw("students_courses.id_student = $id");
                })
            ->where(function ($query) use ($courseName){
                $query->where('name', 'LIKE', '%'.$courseName.'%')
                    ->orWhere('id','LIKE', "%".$courseName."%");
                })
            ->select('courses.*','students_courses.*')
            ->get();
        }
        return view('feedbacks.index', [
            'courses' => $courses,
        ]);
    }
}