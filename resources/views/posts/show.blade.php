@extends('layouts.forum.app')

@section('title')
    Show Post
@endsection

@section('content')
<div class="content">
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8" style="border-top: 3px solid rgb(201, 220, 221); border-left: 2px solid rgb(201, 220, 221); border-right: 2px solid rgb(201, 220, 221); background-color:rgb(255, 255, 255); border-radius: 10px; border-bottom: 5px solid rgb(218, 227, 245); background-color:rgb(228, 238, 255)">
                    <div class="d-flex flex-column comment-section" id="myGroup">
                        <div class="pt-3">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $post->first_name." ".$post->last_name }}</span>
                                    <span class="date" style="color:rgb(117, 117, 117)">{{ $post->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2 ml-4">
                                <h4>{{ $post->title }}</h4>
                                <div>{{ $post->content }}</div>
                            </div>
                        </div>

                        @if (Auth::check())
                        <div class="p-2">
                            <div class="d-flex flex-row fs-12" style="justify-content:flex-end">
                                <!-- Edit post -->
                                @if ($post->id_user == Auth::user()->id )
                                <span class="ml-3">
                                    <a href="{{ url("/posts/$post->id/self_edit") }}" style="color: black">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </span>
                                @endif
                                
                                <!-- Delete post -->
                                @if (($post->id_user == Auth::user()->id) || (Auth::user()->role == "Admin") )
                                    <span class="ml-3">
                                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" style="color: black">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    
                                        <form action='{{ url("/posts/$post->id") }}' method="POST" id="post-delete-{{ $post->id }}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </span>
                                @endif

                                <!-- Report post -->
                                    <span class="ml-3">
                                            <a href="{{ url("/report_posts/$post->id/create")}}" style="color: black">
                                                <i class="fa fa-flag"></i>
                                                <span class="counter">({{ $countReportPost }})</span>
                                            </a>
                                    </span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Comment -->
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8" style="border-bottom: 3px solid rgb(201, 220, 221); border-left: 2px solid rgb(201, 220, 221); border-right: 2px solid rgb(201, 220, 221); background-color:rgb(255, 255, 255); border-radius: 10px; border-top: 5px solid rgb(64, 124, 235);">

                    <!-- Create comment -->
                    @if (Auth::check())
                    <form method="POST" action="{{ url("/comments/{$post->id}") }}" >
                        @csrf
                        <div class="d-flex flex-row align-items-start mt-4">
                            <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                            <textarea class="form-control ml-1 shadow-none textarea" name="content" placeholder="Comment your idea"></textarea>
                        </div>
                        @error('content')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mt-2 text-right">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                        </div>
                    </form>
                    @endif

                    <!--count comment -->
                    <h5 class="mb-3 ml-5" style="color:rgb(64, 124, 235);">Comments ({{ $countComment }})</h5>

                    <!-- Show comment -->
                    @foreach ($comments as $comment)
                    <div class="d-flex flex-column comment-section mt-2 ml-4" id="myGroup">
                        <div class="ml-4" style="background-color:rgb(209, 213, 235); border-radius: 10px; ">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$comment->avatar") }}">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $comment->first_name." ".$comment->last_name }}</span>
                                    <span class="date text-black-50">{{ $comment->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2 ml-5">
                                <div style="color: rgb(8, 8, 8)">{{ $comment->content }}</div>
                            </div>
                        </div>

                        @if (Auth::check())
                            @if(($comment->id_user == Auth::user()->id))
                            <div class="mb-1">
                                <div class="d-flex flex-row fs-12 justify-content-end ml-4" style="background-color:rgb(209, 213, 235);">
                                    <!-- Edit comment -->
                                    <div class="like p-2">
                                        <a href="{{ url("/comments/$comment->id/self_edit") }}">
                                            <i class="fa fa-pencil"></i>
                                            <span class="ml-1"></span>
                                        </a>
                
                                    </div>

                                    <!-- Delete comment-->
                                    <div class="like p-2">
                                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('comment-delete-{{ $comment->id }}').submit()">
                                            <i class="fa fa-trash">
                                                <span class="ml-1"></span>
                                            </i>
                                        </a>
                                        

                                        <form action='{{ url("/comments/{$comment->id}") }}' method="POST" id="comment-delete-{{ $comment->id }}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection