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
        <div class="tt-wrapper-inner">
            <h1 class="tt-title-border">
                Create New Topic
            </h1>
            <form class="form-default form-create-topic">
                <div class="form-group">
                    <label for="inputTopicTitle">Topic Title</label>
                    <div class="tt-value-wrapper">
                        <input type="text" name="title" class="form-control" id="inputTopicTitle" placeholder="Subject of your topic" value="{{ old('title') }}">
                        @error('title')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="tt-note">Describe your topic well, while keeping the subject as short as possible.</div>
                </div>
                <div class="form-group">
                    <label>Topic Type</label>
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
                <div class="pt-editor">
                    <h6 class="pt-title">Topic Body</h6>
                    <div class="pt-row">
                        <div class="col-left">
                            <ul class="pt-edit-btn">
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-quote"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-bold"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-italic"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-share_topic"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-blockquote"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-performatted"></use>
                                    </svg>
                                </button></li>
                                <li class="hr"></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-upload_files"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-bullet_list"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-heading"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-horizontal_line"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-emoticon"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-settings"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-color_picker"></use>
                                    </svg>
                                </button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" rows="5" placeholder="Lets get started" value="{{ old('content') }}"></textarea>
                        @error('content')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputTopicTitle">Category</label>
                                <select class="form-control">
                                    <option value="Select">Select</option>
                                    <option value="Value 01">Value 01</option>
                                    <option value="Value 02">Value 02</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputTopicTags">Tags</label>
                                <input type="text" name="name" class="form-control" id="inputTopicTags" placeholder="Use comma to separate tags">
                            </div>
                        </div>
                    </div> --}}
                     <div class="row">
                        <div class="col-auto ml-md-auto">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Create Post</button>
                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
</form>
@endif
@endsection