<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        $teachers = User::where('role', 'teacher')->get();
        $students = User::where('role', 'student')->get();
        return view('users.index', [
            'teachers' => $teachers,
            'admins' => $admins,
            'students' => $students
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = User::create([
            'id' => $request->input('id'),
            'fullname' => $request->input('fullname'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'hometown' => $request->input('hometown'),
            'id_card' => $request->input('id_card'),
            'academic_level' => $request->input('academic_level'),
            'accomplishment' => $request->input('accomplishment'),
            'account' => $request->input('account'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role')
        ]);
        return redirect('/users');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update([  
            'id' => $request->id,
            'name' => $request->fullname
        ]);
        return redirect('users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users');
    }

    public function self_edit()
    {
        $user = Auth::user();
        return view('users.edit', [
            'user' => $user
        ]);
    }
}
