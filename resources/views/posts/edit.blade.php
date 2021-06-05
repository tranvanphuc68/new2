@extends('layouts.forum.app')

@section('title')
    Edit Post
@endsection

@section('content')
@if(Auth::check())
<div class="container content">
    @if($post->id == Auth::user()->id )
        <form method="POST" action="{{url("/posts/$post->id")}}">
            @csrf
            @method('PUT')
            <div id="collapse-1" class="p-2 collapse mb-3" data-parent="#myGroup">
                <div class="d-flex flex-column comment-section" >
                    <div class="p-2" style="background-color: rgb(207, 213, 241); border: 2px solid rgb(160, 158, 241); border-radius: 10px;">
                        <div class="d-flex flex-row align-items-start mb-3">
                            <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name">{{ $post->first_name." ".$post->last_name }}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <input type="textarea" name="title" value="{{ $post->title }}" class="form-control mb-3" placeholder="Title">
                        </div>  
                        @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="d-flex flex-row align-items-start">
                            <input type="textarea" name="content" value="{{ $post->content }}" class="form-control" placeholder="Content">
                        </div>
                        @error('content')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mt-2 text-right">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Edit</button>
                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
@endif
@endsection
