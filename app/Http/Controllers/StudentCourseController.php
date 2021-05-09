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
        ->select('id_student', 'users.fullname', 'courses.name')
        ->get();
        return view('students_courses.index', [
            'students_courses' => $students_courses
        ]);
    }

    public function show(student_course $student_course)
    {
        return view('students_courses.show', [
            'student_course' => $student_course
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

    public function edit(StudentCourse $student_course)
    {
        return view('students_courses.edit', [
            'student_course' => $student_course
        ]);
    }

    public function update(Request $request, StudentCourse $student_course)
    {
        $student_course->update([
            'id_student' => $request->id_student,
            'id_course' => $request->id_course
        ]);
        return redirect('students_courses');
    }

    public function destroy(StudentCourse $student_course)
    {
        $student_course->delete();
        return redirect('students_courses');
    }
}
