@extends('layouts.forum.app')

@section('title')
    report post
@endsection

@section('content')
@if ($countPostHadBeenReported > 0)
<main id="tt-pageContent" class="tt-offset-small">
    <div class ="container">
        <h3 class="title text-Noto mb-3"> Danh sách post bị báo cáo </h3>

        <!-- Search -->
        <div class="mx-auto d-flex justify-content-end row">
            <form method="GET" >
                <div class="input-group">
                    <input type="text" class="form-control mr-3 search" name="search" placeholder="Search by post title" id="search" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                </div>
            </form>
        </div>
        <!-- /search -->

        <table class="table table-bordered table-hover mt-4">
            <thead>
                <tr class="width_100">
                    <th class="center width_7">ID</th>
                    <th class="center width_25">Name</th>
                    <th class="center width_43">Title</th>
                    <th class="center width_25">Action</th>
                </tr>
            </thead>

            @foreach ($posts as $post)
                <tr class="bg-white width_100">
                    <td class="center width_7">{{ $post->id }}</td>
                    <td class="left  width_25">
                        <img class="rounded-circle img mr-2 mb-2" width="30px"  src="{{ asset("/uploads/avatars/$post->avatar") }}">
                        {{ $post->first_name." ".$post->last_name }}
                    </td>
                    <td class="left width_43"><div class="over_flow word-break">{!! $post->title !!}</div></td>
                    <td class="center width_25">
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

@else 

<main id="tt-pageContent" class="tt-offset-small mt-lg-5">
    <div class ="container">
        <blockquote class="bbCodeBlock bbCodeBlock--expandable bbCodeBlock--quote note">
            <div class="bbCodeBlock-content note_content">
                <div class="bbCodeBlock-expandContent note_expandcontent">
                    <div><span class="weight_700">Chưa có bài post nào bị báo cáo.</span>
                    </div>
                </div>
            </div>
        </blockquote>
        <blockquote class="bbCodeBlock bbCodeBlock--expandable bbCodeBlock--quote note">
            <div class="bbCodeBlock-content note_content">
                <div class="bbCodeBlock-expandContent note_expandcontent ">
                    <div><span class="weight_700"> Ấn INTO để quay lại trang chủ của forum.</span>
                    </div>
                </div>
            </div>
        </blockquote>
        <blockquote class="bbCodeBlock bbCodeBlock--expandable bbCodeBlock--quote note">
            <div class="bbCodeBlock-content note_content">
                <div class="bbCodeBlock-expandContent note_expandcontent ">
                    <div><span class="weight_700"> Ấn HOME để sang trang chủ chính của trang web.</span>
                    </div>
                </div>
            </div>
        </blockquote>
        <blockquote class="bbCodeBlock bbCodeBlock--expandable bbCodeBlock--quote note">
            <div class="bbCodeBlock-content note_content">
                <div class="bbCodeBlock-expandContent note_expandcontent ">
                    <div><span class="weight_700"> 
                        Ấn 
                        @if (Auth::user()->role == "Admin")  Admin  @endif 
                        @if (Auth::user()->role == "Teacher")  Teacher  @endif 
                        @if (Auth::user()->role == "Student")  Student  @endif  
                        để sang tài khoản chính của người dùng tại INTO.</span>
                    </div>
                </div>
            </div>
        </blockquote>
        <blockquote class="bbCodeBlock bbCodeBlock--expandable bbCodeBlock--quote note">
            <div class="bbCodeBlock-content note_content">
                <div class="bbCodeBlock-expandContent note_expandcontent ">
                    <div><span class="weight_700"> Ấn + để tạo một post mới.</span>
                    </div>
                </div>
            </div>
        </blockquote>
    </div>
</main>

@endif
@endsection