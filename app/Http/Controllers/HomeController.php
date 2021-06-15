<?php

namespace App\Http\Controllers;

use App\Models\ReviewCourse;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $review_course = ReviewCourse::all();
        $teachers = User::where('role', 'teacher')->orderBy('created_at', 'desc')
        ->limit(6)->get();
        $students = User::where('role', 'student')->orderBy('created_at', 'desc')
        ->limit(6)->get();
        return view('home.index', [
            'review_course' => $review_course,
            'teachers' => $teachers,
            'students' => $students
        ]);
    }
    
}
