<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->select('posts.*', 'users.fullname')
        ->get();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($post)
    {   
        $post = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->select('posts.*', 'users.fullname')
        ->get();
        $post = $post[0];
        $comments = DB::table('comments')
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->select('comments.*', 'users.fullname')
        ->get();
        return view('posts.show', [
        'comments' => $comments,
        'post' => $post
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
            'content' => $request->content
        ]);
        return redirect('/posts');
    }

    public function update(Request $request, Post $post)
    {
        $post->update([
            'content' => $request->content
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
