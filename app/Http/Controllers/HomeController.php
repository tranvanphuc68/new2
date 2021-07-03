<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ReviewCourse;
use App\Models\User;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $review_course = ReviewCourse::all();
        $teachers = User::where('role', 'teacher')->orderBy('created_at', 'desc')
        ->limit(6)->get();
        $students = DB::table('students_courses')
        ->join('users','users.id','=','students_courses.id_student')
        ->select('students_courses.feedback','users.first_name', 'users.last_name','users.avatar' ,'users.accomplishment')
        ->limit(6)
        ->get();

        $count_teachers = User::where('role', 'teacher')->count();
        $count_students = User::where('role', 'student')->count();
        $count_courses =  ReviewCourse::all()->count();
        $count_classes = Course::all()->count();
        return view('home.index', [
            'review_course' => $review_course,
            'teachers' => $teachers,
            'students' => $students,
            'count_teachers'=>  $count_teachers,
            'count_students'=>  $count_students,
            'count_courses'=> $count_courses,
            'count_classes'=> $count_classes
        ]);
    }
    
}
