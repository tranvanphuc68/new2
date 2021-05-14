<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentCourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')
        ->where('status','=','1')
        ->orWhere('status','=','2')
        ->select('courses.*')
        ->get();
        return view('students_courses.index', [
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
        return view('students_courses.show', [
            'students' => $students,
            'id_course' => $id_course
        ]);
    }

    public function create($id_course)
    {

        $students = DB::table('users')
        ->where('role','Student')
        ->whereNotExists(function($query)
        {
            $query->select(DB::raw(1))
            ->from('students_courses')
            ->where('id_course', $id_course)
            ->whereRaw('students_courses.id_student = users.id'); 
        })
        ->get();
        return view('students_courses.create', [
            'students' => $students,
            'id_course' => $id_course
            ]);
    }

    public function store(Request $request, $id_course)
    {   dd($request->input());
        $data = StudentCourse::create([
            'id_student' => $request->id_student,
            'id_course' => $id_course
        ]);
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
