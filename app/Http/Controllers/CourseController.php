<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\CourseRequest;
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
            ->select('courses.*', 'users.first_name', 'users.last_name')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        } 
        elseif( Auth::user()->role == 'Teacher' ){
            $courses = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.id_teacher')
            ->where('users.id', '=', "$id")
            ->select('courses.*', 'users.first_name', 'users.last_name')
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
            ->select('courses.*', 'users.first_name', 'users.last_name')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        }
    }

    public function show(Course $course)
    {   
        $id_course = $course->id;
        $course = DB::table('courses')
        ->where('courses.id', "$id_course")
        ->get();
        $course = $course[0];
        $detail = DB::table('detail_classes')
        ->join('courses', 'id_course', '=', 'id')
        ->where('id_course', '=', "$course->id")
        ->select('detail_classes.*', 'courses.name','courses.timetable')
        ->get();
        foreach($detail as $class)
        {
            $class->date = Controller::formatDate($class->date);
        };
        return view('courses.show', [
            'detail' => $detail,
            'id_course' => $id_course,
            'course' => $course
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseRequest $request)
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

    public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->input());
        return redirect('courses');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('courses');
    }

    public function search()
    {   
        $courseName = $_GET['search'];
        $id = Auth::user()->id;
        if( Auth::user()->role == 'Admin' )
        {   
            $courses = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.id_teacher')
            ->select('courses.*', 'users.first_name', 'users.last_name')
            ->where('name', 'LIKE', '%'.$courseName.'%')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        } 
        elseif( Auth::user()->role == 'Teacher' ){
            $courses = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.id_teacher')
            ->where('users.id', '=', "$id")
            ->where('name', 'LIKE', '%'.$courseName.'%')
            ->select('courses.*', 'users.first_name', 'users.last_name')
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
            ->where('name', 'LIKE', '%'.$courseName.'%')
            ->select('courses.*', 'users.first_name', 'users.last_name')
            ->paginate(5)->withQueryString();
            return view('courses.index', [
                'courses' => $courses
            ]);
        }
    }
}