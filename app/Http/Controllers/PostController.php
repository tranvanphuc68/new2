<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')
        ->latest()
        ->paginate(10)
        ->withQueryString();
        $countPost = DB::table('posts')
        ->count();
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        return view('posts.index', [
            'posts' => $posts,
            'countPost' => $countPost,
            'countPostHadBeenReported' => $countPostHadBeenReported
        ]);
    }

    public function show($post)
    { 
        $comments = DB::table('comments')
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->where('comments.id_post', '=', "$post")
        ->select('comments.*', 'users.first_name', 'users.last_name', 'users.avatar')
        ->latest()
        ->get();
        $countComment = DB::table('comments')
        ->where('comments.id_post', '=', "$post")
        ->count();
        $countReportPost = DB::table('report_posts')
        ->where('report_posts.id_post', '=', "$post")
        ->count();
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));

        $post = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.id_user')
        ->where('posts.id', '=', "$post")
        ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')
        ->latest()
        ->get();
        $post = $post[0];
        return view('posts.show', [
        'comments' => $comments,
        'post' => $post,
        'countComment' => $countComment,
        'countReportPost' => $countReportPost,
        'countPostHadBeenReported' => $countPostHadBeenReported
    ]);
    }

    public function create()
    {   
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        return view('posts.create', [
            'countPostHadBeenReported' => $countPostHadBeenReported
        ]);
    }

    public function store(PostRequest $request)
    {
        $data = Post::create([
            'id_user' => Auth::user()->id,
            'content' => $request->content,
            'title' => $request->title
        ]);
        return redirect('/posts');
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update([
            'content' => $request->content,
            'title' => $request->title
        ]);
        return redirect("posts/{$post->id}");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }

    public function self_edit(Post $post)
    {
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        $id_user = Auth::user()->id;
        if($post->id_user == $id_user)
        {
            return view('posts.edit', [
                'post' => $post,
                'countPostHadBeenReported' => $countPostHadBeenReported
            ]);
        }
        else 
        {
            abort (401);
        }
    }

    public function search(){
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        // Get the search value from the request, ok 
        if(isset($_GET['search']))
        {
            $search = $_GET['search'];
            $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.id_user')
            ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')
            ->where('posts.title', 'LIKE', "%".$search."%")
            ->latest()
            ->paginate(10)
            ->withQueryString();
        return view('posts.search',[
            'posts' => $posts,
            'countPostHadBeenReported' => $countPostHadBeenReported
        ]);
        }
}


}