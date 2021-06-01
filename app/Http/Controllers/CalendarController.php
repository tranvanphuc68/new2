<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index_teacher()
    {
        $id = Auth::user()->id;
        $data = DB::table('courses')
            ->join('detail_classes','detail_classes.id_course', '=', 'courses.id')
            ->where('courses.id_teacher', "$id")
            ->select('detail_classes.*', 'courses.name', 'courses.timetable')
            ->get();
            foreach($data as $item)
            {
                $item->date = Controller::formatDate($item->date);
            }
        $date = Carbon::now();
        $afterWeek = Carbon::now()->addDays(6);
        $arr = [];
        $key = 0;
        while($date < $afterWeek)
        {   
            $valueDay =  Controller::formatDate($date);
            $arr2 = ["$key" => $valueDay];
            $arr = array_merge($arr, $arr2);
            $date->addDay();
            $key++;
        }
        return view('calendar.index', [
            'arr' => $arr,
            'data' => $data
        ]);
    }

    public function index_student()
    {
        $id = Auth::user()->id;
        $data = DB::table('courses')
            ->join('detail_classes','detail_classes.id_course', '=', 'courses.id')
            ->join('students_courses', 'students_courses.id_course', '=', 'courses.id')
            ->where('students_courses.id_student', "$id")
            ->select('detail_classes.*', 'courses.name', 'courses.timetable')
            ->get();
            foreach($data as $item)
            {
                $item->date = Controller::formatDate($item->date);
            }
        $date = Carbon::now();
        $afterWeek = Carbon::now()->addDays(6);
        $arr = [];
        $key = 0;
        while($date < $afterWeek)
        {   
            $valueDay =  Controller::formatDate($date);
            $arr2 = ["$key" => $valueDay];
            $arr = array_merge($arr, $arr2);
            $date->addDay();
            $key++;
        }
        return view('calendar.index', [
            'arr' => $arr,
            'data' => $data
        ]);
    }
}