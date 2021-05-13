<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
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
        ->where('courses.id_teacher', '=', "13")
        ->where('detail_classes.date', '=', "$today")
        ->select('detail_classes.*')
        ->get();
        return view('attendance.index', [
            'data' => $data
        ]);
    }

    public function create($id_course, $number)
    {   
        $check = DB::table('attendance')
        ->where('id_course', '=', "$id_course")
        ->where('num', '=', "$number")
        ->get();
        $data = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->where('students_courses.id_course', '=', "$id_course")
        ->select('students_courses.*', 'users.fullname')
        ->get();   
        return view('attendance.create', [
            'data' => $data,
            'id_course' => $id_course,
            'number' => $number,
            'check' => $check
        ]);
    }

    public function store(Request $request)
    {   
        $data = json_decode($request->data, true);
        foreach($data as $data)
        {
            $attendance = Attendance::create([
                'id_course' => $request->id_course,
                'num' => $request->number,
                'id_student' => $data['id_student'],
                'status' => $data['status']
            ]);
        }
    }
}