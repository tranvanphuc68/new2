<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {   
        $id = Auth::user()->id;
        if( Auth::user()->role == 'Admin' )
        {
            $courses = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.id_teacher')
            ->select('courses.*', 'users.fullname')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        } 
        elseif( Auth::user()->role == 'Teacher' ){
            $courses = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.id_teacher')
            ->where('users.id', '=', "$id")
            ->select('courses.*', 'users.fullname')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        }
        else{ 
            $courses = DB::table('courses')
            ->join('students_courses', 'students_courses.id_course', '=', 'courses.id')
            ->join('users', 'users.id', '=', 'students_courses.id_student')
            ->where('users.id', '=', "$id")
            ->select('courses.*', 'users.fullname')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        }
    }

    public function show(Course $course)
    {   
        $id_course = $course->id;
        $detail = DB::table('detail_classes')
        ->join('courses', 'id_course', '=', 'id')
        ->where('id_course', '=', "$course->id")
        ->select('detail_classes.*', 'courses.name')
        ->get();
        return view('courses.show', [
            'detail' => $detail,
            'id_course' => $id_course
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