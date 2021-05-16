<?php

namespace App\Http\Controllers;

use App\Models\ReportPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportPostController extends Controller
{
    //
public function index()
{
    $posts = DB::table('posts')
    ->join('report_posts', 'report_posts.id_post', '=', 'posts.id')
    ->join('users', 'users.id', '=', 'posts.id_user')
    ->select('posts.*', 'users.fullname')->distinct()
    ->get();
    return view('report_posts.index', [
        'posts' => $posts
    ]);
    
}

public function show(Post $post)
    {   
        $report_posts = DB::table('report_posts')
        ->join('users', 'users.id', '=', 'report_posts.id_user')
        ->join('posts', 'posts.id', '=', 'report_posts.id_post')
        ->where('report_posts.id_post', '=',"$post->id")
        ->select('report_posts.*', 'users.fullname')
        ->latest()
        ->get();
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->where('posts.id', '=', "$post->id")
        ->select('posts.*', 'users.fullname')
        ->latest()
        ->get();
        $post = $posts[0];
        return view('report_posts.show', [
        'report_posts' => $report_posts,
        'post' => $post
    ]);
    }

public function store(Request $request, $post)
{
    $data = ReportPost::create([
        'id_post' => $post, 
        'id_user' => Auth::user()->id,
        'content' => $request->content
    ]);
    return redirect('/posts');
}

public function create($post)
    {   
        return view('report_posts.create', [
            'post' => $post
        ]);
    }

}