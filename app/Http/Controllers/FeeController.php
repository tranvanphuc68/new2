<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeeController extends Controller
{
    $fees = DB::table('fees')
        ->join('users', 'users.id', '=', 'fees.id_student')
        ->join('courses', 'courses.id', '=', 'fees.id_course')
        ->select('id_student', 'users.fullname', 'courses.name')
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

    public function create()
    {
        return view('fees.create');
    }

    public function store(Request $request)
    {
        $data = Fee::create($request->input());
        return redirect('/fees');
    }

    public function edit(Fee $fee)
    {
        return view('fees.edit', [
            'fee' => $fee
        ]);
    }

    public function update(Request $request, Fee $fee)
    {
        $fee->update([
            'name' => $request->name
        ]);
        return redirect('fees');
    }

    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect('fees');
    }
}
