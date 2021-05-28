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
        $id = Auth::user()->id;
        $courses = DB::table('courses')
        ->select('courses.*')
        ->get();
        $fees = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_student','=',"$id")
        ->select('students_courses.*','users.first_name', 'users.last_name', 'courses.name','courses.fee')
        ->orderBy('last_name')
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
        ->select('students_courses.*','users.first_name', 'users.last_name','users.dob','courses.name','courses.fee')
        ->orderBy('last_name')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        $sum = DB::table('students_courses')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course','=',"$id_course")
        ->where('students_courses.status_fee', '1')
        ->sum('courses.fee');

        $count = DB::table('students_courses')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->where('id_course','=',"$id_course")
        ->where('students_courses.status_fee', '1')
        ->count('courses.fee');

        return view('fees.show', [
            'students' => $students,
            'id_course' => $id_course,
            'sum' => $sum,
            'count' => $count
        ]);
    }

    public function edit($id_course)
    {
        $students = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_course',$id_course)
        ->select('students_courses.*','users.first_name', 'users.last_name','users.dob','courses.name','courses.fee')
        ->orderBy('last_name')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
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
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name','courses.fee')
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