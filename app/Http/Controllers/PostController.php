<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Comment;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->select('posts.*', 'users.fullname')
        ->latest()
        ->get();
        $countPost = DB::table('posts')
        ->count();
        return view('posts.index', [
            'posts' => $posts,
            'countPost' => $countPost
        ]);
    }

    public function show($post)
    { 
        $comments = DB::table('comments')
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->where('comments.id_post', '=', "$post")
        ->select('comments.*', 'users.fullname')
        ->latest()
        ->get();
        $countComment = DB::table('comments')
        ->where('comments.id_post', '=', "$post")
        ->count();
        $countReportPost = DB::table('report_posts')
        ->where('report_posts.id_post', '=', "$post")
        ->count();
        
        $post = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->where('posts.id', '=', "$post")
        ->select('posts.*', 'users.fullname')
        ->latest()
        ->get();
        $post = $post[0];
        
        return view('posts.show', [
        'comments' => $comments,
        'post' => $post,
        'countComment' => $countComment,
        'countReportPost' => $countReportPost
        
        
    ]);
    }

    public function create()
    {   
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = Post::create([
            'id_user' => Auth::user()->id,
            'content' => $request->content,
            'title' => $request->title

        ]);
        return redirect('/posts');
    }

    public function update(Request $request, Post $post)
    {
        $post->update([
            'content' => $request->content,
            'title' => $request->title
        ]);
        return redirect('posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }

    public function self_edit(Post $post)
    {
        $id_user = Auth::user()->id;
        if($post->id_user == $id_user)
        {
            return view('posts.edit', [
                'post' => $post
            ]);
        }
        else 
        {
            abort (401);
        }
    }
}
