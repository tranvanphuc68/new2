<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('id','>=', '0')->get();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    public function show(Course $course)
    {
        return view('courses.show', [
            'course' => $course
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $data = Course::create($request->input());
        return redirect('/courses');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            'name' => $request->name
        ]);
        return redirect('courses');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('courses');
    }

}
