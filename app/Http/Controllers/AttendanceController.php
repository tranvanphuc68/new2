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
        ->where('courses.id_teacher', '=', "$id")
        ->where('detail_classes.date', '=', "$today")
        ->select('detail_classes.*','courses.name','courses.timetable')
        ->get();
        $today = Controller::formatDate($today);
        return view('attendance.index', [
            'data' => $data,
            'today' => $today
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
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('students_courses.id_course', '=', "$id_course")
        ->select('students_courses.*', 'users.fullname', 'users.dob','courses.name')
        ->get();
        foreach($data as $item)
        {
            $item->dob = Controller::formatDate($item->dob);
        }
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