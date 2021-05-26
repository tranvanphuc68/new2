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
    $countPostHadBeenReported = DB::table('report_posts')
    ->count(DB::raw('DISTINCT id_post'));
    $posts = DB::table('posts')
    ->join('report_posts', 'report_posts.id_post', '=', 'posts.id')
    ->join('users', 'users.id', '=', 'posts.id_user')
    ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')->distinct()
    ->paginate(10);
    return view('report_posts.index', [
        'posts' => $posts,
        'countPostHadBeenReported' => $countPostHadBeenReported
    ]);
}

public function show(Post $post)
    {   
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        $countReportPost = DB::table('report_posts')
        ->where('report_posts.id_post', '=', "$post->id")
        ->count();
        $report_posts = DB::table('report_posts')
        ->join('users', 'users.id', '=', 'report_posts.id_user')
        ->join('posts', 'posts.id', '=', 'report_posts.id_post')
        ->where('report_posts.id_post', '=',"$post->id")
        ->select('report_posts.*','users.first_name', 'users.last_name', 'users.avatar')
        ->latest()
        ->paginate(10);
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->where('posts.id', '=', "$post->id")
        ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')
        ->latest()
        ->get();
        $post = $posts[0];
        return view('report_posts.show', [
        'report_posts' => $report_posts,
        'post' => $post,
        'countReportPost' => $countReportPost,
        'countPostHadBeenReported' => $countPostHadBeenReported
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