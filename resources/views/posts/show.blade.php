@extends('layouts.forum.app')

@section('title')
    Show Post
@endsection

@section('content')
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-single-topic-list">

                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                                </div>
                                <div class="tt-avatar-title">
                                    {{ $post->first_name." ".$post->last_name }}
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>{{ $post->created_at }}
                                </a>
                            </div>
                            <div>
                                {!! $post->title !!}
                            </div>

                            {{-- <div class="tt-item-tag">
                                <ul class="tt-list-badge">
                                    <li><a href="#"><span class="tt-color03 tt-badge">exchange</span></a></li>
                                    <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                    <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="tt-item-description">
                            <p>
                                {!! $post->content !!}
                            </p>
                        </div>

                        @if (Auth::check())
                        <div class="tt-item-info info-bottom">
                            <!-- Edit post -->
                            @if ($post->id_user == Auth::user()->id )
                            <a href="{{ url("/posts/$post->id/self_edit") }}" class="tt-icon-btn">
                                <i class="tt-icon fa fa-pencil"></i>
                            </a>
                            @endif
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                                <span class="tt-text">{{ $countReportPost }}</span>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                                 <span class="tt-text">{{ $countComment }}</span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-info-box">
                        <h6 class="tt-title">Frequent Posters</h6>
                        <div class="tt-row-icon">
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-d"></use></svg>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row-object-inline form-default">
                            <h6 class="tt-title">Sort replies by:</h6>
                            <ul class="tt-list-badge tt-size-lg">
                                <li><a href="#"><span class="tt-badge">Recent</span></a></li>
                                <li><a href="#"><span class="tt-color02 tt-badge">Most Liked</span></a></li>
                            </ul>
                            <select class="tt-select form-control">
                                <option value="Recent">Recent</option>
                                <option value="Most Liked">Most Liked</option>
                            </select>
                        </div>
                    </div>
                </div>

                @foreach ($comments as $comment)
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                      <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$comment->avatar") }}">
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">{{ $comment->first_name." ".$comment->last_name }}</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>{{ $comment->created_at }}
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            {{ $comment->content }}
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tt-wrapper-inner">
                <h4 class="tt-title-separator"><span>You’ve reached the end of replies</span></h4>
            </div>
            
            <div class="tt-wrapper-inner">
                <div class="pt-editor form-default">
                    <h6 class="pt-title">Post Your Reply</h6>
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
                        <div class="col-right tt-hidden-mobile">
                            <a href="#" class="btn btn-primary">Preview</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                    </div>
                    <div class="pt-row">
                        <div class="col-auto">
                            <div class="checkbox-group">
                                <input type="checkbox" id="checkBox21" name="checkbox" checked="">
                                <label for="checkBox21">
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <span class="tt-text">Subscribe to this topic.</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-secondary btn-width-lg">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection