<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $today = Carbon::now()->format('Y-m-d');
        $data = DB::table('detail_classes')
        ->join('courses', 'courses.id', '=', 'detail_classes.id_course')
        ->where('courses.id_teacher', '=', "11")
        ->where('detail_classes.date', '=', "$today")
        ->select('detail_classes.*')
        ->get();
        return view('attendance.index', [
            'data' => $data
        ]);
    }

    public function create($id_course, $number)
    {
        $data = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->where('students_courses.id_course', '=', "$id_course")
        ->select('students_courses.*', 'users.fullname')
        ->get();   
        return view('attendance.create', [
            'data' => $data,
            'id_course' => $id_course,
            'number' => $number
        ]);
    }

    public function store(Request $request)
    {   
        
        dd($request);
    }
}
