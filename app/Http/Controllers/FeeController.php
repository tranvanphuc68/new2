<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeeController extends Controller
{
    public function index()
    {
    $fees = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'courses.fee','status_fee')
        ->get();
    return view('fees.index', [
            'fees' => $fees
        ]);
    }

    public function show(Fee $fee)
    {
        return view('fees.show', [
            'fee' => $fee
        ]);
    }

    public function edit()
    {
        $fees = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'courses.fee','status_fee')
        ->get();
        return view('fees.edit', [
            'fees' => $fees
        ]);
    }

    public function update(Request $request)
    {
        $fees = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'courses.fee','status_fee')
        ->get();
        //
        foreach ($fees as $fee) {
            $status_fee = $fee->id_student . $fee->id_course . '_status_fee';
            DB::table('students_courses')
            ->where('id_student','=',$fee->id_student)
            ->where('id_course','=',$fee->id_course)
            ->update([
                'status_fee' => $request->input($status_fee)
            ]);
        }
        return redirect('fees');

    }
}
