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
        if(isset($_GET['searchByAdmin']))
        {
            $searchByAdmin = $_GET['searchByAdmin'];
            $courses = DB::table('courses')
            ->where('name', 'LIKE', '%'.$searchByAdmin.'%')
            ->orWhere('id','LIKE', "%".$searchByAdmin."%")
            ->select('courses.*')
            ->get();
        }
        else {
            $courses = DB::table('courses')
            ->select('courses.*')
            ->get();
        }
        if(isset($_GET['searchByStudent']))
        {
            $searchByStudent = $_GET['searchByStudent'];
            $fees = DB::table('courses')
            ->join('students_courses','students_courses.id_course','=','courses.id')
            ->where(function($query) use ($id)
                {
                    $query->select(DB::raw(1))
                    ->from('students_courses')
                    ->whereRaw("students_courses.id_student = $id");
                })
            ->where(function ($query) use ($searchByStudent){
                $query->where('name', 'LIKE', '%'.$searchByStudent.'%')
                    ->orWhere('id','LIKE', "%".$searchByStudent."%");
                })
            ->select('courses.*','students_courses.*')
            ->get();
        }
        else {
            $fees = DB::table('students_courses')
            ->join('users','users.id','=','students_courses.id_student')
            ->join('courses','courses.id','=','students_courses.id_course')
            ->where('id_student','=',"$id")
            ->select('students_courses.*','users.first_name', 'users.last_name', 'courses.name','courses.fee')
            ->orderBy('last_name')
            ->get();
        }
        return view('fees.index', [
            'fees' => $fees,
            'courses' => $courses
        ]);
    }

    public function show($id_course)
    {   
        if(isset($_GET['search']))
        {
            $searchStudents = $_GET['search'];
            $students = DB::table('users')
            ->join('students_courses', 'students_courses.id_student', '=', 'users.id')
            ->where('role', 'student')
            ->whereExists(function($query) use ($id_course)
                {
                    $query->select(DB::raw(1))
                    ->from('students_courses')
                    ->whereRaw("students_courses.id_student = users.id");
                })
            ->where('id_course',"$id_course")
            ->where(function ($query) use ($searchStudents){
                $query->where('last_name','LIKE', "%".$searchStudents."%")
                    ->orWhere('first_name','LIKE', "%".$searchStudents."%")
                    ->orWhere('id','LIKE', "%".$searchStudents."%");
                })
            ->select('users.*','students_courses.*')
            ->orderBy('last_name')
            ->get();
            foreach($students as $student)
            {
                $student->dob = Controller::formatDate($student->dob);
            }
        }
        else {
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

        $countStu = DB::table('students_courses')
        ->where('id_course','=',"$id_course")
        ->count('id_student');

        $course = DB::table('courses')
        ->where('id','=',"$id_course")
        ->select('courses.*')
        ->get();
        return view('fees.show', [
            'students' => $students,
            'id_course' => $id_course,
            'sum' => $sum,
            'course' => $course,
            'countStu' => $countStu,
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