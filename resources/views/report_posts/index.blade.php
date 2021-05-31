@extends('layouts.forum.app')

@section('title')
    report post
@endsection

@section('content')
<div class ="container content">
    <h3 class="title text-Noto"> Danh sách post bị báo cáo </h3>
    <!-- Search -->
    <div class="mx-auto d-flex justify-content-end row">
        <form action="{{ url("/report_post/search") }}" method="GET" role="search">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-danger mr-3" type="reset" title="Refresh page">
                        <span class="fa fa-refresh"> Refresh </span>
                    </button>
                </span>
                <input type="text" class="form-control mr-3" name="search" placeholder="Search by post title" id="search">
                <a href="{{ url("/report_posts") }}">
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="submit" title="Search posts">
                            <span class="fa fa-search"> Search </span>
                        </button>
                    </span>
                </a>
            </div>
        </form>
    </div>
    <table class="table table-bordered table-hover mt-4">
        <thead>
            <tr class="bg-blue text-white">
                <th class="center">ID</th>
                <th class="center">Name</th>
                <th class="center">Title</th>
                <th class="center">Content</th>
                <th class="center">Action</th>
            </tr>
        </thead>

        @foreach ($posts as $post)
            <tr class="bg-white">
                <td class="center">{{ $post->id }}</td>
                <td class="left">
                    <img class="rounded-circle img" width="30px"  src="{{ asset("/uploads/avatars/$post->avatar") }}">
                    {{ $post->first_name." ".$post->last_name }}
                </td>
                <td class="left">{{ $post->title }}</td>
                <td class="left">{{ $post->content }}</td>
                <td class="center">
                    <!-- Show report post -->
                    <a href="{{ url("/report_posts/{$post->id}") }}" class="btn"><i class="fa fa-eye icon-view"></i></a>
                    
                    <!-- Delete post -->
                    <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" style="color: black" class="btn">
                        <i class="fa fa-trash icon-delete"></i>
                    </a>
                    <form action='{{ url("/posts/$post->id") }}' method="POST" id="post-delete-{{ $post->id }}">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <!-- Pagination -->
    {{ $posts->links() }}
</div>
@endsection