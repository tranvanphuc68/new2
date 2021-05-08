<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    return view('comments.index', [
        'comments' => $comments
    ]);
}

public function show(Comment $comment)
{
    return view('comments.show', [
        'comment' => $comment
    ]);
}

public function create()
{
    return view('comments.create');
}

public function store(Request $request)
{
    $data = Comment::create($request->input());
    return redirect('/comments');
}

public function edit(Comment $comment)
{
    return view('comments.edit', [
        'comment' => $comment
    ]);
}

public function update(Request $request, Comment $comment)
{
    $comment->update([
        'content' => $request->content
    ]);
    return redirect('comments');
}

public function destroy(Comment $comment)
{
    $comment->delete();
    return redirect('comments');
}

}
