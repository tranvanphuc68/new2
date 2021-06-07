@extends('layouts.forum.app')

@section('title')
    Edit Post
@endsection

@section('content')
    @if(Auth::check())
        @if($post->id == Auth::user()->id )
            <!-- Edit post -->
            <form  method="POST" action="{{url("/posts/$post->id")}}">
                @csrf
                @method('PUT')
                <main id="tt-pageContent">
                    <div class="container">
                        <div class="title-block">
                            <h3 class="title"> 
                                Edit posts with id {{$post->id}} <span class="sparkline bar" data-type="bar"></span>
                            </h3>
                        </div>
                        <form name="item">
                            <div class="card card-block">
                                <!-- Avatar -->
                                <div class="form-group row mb-5">
                                    <div class="col-sm-2 text-xs-right">
                                        <img class="rounded-circle img" width="50" src="{{ asset("/uploads/avatars/".$post->avatar) }}">
                                    </div>
                                    <div class="col-sm-10 mt-3">
                                        <h4> {{ $post->first_name." ".$post->last_name }} </h4>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                                    <div class="col-sm-10">
                                        <textarea class="summernoteTitle" name="title" value="{!! $post->title !!}">
                                            {{-- {!! old('title') !!} --}}
                                        </textarea>
                                        @error('title')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
                                    <div class="col-sm-10">
                                        <textarea class="summernoteContent" name="content" value="{!! $post->content !!}">
                                            {{-- {!! old('content') !!} --}}
                                        </textarea>
                                        @error('content')
                                        <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="row form-group">
                                    <div class="col-auto ml-md-auto">
                                        <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                                        <button class="btn btn-danger btn-sm ml-2" type="reset">Cancel</button>
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
