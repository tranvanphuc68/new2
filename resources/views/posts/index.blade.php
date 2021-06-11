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
                {{-- <div class="tt-col-category">Type</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div> --}}
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
                        {{ $post->first_name." ".$post->last_name }}
                    </h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-12">
                            <a href="{{ url("/posts/$post->id") }}" style="color: black;">
                                <p>{!! $post->title !!}</p>
                            </a>
                        </div>
                        <div class="col-3 ml-auto show-mobile">
                            <div class="tt-value" style="font-size: 10px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                        </div>
                    </div>
                </div>
                {{-- <div class="tt-col-category"><span class="tt-color01 tt-badge">politics</span></div>
                <div class="tt-col-value hide-mobile">985</div>
                <div class="tt-col-value tt-color-select hide-mobile">156</div> --}}
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

@endsection

{{-- 
@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
<style>
body {
    background: #eee
}

.name {
    font-size: 15px;
}
.date {
    font-size: 10px;
}
.shadow {
    box-shadow: 15px 15px 5px #3b3b3b;
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

            <div class="mb-2 mt-5">
                <div class="d-flex justify-content-center row">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection --}}
