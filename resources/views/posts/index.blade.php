@extends('layouts.forum.app')

@section('title')
    Forum of INTO
@endsection

@section('content')
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
<div class="content">
<div class="mb-2 container">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <h2 style="color:hsl(276, 98%, 48%); text-transform: uppercase; text-align: center;">number of posts ({{ $countPost }})</h2>
        </div>
    </div>
</div>
@foreach ($posts as $post)
<div class="mb-2 container">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section" id="myGroup">
                <a href="{{ url("/posts/$post->id") }}">
                    <div style="background-color: rgb(207, 213, 241); border: 2px solid rgb(160, 158, 241); border-radius: 10px;" class="p-3">
                        <div class="d-flex flex-row user-info mb-1">
                            <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                            <div class="d-flex flex-column justify-content-start ml-3">
                                <span class="d-block font-weight-bold name" style="color: #08168dd5; ">{{ $post->fullname }}</span>
                                <span class="date" style="color: hsl(202, 73%, 51%); ">{{ $post->created_at }}</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div>
                                <h5 style="color: #0e0e3de5; " class="ml-4 mr-1">{{ $post->title }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="mb-2 container mt-5">
    <div class="d-flex justify-content-center row">
            {{ $posts->links() }}
    </div>
</div>

</div>
</div>
@endsection
