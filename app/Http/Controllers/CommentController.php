<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
   //
//
public function index()
{
    $comments = DB::table('comments')
    ->join('posts', 'posts.id', '=', 'comments.id_post')
    ->select('comments.*', 'posts.id')
    ->get();
    return view('posts.show', [
        'comments' => $comments
    ]);
}

public function store(Request $request, $post)
{
    $data = Comment::create([
        'id_post' => $post,
        'id_user' => Auth::user()->id,
        'content' => $request->content
    ]);
    return redirect('/posts/{post}');
}

public function self_edit(Comment $comment)
{
    $id_user = Auth::user()->id;
    if($comment->id_user == $id_user)
    {
        return view('comments.edit', [
        'comment' => $comment
    ]);
    }
    else 
    {
        abort (401);
    }
}

public function update(Request $request, Comment $comment)
{
    $comment->update([
        'content' => $request->content
    ]);
    return redirect('/posts/{post}');
}

public function destroy(Comment $comment)
{
    $id_user = Auth::user()->id;
    if($comment->id_user == $id_user)
    {
        $comment->delete();
        return redirect('/posts/{post}');
    }
    else 
    {
        abort (401);
    }
}
}