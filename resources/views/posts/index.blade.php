@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
<img src="{{ asset('assets/img/test2.gif') }}" style="position: fixed; top: 90px; left: 20px ; width:100px; border-radius: 50%; box-shadow: 0 2px 5px rgb(0 0 0 / 20%);">
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        <!-- search -->
        <div class="mx-auto d-flex justify-content-end row mt-4">
            <form action="{{ url("/post/search") }}" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control mr-3 search" name="search" placeholder="Search by post title" id="search">
                    <button class="btn" type="submit" title="Search posts" style="background-color: #67b0d1;">
                        <span class="fa fa-search text-white"></span>
                    </button>
                </div>
            </form>
        </div>
        <!-- /search -->
        <!-- index post -->
        <div class="tt-topic-list">
            <div class="tt-topic-alert tt-alert-default" role="alert" style="margin-top: 50px;">
                <a href="#" target="_blank">Xin chào ! </a> Đây là diễn đàn của INTO . Hãy cùng chúng tôi chia sẻ những kiến thức bổ ích nào!
            </div>
            @foreach ($posts as $post)
            <div class="tt-item">
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
        </div>
        <!-- /index post -->
    </div>
</main>
@endsection