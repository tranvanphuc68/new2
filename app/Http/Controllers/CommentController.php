<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
   //
public function store(CommentRequest $request, $post)
{       
    $data = Comment::create([
        'id_post' => $post,
        'id_user' => Auth::user()->id,
        'content' => $request->content
    ]);
    return redirect("/posts/{$post}");
}

public function self_edit(Comment $comment)
{
    $countPostHadBeenReported = DB::table('report_posts')
    ->count(DB::raw('DISTINCT id_post'));
    $id_user = Auth::user()->id;
    if($comment->id_user == $id_user)
    {
        return view('comments.edit', [
        'comment' => $comment,
        'countPostHadBeenReported' => $countPostHadBeenReported
    ]);
    }
    else 
    {
        abort (401);
    }
}

public function update(CommentRequest $request, Comment $comment)
{
    $comment->update([
        'content' => $request->content
    ]);
    return redirect("/posts/{$comment->id_post}");
}

public function destroy(Comment $comment)
{
    $id_user = Auth::user()->id;
    if($comment->id_user == $id_user)
    {
        $comment->delete();
        return redirect("/posts/{$comment->id_post}");
    }
    else 
    {
        abort (401);
    }
}
}