<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
    $feedbacks = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('students_courses.*', 'users.fullname', 'courses.name')
        ->get();
    return view('feedbacks.index', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function show($id_student, $id_course)
    {
        return view('feedbacks.show', [
            'id_student' => $id_student,
            'id_course' => $id_course
        ]);
    }
    public function edit($id_student, $id_course)
    {   
        $data = Feedback::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->get();
        $feedback = $data[0];
        
        return view('feedbacks.edit', [
            'feedback' => $feedback
        ]);
    }

    public function update(Request $request, $id_student, $id_course)
    {
        $feedback = Feedback::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->update([
            'feedback' => $request->feedback
        ]);
        return redirect('feedbacks');
    }
}
