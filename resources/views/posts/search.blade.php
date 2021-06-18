@extends('layouts.forum.app')

@section('title')
    Search
@endsection

@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <img src="{{ asset('assets/img/test2.gif') }}" class="img_icon">
    <div class="container">
        <!-- search -->
        <div class="mx-auto d-flex justify-content-end row mt-4">
            <form action="{{ url("/post/search") }}" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control mr-3 search" name="search" placeholder="Search by post title" id="search">
                    <button class="btn btn-info" type="submit" title="Search posts">
                        <span class="fa fa-search text-white"></span>
                    </button>
                </div>
            </form>
        </div>
        <!-- /search -->
        <!-- search post -->
        <div class="tt-topic-list">
            <div class="tt-topic-alert tt-alert-default mt_30px" role="alert">
                <a href="#" target="_blank">Xin chào ! </a> Đây là diễn đàn của INTO . Hãy cùng chúng tôi chia sẻ những kiến thức bổ ích nào!
            </div>
            <div class="tt-list-header">
                <div class="tt-col-topic">Topic</div>
                <div class="tt-col-value hide-mobile">Day</div>
                <div class="tt-col-value">Time</div>
            </div>

            @foreach ($posts as $post)
            <div class="tt-item @if (($post->id_user == Auth::user()->id) && (Auth::user()->role == "Admin"))  tt-itemselect  @endif">
                <div class="tt-col-avatar">
                    <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title">
                        {{ $post->first_name." ".$post->last_name }}
                    </h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-12">
                            <a href="{{ url("/posts/$post->id") }}" class="text-black">
                                <div class="word-break">{!! $post->title !!}</div>
                            </a>
                        </div>
                        <div class="col-3 ml-auto show-mobile">
                            <div class="tt-value size_10px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-value hide-mobile size_14px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                <div class="tt-col-value hide-mobile size_14px"> {{ date('h : i', strtotime($post->created_at)) }}</div>
            </div>
            @endforeach

            <!--Pagination post-->
            <div class="mb-2 mt-5">
                <div class="d-flex justify-content-center row">
                    {{ $posts->links() }}
                </div>
            </div>           
        </div>
        <!-- search post -->
    </div>
</main>
@endsection

