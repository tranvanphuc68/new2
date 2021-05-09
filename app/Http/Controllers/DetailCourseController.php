<?php

namespace App\Http\Controllers;

use App\Models\DetailCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailCourseController extends Controller
{
    public function create()
    {
        return view('courses.detail.create');
    }

    public function store(Request $request)
    {
        $data = DetailCourse::create($request->input());
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

    public function update(Request $request, $id_course, $number)
    {   
        $data = DetailCourse::where('id_course', '=', "$id_course")
        ->where('number', '=', "$number")
        ->update([
            'date' => $request->date,
            'content' => $request->content
        ]);
        return redirect("courses/{$request->id_course}");
    }

    public function destroy($id_course, $number)
    {
        $data = DetailCourse::where('id_course', '=', "$id_course")
        ->where('number', '=', "$number")
        ->delete();
        return redirect("courses/{$id_course}");
    }

}
