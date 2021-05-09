<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->select('courses.*', 'users.fullname')
        ->get();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    public function show(Course $course)
    {   
        $detail = DB::table('detail_classes')
        ->join('courses', 'id_course', '=', 'id')
        ->where('id_course', '=', "$course->id")
        ->select('detail_classes.*', 'courses.name')
        ->get();
        
        return view('courses.show', [
            'detail' => $detail
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
