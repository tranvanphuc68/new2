<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FeeController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')
        ->where('status','=','1')
        ->orWhere('status','=','2')
        ->select('courses.*')
        ->get();

        $id = Auth::user()->id;
        $fees = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_student','=',"$id")
        ->select('students_courses.*','users.fullname','courses.name')
        ->get();
        return view('fees.index', [
            'fees' => $fees,
            'courses' => $courses
        ]);
    }

    public function show($id_course)
    {
        $students = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course','=',"$id_course")
        ->select('students_courses.*','users.fullname','courses.name','courses.fee')
        ->get();
        return view('fees.show', [
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
        ->select('students_courses.*','users.fullname','courses.name','courses.fee')
        ->get();
        return view('fees.edit', [
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
        ->select('students_courses.*','users.fullname','courses.name','courses.fee')
        ->get();
        //
        foreach ($students as $student) {
            DB::table('students_courses')
            ->where('id_student','=',$student->id_student)
            ->where('id_course','=',$student->id_course)
            ->update([
                'status_fee' => $request->input("$student->id_student")
            ]);
        }
        return redirect("/fees/{$students[0]->id_course}");
    }
}