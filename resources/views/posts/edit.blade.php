@extends('layouts.forum.app')

@section('title')
    Edit Post
@endsection
@section('content')
@if(Auth::check())
<div class="container content">
    <form method="POST" action="{{url("/posts/$post->id")}}">
        @csrf
        @method('PUT')
                    <div class="d-flex flex-row align-items-start mb-3">
                        <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-start">
                        <input type="textarea" name="title" value="{{ $post->title }}" class="form-control mb-3" placeholder="Title">
                    </div>
                    @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <input type="textarea" name="content" value="{{ $post->content }}" class="form-control" placeholder="Content">
                        @error('content')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="d-flex flex-row align-items-start">

                    </div>
                    <div class="mt-2 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Edit</button>
                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                    </div>
</form>
</div>
@endif
@endsection
