
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
                <div class="tt-col-category">Hashtag</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div>
                <div class="tt-col-value hide-mobile">Day</div>
                <div class="tt-col-value">Time</div>
            </div>
            
            @foreach ($posts as $post)
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <img class="rounded-circle img" width="60" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title">
                        <a href="{{ url("/posts/$post->id") }}">
                            {{ $post->first_name." ".$post->last_name }}
                        </a>
                    </h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-12">
                            {{ $post->title }}
                        </div>
                        <div class="col-1 ml-auto show-mobile">
                            <div class="tt-value" style="font-size: 10px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color01 tt-badge">politics</span></div>
                <div class="tt-col-value hide-mobile">985</div>
                <div class="tt-col-value tt-color-select hide-mobile">{{-- {{ $countComment }} --}}</div>
                <div class="tt-col-value hide-mobile" style="font-size: 14px">{{ date('d M Y', strtotime($post->created_at))  }}</div>
                <div class="tt-col-value hide-mobile" style="font-size: 14px"> {{ date('h', strtotime($post->created_at))}} :  {{ date('m', strtotime($post->created_at))}}</div>
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
</main>

@endsection