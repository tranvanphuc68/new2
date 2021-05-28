<?php

namespace App\Http\Controllers;

use App\Models\DetailCourse;
use App\Http\Requests\DetailCourseRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailCourseController extends Controller
{
    public function create($id_course)
    {   
        $data = DetailCourse::where('id_course', '=', "$id_course")
        ->count();
        $data++;
        $course = DB::table('courses')
        ->where('courses.id', "$id_course")
        ->get();
        $course = $course[0];
        if ($data > $course->lessons){
            return redirect("/courses/$id_course")->withErrors(['full' => 'KHÔNG THỂ VƯỢT QUÁ SỐ BUỔI']);
        }
        return view('courses.detail.create', [
            'id_course' => $id_course,
            'data' => $data,
        ]);
    }

    public function store(DetailCourseRequest $request, $id_course)
    {
        $data = DetailCourse::create([
            'id_course' => $id_course,
            'number' => $request->number,
            'date' => $request->date,
            'content' => $request->content,
            'status' => 0
        ]);
        return redirect("courses/{$request->id_course}");
    }

    public function edit($id_course, $number)
    {   
        $data = DetailCourse::where('id_course', '=', "$id_course")
        ->where('number', '=', "$number")
        ->get();
        $course = $data[0];
        return view('courses.detail.edit', [
            'course' => $course
        ]);
    }

    public function update(DetailCourseRequest $request, $id_course, $number)
    {   
        $data = DetailCourse::where('id_course', '=', "$id_course")
        ->where('number', '=', "$number")
        ->update([
            'date' => $request->date,
            'content' => $request->content
        ]);
        return redirect("courses/{$request->id_course}");
    }
}