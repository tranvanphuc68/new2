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
                <div class="bg-light p-2"  style="border-radius: 10px;">
                    <div class="d-flex flex-row align-items-start">
                        <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        </div>
                    </div>
                    <div class="mt-3 mb-2">
                        <input type="textarea" class="form-control ml-1 shadow-none textarea" name="title" value="{{ old('title') }}" placeholder="Post title">
                        @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-row align-items-start">
                        <textarea class="form-control ml-1 shadow-none textarea" name="content" value="{{ old('content') }}" placeholder="Post content"></textarea>
                    @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
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