<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeeController extends Controller
{
    public function index()
    {
    $fees = DB::table('fees')
        ->join('users', 'users.id', '=', 'fees.id_student')
        ->join('courses', 'courses.id', '=', 'fees.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course', 'courses.fee','fees.status')
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

    public function edit($id_student, $id_course)
    {
        $data = Fee::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->get();
        $fee = $data[0];
        return view('fees.edit', [
            'fee' => $fee
        ]);
    }

    public function update(Request $request, $id_student, $id_course)
    {
        $fee = Fee::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->update([
            'id_student' => $request->id_student,
            'id_course' => $request->id_course,
            'status' => $request->status
        ]);
        return redirect('fees');

    }
}