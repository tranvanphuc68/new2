@extends('layouts.forum.app')

@section('title')
    Create new report post
@endsection

@section('content')
@if(Auth::check())
<main id="tt-pageContent" class="tt-offset-small">
    <div class ="container content">
        <form method="POST" action="{{ url("/report_posts/{$post}") }}">
            @csrf
            <!-- Report post-->
                <div class="d-flex flex-row align-items-start">
                    <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                    <textarea class="form-control ml-1 shadow-none textarea" name="content" placeholder="Content"></textarea>
                    @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2 text-right">
                    <button class="btn btn-primary btn-sm shadow-none" type="submit">Create report</button>
                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                </div>
        </form>
    </div>
</main>
@endif
@endsection