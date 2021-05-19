@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
<div class="content">
@foreach ($posts as $post)
<a href="{{ url("/posts/$post->id") }}">
    <div class="container mt-5 ">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="d-flex flex-column comment-section" id="myGroup">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info">
                            <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name">{{ $post->fullname }}</span>
                                <span class="date text-black-50">{{ $post->created_at }}</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div>
                                <h3>{{ $post->title }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
@endforeach
</div>
</div>
@endsection
