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
        return view('fees.edit', [
            'id_student' => $id_student,
            'id_course' => $id_course

        ]);
    }

    public function update(Request $request, $id_student, $id_course)
    {
        $fee->update([
            'status' => $request->status
        ]);
        return redirect('fees');
    }
}
