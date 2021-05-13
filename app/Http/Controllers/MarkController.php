<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkController extends Controller
{
    public function index()
    {
    $marks = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'mark')
        ->get();
    return view('marks.index', [
            'marks' => $marks
        ]);
    }

    public function show(mark $mark)
    {
        return view('marks.show', [
            'mark' => $mark
        ]);
    }

    public function edit()
    {
        $marks = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'mark')
        ->get();
        return view('marks.edit', [
            'marks' => $marks
        ]);
    }

    public function update(Request $request)
    {
        $marks = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'mark')
        ->get();
        //
        foreach ($marks as $mark) {
            $mark_update = $mark->id_student . $mark->id_course . '_mark';
            DB::table('students_courses')
            ->where('id_student','=',$mark->id_student)
            ->where('id_course','=',$mark->id_course)
            ->update([
                'mark' => $request->input($mark_update)
            ]);
        }
        return redirect('marks');
    }
}
