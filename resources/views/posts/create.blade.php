@extends('layouts.forum.app')

@section('title')
    Create new post
@endsection

@section('content')
@if(Auth::check())
<form method="POST" action="{{ url("/posts") }}">
@csrf

<main id="tt-pageContent">
    <div class="container">
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Create New Post <span class="sparkline bar" data-type="bar"></span>
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
                                    <h4>
                                        {{ Auth::user()->first_name." ".Auth::user()->last_name }}
                                    </h4>
                                </div>
                            </div>
                            <!-- Title -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                                <div class="col-sm-10">
                                    <textarea class="summernoteTitle" name="title">
                                        {{ old('title') }}
                                    </textarea>
                                    @error('title')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Type -->
                            {{-- <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Type:</label>
                                <div class="col-sm-10">
                                    <div class="tt-js-active-btn tt-wrapper-btnicon">
                                        <div class="row tt-w410-col-02">
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#icon-discussion"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Discussion</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Question"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Question</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Poll"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Poll</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#icon-gallery"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Gallery</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Video"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Video</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Others"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Other</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Content -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
                                <div class="col-sm-10">
                                    <textarea class="summernoteContent" name="content">
                                        {{ old('content') }}
                                    </textarea>
                                    @error('content')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-auto ml-md-auto">
                                    <button class="btn btn-primary btn-sm" type="submit">Create Post</button>
                                    <button class="btn btn-danger btn-sm ml-2" type="reset">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
    </div>
</main>
</form>
@endif
@endsection