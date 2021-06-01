@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
<div class="content">
    <div class="container">
        <!-- Number of posts -->
        <div class="mb-3">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <h2 class="number_post">number of posts ({{ $countPost }})</h2>
                </div>
            </div>
        </div>

        <!-- Search post -->
        <div class="mb-5">
            <div class="mx-auto d-flex justify-content-center row">
                <form action="{{ url("/post/search") }}" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-danger mr-3" type="reset" title="Refresh page">
                                <span class="fa fa-refresh"> Refresh </span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-3" name="search" placeholder="Search by post title" id="search">
                        <a href="{{ url("/posts") }}">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="submit" title="Search posts">
                                    <span class="fa fa-search"> Search </span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- posts -->
        @foreach ($posts as $post)
        <div class="mb-2">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="d-flex flex-column comment-section" id="myGroup">
                        <a href="{{ url("/posts/$post->id") }}">
                            <div style="background-color: rgb(207, 213, 241); border: 2px solid rgb(160, 158, 241); border-radius: 10px;" class="p-3">
                                <div class="d-flex flex-row user-info mb-1">
                                    <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                                    <div class="d-flex flex-column justify-content-start ml-3">
                                        <span class="d-block font-weight-bold name" style="color: #08168dd5; ">{{ $post->first_name." ".$post->last_name }}</span>
                                        <span class="date" style="color: hsl(202, 73%, 51%); ">{{ $post->created_at }}</span>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <h5 style="color: #0e0e3de5; " class="ml-4 mr-1">{{ $post->title }}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!--Pagination post-->
        <div class="mb-2 mt-5">
            <div class="d-flex justify-content-center row">
                    {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection