<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $admins = User::where('role', 'admin')->get();
        $teachers = User::where('role', 'teacher')->get();
        $students = User::where('role', 'student')->get();
        return view('users.index', [
            'teachers' => $teachers,
            'admins' => $admins,
            'students' => $students
        ]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $data = User::create([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role')
        ]);
        return redirect('/users');
    }
}
