<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }
    public function show($year)
    {
        $january = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','1')
        ->count('id');
        $february = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','2')
        ->count('id');       
        $march = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','3')
        ->count('id');
        $april = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','4')
        ->count('id');
        $may = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','5')
        ->count('id');
        $june = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','6')
        ->count('id');
        $july = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','7')
        ->count('id');
        $august = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','8')
        ->count('id');
        $september = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','9')
        ->count('id');
        $october = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','10')
        ->count('id');        
        $november = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','11')
        ->count('id');
        $december = DB::table('users')
        ->where('role','Student')
        ->whereYear('created_at',"$year")
        ->whereMonth('created_at','12')
        ->count('id');
        return view('report.show', [
            'year' => $year,
            'january' => $january,
            'february' =>$february,        
            'march' =>$march,
            'april' =>$april,
            'may' =>$may,
            'june' =>$june,
            'july' =>$july,
            'august' =>$august,
            'september' =>$september,
            'october' =>$october,
            'november' =>$november,
            'december' =>$december
        ]);
    }
    public function bonus()
    {
        $bonus = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->join('courses','courses.id','=','students_courses.id_course')
        ->select('students_courses.id_course',DB::raw('MAX(mark) as max'))
        ->where('courses.status', '3') 
        ->groupBy('id_course')
        ->get(); 
        $res = [];
        //dd($bonus);
        foreach($bonus as $item)
        {
            $query = DB::table('students_courses')
            ->join('users','users.id','=','students_courses.id_student')
            ->join('courses','courses.id','=','students_courses.id_course')
            ->where('students_courses.id_course', "$item->id_course")
            ->where('students_courses.mark', "$item->max")
            ->select('users.id','users.first_name','users.last_name','courses.name','students_courses.mark')
            ->get();
            //dd($query);foreach query, foreach 2 lan, hơi rối chứ sao ))=
            array_push($res, (array)$query);
        }
        //dd($res); hơi đau đầu )))=
        // foreach($res as $item){
        //     foreach($item as $course){    
        //         foreach($course as $student){   
        //             dd( $student->first_name.$student->last_name);
        //         }
        //     }
        // }
        return view('report.bonus', [
            'res' => $res
        ]);
    }
}
