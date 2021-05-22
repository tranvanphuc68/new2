@extends('layouts.forum.app')

@section('title')
    report post
@endsection

@section('content')
<div class ="container content">
    <div class="title-block">
        <h2 class="title"> DANH SÁCH POST BỊ BÁO CÁO </h2>
    </div>
    <form role="search" style="text-align: right" class="mb-4">
        <div class="input-container">
            <i class="fa fa-search"></i>
            <input type="search" placeholder="Search">
            <div class="underline"></div>
        </div>
    </form>
    <table class="table table-striped table-hover"  style="border: 2px solid black; ">
        <thead class="bg-dark text-white">
            <tr>
                <th>ID POST</th>
                <th>Name</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    <img class="rounded-circle img" width="40"  src="{{ asset("/uploads/avatars/$post->avatar") }}">
                    {{ $post->fullname }}
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <!-- Show report post -->
                    <a href="{{ url("/report_posts/{$post->id}") }}" class="btn"><i class="fa fa-eye"></i></a>
                    
                    <!-- Delete post -->
                    <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" style="color: black" class="btn">
                        <i class="fa fa-trash"></i>
                    </a>
                    <form action='{{ url("/posts/$post->id") }}' method="POST" id="post-delete-{{ $post->id }}">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection