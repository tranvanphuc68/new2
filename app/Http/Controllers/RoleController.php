<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index()
    {
        $a = Role::all();
        return response()->json(['data' => $a]); //json_encode();
        // return view('index',[
        //     'a' => $a
        // ]);
    }

    public function create()
    {
        //Để vào trang create cần đăng nhập
        return 'create';
    }

    public function store()
    {
        //Auth::check()
    }
}
