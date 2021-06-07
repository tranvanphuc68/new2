@extends('layouts.forum.app')

@section('title')
    Edit Post
@endsection
@section('content')
@if(Auth::check())
@if ($post->id_user == Auth::user()->id )
<div class="container content" style="margin-top: 200px;">
    <form method="POST" action="{{url("/posts/$post->id")}}">
        @csrf
        @method('PUT')
                    <div class="d-flex flex-row align-items-start mb-3">
                        <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        </div>
                    </div>
                    <!-- Title -->
                    <div class="d-flex flex-row align-items-start">
                        <textarea name="title" class="summernoteTitle">
                            {{ $post->title }}
                        </textarea>
                    </div>
                    @error('title')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    
                    <!-- Content -->
                    <div class="d-flex flex-row align-items-start">
                        <textarea name="content" class="summernoteContent">
                            {{ $post->content }}
                        </textarea>
                    </div>
                    @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mt-2 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Edit</button>
                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                    </div>
    </form>
</div>
@endif
@endif
@endsection
