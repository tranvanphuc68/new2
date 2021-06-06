{{-- 
@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        <div class="tt-topic-list">
            <div class="tt-list-header">
                <div class="tt-col-topic">Topic</div>
                <div class="tt-col-category">Type</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div>
                <div class="tt-col-value hide-mobile">Day</div>
                <div class="tt-col-value">Time</div>
            </div>

            @foreach ($posts as $post)
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title">
                        <a href="{{ url("/posts/$post->id") }}">
                            {{ $post->first_name." ".$post->last_name }}
                        </a>
                    </h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-12">
                            {!! $post->title !!}
                        </div>
                        <div class="col-1 ml-auto show-mobile">
                            <div class="tt-value" style="font-size: 10px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color01 tt-badge">politics</span></div>
                <div class="tt-col-value hide-mobile">985</div>
                <div class="tt-col-value tt-color-select hide-mobile">156</div>
                <div class="tt-col-value hide-mobile" style="font-size: 14px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                <div class="tt-col-value hide-mobile" style="font-size: 14px"> {{ date('h : i', strtotime($post->created_at)) }}</div>
            </div>
            @endforeach

            <div class="mb-2 mt-5">
                <div class="d-flex justify-content-center row">
                        {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</main>

@endsection --}}


@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
<style>
body {
    background: #eee
}

/* .date {
    font-size: 11px
} */

/* .comment-text {
    font-size: 12px
} */

/* .shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
} */

.shadow {
    box-shadow: 10px 10px 5px #aaaaaa;
}
</style>
<main id="tt-pageContent">
    <div class="container">
        <div class="card card-block">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="d-flex flex-column comment-section">
                        @foreach ($posts as $post)
                        <div class="bg-white p-2 mt-4 shadow">
                            <div class="d-flex flex-row user-info"><img class="rounded-circle" src="{{ asset("/uploads/avatars/$post->avatar") }}" width="40">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $post->first_name." ".$post->last_name }}</span>
                                    <span class="date text-black-50">{{ $post->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-1">
                                <a class="ml-5" href="{{ url("/posts/$post->id") }}">
                                    {!! $post->title !!}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--Pagination post-->
            <div class="mb-2 mt-5">
                <div class="d-flex justify-content-center row">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

{{-- <div class="d-flex justify-content-center py-2">
    <div class="second py-2 px-2"> 
        <a class="decoration" href="{{ url("/posts/$post->id") }}">
            <span class="text1">{!! $post->title !!}</span>
        </a>
        <div class="d-flex justify-content-between py-1 pt-2">
            <div>
                <img src="{{ asset("/uploads/avatars/$post->avatar") }}" width="30">
                <span class="text2">{{ $post->first_name." ".$post->last_name }}</span>
            </div>
            <div><span class="text3">{{ $post->created_at }}</span></div>
        </div>
    </div>
</div> --}}