<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MarkController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')
        ->where('status', '=', '1')
        ->orWhere('status', '=', '2')
        ->orWhere('status', '=', '3')
        ->select('courses.*')
        ->get();

        $id = Auth::user()->id;
        $marks = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_student', '=', "$id")
        ->select('students_courses.*', 'users.first_name', 'users.last_name', 'courses.name')
        ->orderBy('last_name')
        ->get();

        $teachers = DB::table('courses')
        ->where('id_teacher', "$id")
        ->select('courses.*')
        ->get();

        return view('marks.index', [
            'teachers' => $teachers,
            'marks' => $marks,
            'courses' => $courses
        ]);
    }

    public function show($id_course)
    {
        $students = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course','=',"$id_course")
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name','users.dob')
        ->orderBy('last_name')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        return view('marks.show', [
            'students' => $students,
            'id_course' => $id_course
        ]);
    }

    public function edit($id_course)
    {
        $students = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_course',$id_course)
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name','users.dob')
        ->orderBy('last_name')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        return view('marks.edit', [
            'students' => $students,
            'id_course' => $id_course
        ]);
    }

    public function update(Request $request, $id_course)
    {
        $students = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_course',$id_course)
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name')
        ->get();
        //
        foreach ($students as $student) {
            DB::table('students_courses')
            ->where('id_student','=',$student->id_student)
            ->where('id_course','=',$student->id_course)
            ->update([
                'mark' => $request->input("$student->id_student")
            ]);
        }
        return redirect("/marks/{$students[1]->id_course}");
    }
}