<?php

namespace App\Http\Controllers;

use App\Models\ReviewCourse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $review_course = ReviewCourse::all();
        return view('home.index', [
            'review_course' => $review_course
        ]);
    }
}
