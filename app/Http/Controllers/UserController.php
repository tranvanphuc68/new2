<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $email = session('email');
        return view('users.index', [
            'users' => $users,
            'email' => $email
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
        return redirect('index');
    }
}
