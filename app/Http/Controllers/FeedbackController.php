<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
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
            ->select('students_courses.*', 'users.fullname', 'courses.name', 'courses.id', 'courses.status')
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
        $students = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course',"$id_course")
        ->select('students_courses.*','users.fullname','courses.name','users.dob')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        $id = Auth::user()->id;
        $feedback = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_student',"$id")
        ->where('id_course',"$id_course")
        ->select('students_courses.*','courses.status')
        ->get();
        
        return view('feedbacks.show', [
            'feedback' => $feedback,
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

    public function update(Request $request, $id_course)
    {
        $id = Auth::user()->id;
        $feedback = Feedback::where('id_student', '=', "$id")
        ->where('id_course', '=', "$id_course")
        ->update([
            'feedback' => $request->feedback
        ]);
        return redirect("feedbacks/{$id_course}");
    }
}