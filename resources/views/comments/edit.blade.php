@extends('layouts.forum.app')

@section('title')
    Edit comment
@endsection
@section('content')
    @if(Auth::check())
        @if(($comment->id_user == Auth::user()->id))
        <!-- Edit comment -->
        <form  method="POST" action="{{url("/comments/$comment->id")}}">
            @csrf
            @method('PUT')
            <main id="tt-pageContent">
                <div class="container">
                    <div class="title-block">
                        <h3 class="title"> 
                            Edit Comment <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item">
                        <div class="card card-block">
                            <!-- Avatar -->
                            <div class="form-group row mb-5">
                                <div class="col-sm-2 text-xs-right">
                                    <img class="rounded-circle img" width="50" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                                </div>
                                <div class="col-sm-10 mt-3">
                                    <h4> {{ Auth::user()->first_name." ".Auth::user()->last_name }} </h4>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
                                <div class="col-sm-10">
                                    <textarea class="summernoteContentComment" name="content">
                                        {{ $comment->content }}
                                    </textarea>
                                    @error('content')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="row form-group">
                                <div class="col-auto ml-md-auto">
                                    <button class="btn btn-primary btn-width-lg" type="submit">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </form>
        @endif
    @endif
@endsection