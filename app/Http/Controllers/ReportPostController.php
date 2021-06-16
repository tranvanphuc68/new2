<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\ReportPostRequest;
use App\Models\ReportPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportPostController extends Controller
{
    //
public function index(Post $post)
{
    $countPostHadBeenReported = DB::table('report_posts')
    ->count(DB::raw('DISTINCT id_post'));
    $countReportPost = DB::table('report_posts')
        ->where('report_posts.id_post', '=', "$post->id")
        ->count();
    $posts = DB::table('posts')
    ->join('report_posts', 'report_posts.id_post', '=', 'posts.id')
    ->join('users', 'users.id', '=', 'posts.id_user')
    ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')
    ->distinct()
    ->orderBy('id')
    ->paginate(10)
    ->withQueryString();
    $post = $posts[0];
    return view('report_posts.index', [
        'posts' => $posts,
        'countPostHadBeenReported' => $countPostHadBeenReported,
        'countReportPost' => $countReportPost
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
        ->paginate(10)
        ->withQueryString();
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

public function store(ReportPostRequest $request, $post)
{
    $data = ReportPost::create([
        'id_post' => $post, 
        'id_user' => Auth::user()->id,
        'content' => $request->content
    ]);
    return redirect("/posts/$post");
}

public function create($post)
    {   
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        return view('report_posts.create', [
            'post' => $post,
            'countPostHadBeenReported' => $countPostHadBeenReported
        ]);
    }

    public function search(){
        $countPostHadBeenReported = DB::table('report_posts')
        ->count(DB::raw('DISTINCT id_post'));
        // Get the search value from the request, ok 
        if(isset($_GET['search']))
        {
            $search = $_GET['search'];
            $posts = DB::table('posts')
            ->join('report_posts', 'report_posts.id_post', '=', 'posts.id')
            ->join('users', 'users.id', '=', 'posts.id_user')
            ->select('posts.*', 'users.first_name', 'users.last_name', 'users.avatar')->distinct()
            ->orderBy('id')
            ->where('posts.title', 'LIKE', "%".$search."%")
            ->paginate(10)
            ->withQueryString();
        return view('report_posts.search',[
            'posts' => $posts,
            'countPostHadBeenReported' => $countPostHadBeenReported
        ]);
        }
}

}