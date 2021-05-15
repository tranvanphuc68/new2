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
        if (Auth::user()->role == 'Student') {
            $id = Auth::user()->id;
            $courses = DB::table('students_courses')
            ->join('users', 'users.id', '=', 'students_courses.id_student')
            ->join('courses', 'courses.id', '=', 'students_courses.id_course')
            ->where('id_student', '=', "$id")
            ->select('students_courses.*', 'users.fullname', 'courses.name', 'courses.id', 'courses.status')
            ->get();
        }
        else {
            $courses = DB::table('courses')
        ->where('status','=','1')
        ->orWhere('status','=','2')
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
        ->select('students_courses.*','users.fullname','courses.name')
        ->get();

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
            $feedback = $data[0];
            return view('feedbacks.edit', [
                'feedback' => $feedback,
                'id_course' => $id_course
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