<?php

namespace App\Http\Controllers;

use App\Models\ReviewCourse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ReviewCourseController extends Controller
{
    public function create()
    {
        return view('home.courses.create');
    }

    public function store(Request $request)
    {   
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = time().".".$file->getClientOriginalExtension();
            Image::make($file)->save( public_path("/uploads/courses/".$name));
        }
        ReviewCourse::create([
            'course_name' => $request->input('course_name'),
            'input' => $request->input('input'),
            'output' => $request->input('output'),
            'time' => $request->input('time'),
            'duration' => $request->input('duration'),
            'tuition' => $request->input('tuition'),
            'target' => $request->input('target'),
            'student' => $request->input('student'),
            'skill_speaking' => $request->input('skill_speaking'),
            'skill_reading' => $request->input('skill_reading'),
            'skill_writing' => $request->input('skill_writing'),
            'skill_listening' => $request->input('skill_listening'),
            'grammar' => $request->input('grammar'),
            'vocabulary' => $request->input('vocabulary'),
            'final_test' => $request->input('final_test'),
            'image' => $name
        ]);
        return redirect('home');
    }

    public function show(ReviewCourse $id)
    {
        $review_course = $id;
        return view('home.courses.show', [
            'review_course' => $review_course
        ]);
    }

    public function edit(ReviewCourse $id)
    {
        $review_course = $id;
        return view('home.courses.edit', [
            'review_course' => $review_course
        ]);
    }

    public function update(Request $request, ReviewCourse $id)
    {
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = time().".".$file->getClientOriginalExtension();
            Image::make($file)->save( public_path("/uploads/courses/".$name));
        
        $id->update([
            'course_name' => $request->input('course_name'),
            'input' => $request->input('input'),
            'output' => $request->input('output'),
            'time' => $request->input('time'),
            'duration' => $request->input('duration'),
            'tuition' => $request->input('tuition'),
            'target' => $request->input('target'),
            'student' => $request->input('student'),
            'skill_speaking' => $request->input('skill_speaking'),
            'skill_reading' => $request->input('skill_reading'),
            'skill_writing' => $request->input('skill_writing'),
            'skill_listening' => $request->input('skill_listening'),
            'grammar' => $request->input('grammar'),
            'vocabulary' => $request->input('vocabulary'),
            'final_test' => $request->input('final_test'),
            'image' => $name
        ]);
        }
        else $id->update($request->input());
        return redirect("/review_course/$id->id");
    }
}
