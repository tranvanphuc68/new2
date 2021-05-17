@extends('layouts.forum.app')

@section('title')
    Create new post
@endsection

@section('content')
@if(Auth::check())
<div class="container content">
<form method="POST" action="{{ url("/posts") }}">
@csrf

<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="d-flex flex-column comment-section">
                <div class="bg-light p-2">
                    <div class="d-flex flex-row align-items-start">
                        <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name">{{ Auth::user()->fullname }}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-start">
                        <textarea class="form-control ml-1 shadow-none textarea" name="title" placeholder="Post title"></textarea>
                        <textarea class="form-control ml-1 shadow-none textarea" name="content" placeholder="Post content"></textarea>
                    </div>
                    <div class="mt-2 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Post</button>
                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
</div>
@endif
@endsection