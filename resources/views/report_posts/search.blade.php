@extends('layouts.forum.app')

@section('title')
    Search
@endsection

@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class ="container content">
        <h3 class="title text-Noto mb-3"> Danh sách post bị báo cáo </h3>
        
        <!-- Search -->
        <div class="mx-auto d-flex justify-content-end row">
            <form action="{{ url("/report_post/search") }}" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control mr-3" name="search" placeholder="Search by post title" id="search">
                    <button class="btn btn-info" type="submit" title="Search posts">
                        <span class="fa fa-search text-white"></span>
                    </button>
                </div>
            </form>
        </div>
        <!-- /search -->

        <table class="table table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <th class="center">ID</th>
                    <th class="center">Name</th>
                    <th class="center">Title</th>
                    {{-- <th class="center">Content</th> --}}
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
                    <td class="left"><div class="over_flow word-break">{!! $post->title !!}</div></td>
                    <td class="center">
                        <!-- Show post -->
                        <a href="{{ url("/posts/$post->id") }}" class="btn"><i class="fa fa-eye icon-view-post"></i></a>

                        <!-- Show report post -->
                        <a href="{{ url("/report_posts/{$post->id}") }}" class="btn"><i class="fa fa-exclamation-circle icon-view-report"></i></a>
                        
                        <!-- Delete post -->
                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" class="btn">
                            <i class="fa fa-trash icon-delete-post"></i>
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
</main>
@endsection