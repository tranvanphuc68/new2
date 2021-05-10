<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentCourseController extends Controller
{
    public function index()
    {
        $students_courses = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course')
        ->get();
        return view('students_courses.index', [
            'students_courses' => $students_courses
        ]);
    }

    public function show($id_student, $id_course)
    {
        return view('students_courses.show', [
            'id_student' => $id_student,
            'id_course' => $id_course
        ]);
    }

    public function create()
    {
        return view('students_courses.create');
    }

    public function store(Request $request)
    {
        $data = StudentCourse::create($request->input());
        return redirect('/students_courses');
    }

    public function edit($id_student, $id_course)
    {   
        $data = StudentCourse::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->get();
        $student_course = $data[0]; 
        return view('students_courses.edit', [
            'student_course' => $student_course
        ]);
    }

    public function update(Request $request, $id_student, $id_course)
    { 
        $student_course = StudentCourse::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->update([
            'id_student' => $request->id_student,
            'id_course' => $request->id_course
        ]);
        return redirect('students_courses');
    }

    public function destroy($id_student, $id_course)
    {
        $student_course = StudentCourse::where('id_course', '=', "$id_course")
        ->where('id_student', '=', "$id_student")
        ->delete();
        return redirect('students_courses');
    }
}
