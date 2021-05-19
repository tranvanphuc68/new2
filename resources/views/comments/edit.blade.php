@extends('layouts.forum.app')

@section('title')
    Edit comment
@endsection
@section('content')
@if(Auth::check())
<div class="content">
    <form method="POST" action="{{url("/comments/$comment->id")}}">
        @csrf
        @method('PUT')
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="bg-light p-2">
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name">{{ Auth::user()->fullname }}</span>
                            </div>
                            <input type="textarea" name="content" value="{{ $comment->content }}" class="form-control">
                        </div>
                        <div class="mt-2 text-right">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Edit</button>
                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endif
@endsection