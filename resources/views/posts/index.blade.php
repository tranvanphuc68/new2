@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')

<main id="tt-pageContent" class="bg-main" >
    <img src="{{ asset('assets/img/test2.gif') }}" class="img_icon">
    <div class="container">
        @if ($countPost > 0)
        <!-- search -->
        <div class="mx-auto d-flex justify-content-end row">
            <form method="GET" >
                <div class="input-group">
                    <input type="text" class="form-control mr-3 search center" name="search" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>" placeholder="Search by post title" class="search">
                    <button class="btn btn-info" type="submit" title="Search posts">
                        <span class="fa fa-search text-white"></span>
                    </button>
                </div>
            </form>
        </div>
        <!-- /search -->
        @endif 
        <!-- index post -->
        <div class="tt-topic-list">
            <div class="tt-topic-alert tt-alert-default mt_10px" role="alert">
                Xin chào ! Đây là <a href="#" target="_blank"> diễn đàn của INTO</a> . Hãy cùng chúng tôi chia sẻ những kiến thức bổ ích nào!
            </div>
            @if ($countPost <= 0)
            <div class="tt-topic-alert tt-alert-default mt-3" role="alert">
                Diễn đàn là nơi Chia sẻ những kinh nghiệm hay về việc học ngoại ngữ, chọn trường/ trung tâm ngoại ngữ chất lượng . Các chủ đề xoay quay việc học ngoài ngữ . Khi post bài đề nghị post đúng mục và chủ đề .. tránh tình trạng spam ...
            </div>
            <div class="tt-topic-alert tt-alert-default mt-3 mb-5" role="alert">
                Hãy tạo mới post đầu tiên để chia sẻ kinh nghiệm của mình đến tất cả học viên, giảng viên của trung tâm INTO chúng tôi.
            </div>
            @endif
            @if ($countPost > 0)
                @foreach ($posts as $post)
                <div class="tt-item @if ($post->role == "Admin")  tt-itemselect  @endif ">
                    <div class="tt-col-avatar">
                        <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                    </div>
                    <div class="tt-col-description">
                        <h6 class="tt-title">
                            {{ $post->first_name." ".$post->last_name }}
                        </h6>
                        <div class="row align-items-center no-gutters">
                            <div class="col-12">
                                <a href="{{ url("/posts/$post->id") }}" class="text-dark">
                                    <div class="word-break">{!! $post->title !!}</div>
                                </a>
                            </div>
                            <div class="col-3 ml-auto show-mobile">
                                <div class="tt-value size_10px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-col-value hide-mobile size_14px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                    <div class="tt-col-value hide-mobile size_14px">{{ date('H : i', strtotime($post->created_at)) }}</div>
                </div>
                @endforeach

                <div class="mb-2 mt-5">
                    <div class="d-flex justify-content-center row">
                            {{ $posts->links() }}
                    </div>
                </div>
            @endif
        </div>
        <!-- /index post -->
    </div>
</main>
@endsection