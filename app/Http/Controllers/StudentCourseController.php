<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentCourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')
        ->where('status','=','1')
        ->orWhere('status','=','2')
        ->orWhere('status','=','3')
        ->select('courses.*')
        ->get();

        $id = Auth::user()->id;
        $student_courses = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_student','=',"$id")
        ->select('students_courses.*','users.fullname','courses.name', 'courses.status')
        ->get();

        $teachers = DB::table('courses')
        ->where('status','=','1')
        ->orWhere('status','=','2')
        ->orWhere('status','=','3')
        ->where('id_teacher','=',"$id")
        ->select('courses.*')
        ->get();
        return view('students_courses.index', [
            'teachers' => $teachers,
            'student_courses' => $student_courses,
            'courses' => $courses
        ]);
    }

    public function show($id_course)
    {
        $students = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course','=',"$id_course")
        ->select('students_courses.*','users.fullname','courses.name')
        ->get();

        $course = DB::table('courses')
        ->where('id','=',"$id_course")
        ->select('courses.*')
        ->get();
        return view('students_courses.show', [
            'course' => $course,
            'students' => $students,
            'id_course' => $id_course
        ]);
    }

    public function create($id_course)
    {
        $students = DB::table('users')
        ->where('role','Student')
        ->whereNotExists(function($query) use ($id_course)
        {
            $query->select(DB::raw(1))
            ->from('students_courses')
            ->where('students_courses.id_course', "$id_course")
            ->whereRaw('students_courses.id_student = users.id');
        })
        ->get();
        $course = DB::table('courses')
        ->where('id','=',"$id_course")
        ->select('courses.*')
        ->get();
        return view('students_courses.create', [
            'students' => $students,
            'id_course' => $id_course,
            'course' => $course
            ]);
    }

    public function store(Request $request)
    {  
        $students = json_decode($request->data,true);

        foreach ( $students as $student ) {
            $create = StudentCourse::create([
                'id_student' =>$student['id_student'],
                'id_course' => $request->id_course
            ]);
        }
        //return redirect("/students_courses/{$id_course}"); 
    }

    public function destroy($id_student, $id_course)
    {
        $student_course = StudentCourse::where('id_course', '=', "$id_course")
        ->where('id_student', '=', "$id_student")
        ->delete();
        return redirect("students_courses/{$id_course}");
    }
}