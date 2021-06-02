@extends('layouts.forum.app')

@section('title')
    Show Post
@endsection

@section('content')
{{-- <div class="content">
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8" style="border-top: 3px solid rgb(201, 220, 221); border-left: 2px solid rgb(201, 220, 221); border-right: 2px solid rgb(201, 220, 221); background-color:rgb(255, 255, 255); border-radius: 10px; border-bottom: 5px solid rgb(218, 227, 245); background-color:rgb(228, 238, 255)">
                    <div class="d-flex flex-column comment-section" id="myGroup">
                        <div class="pt-3">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $post->first_name." ".$post->last_name }}</span>
                                    <span class="date" style="color:rgb(117, 117, 117)">{{ $post->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2 ml-4">
                                <h4>{{ $post->title }}</h4>
                                <div>{{ $post->content }}</div>
                            </div>
                        </div>

                        @if (Auth::check())
                        <div class="p-2">
                            <div class="d-flex flex-row fs-12" style="justify-content:flex-end">
                                <!-- Edit post -->
                                @if ($post->id_user == Auth::user()->id )
                                    <div class="like cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1">
                                        <span class="ml-3"><i class="fa fa-pencil"></i></span>
                                    </div>
                                @endif

                                <!-- Delete post -->
                                @if (($post->id_user == Auth::user()->id) || (Auth::user()->role == "Admin") )
                                    <span class="ml-3">
                                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" style="color: black">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    
                                        <form action='{{ url("/posts/$post->id") }}' method="POST" id="post-delete-{{ $post->id }}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </span>
                                @endif

                                <!-- Report post -->
                                    <span class="ml-3">
                                        <form method="POST" action="{{ url("/report_posts/$post->id") }}">
                                            @csrf
                                            <a type="button" data-toggle="modal" data-target="#report">
                                                <i class="fa fa-flag"></i>
                                                <span class="counter">({{ $countReportPost }})</span>
                                            </a>
                                            <div class="modal fade" id="report" tabindex="-1" aria-labelledby="reportLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img class="modal-title rounded-circle img" id="report" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                                                            <span class="d-block font-weight-bold name">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                              <label for="recipient-name" class="col-form-label">Content report:</label>
                                                              <textarea class="form-control ml-1 shadow-none textarea" name="content" placeholder="Content"></textarea>
                                                              @error('content')
                                                              <div>{{ $message }}</div>
                                                          @enderror
                                                        
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Create report</button>
                                                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </span>
                            </div>
                        </div>

                        <!-- Edit post -->
                        @if($post->id_user == Auth::user()->id )
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
                                                <input type="textarea" name="content" value="{{ $post->content }}" class="form-control" placeholder="Content">
                                            <div class="d-flex flex-row align-items-start">

                                            </div>
                                            <div class="mt-2 text-right">
                                                <button class="btn btn-primary btn-sm shadow-none" type="submit">Edit</button>
                                                <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Comment -->
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8" style="border-bottom: 3px solid rgb(201, 220, 221); border-left: 2px solid rgb(201, 220, 221); border-right: 2px solid rgb(201, 220, 221); background-color:rgb(255, 255, 255); border-radius: 10px; border-top: 5px solid rgb(64, 124, 235);">

                    <!-- Create comment -->
                    @if (Auth::check())
                    <form method="POST" action="{{ url("/comments/{$post->id}") }}" >
                        @csrf
                        <div class="d-flex flex-row align-items-start mt-4">
                            <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                            <textarea class="form-control ml-1 shadow-none textarea" name="content"></textarea>
                            @error('content')
                            <div>{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mt-2 text-right">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                        </div>
                    </form>
                    @endif

                    <!--count comment -->
                    <h5 class="mb-3 ml-5" style="color:rgb(64, 124, 235);">Comments ({{ $countComment }})</h5>

                    <!-- Show comment -->
                    @foreach ($comments as $comment)
                    <div class="d-flex flex-column comment-section mt-2 ml-4" id="myGroup">
                        <div class="ml-4" style="background-color:rgb(209, 213, 235); border-radius: 10px; ">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$comment->avatar") }}">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $comment->first_name." ".$comment->last_name }}</span>
                                    <span class="date text-black-50">{{ $comment->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2 ml-5">
                                <div style="color: rgb(8, 8, 8)">{{ $comment->content }}</div>
                            </div>
                        </div>

                        @if (Auth::check())
                            @if(($comment->id_user == Auth::user()->id))
                            <div class="mb-1">
                                <div class="d-flex flex-row fs-12 justify-content-end ml-4" style="background-color:rgb(209, 213, 235);">
                                    <!-- Edit comment -->
                                    <div class="like p-2">
                                        <a href="{{ url("/comments/$comment->id/self_edit") }}">
                                            <i class="fa fa-pencil"></i>
                                            <span class="ml-1"></span>
                                        </a>
                         
                                    </div>

                                    <!-- Delete comment-->
                                    <div class="like p-2">
                                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('comment-delete-{{ $comment->id }}').submit()">
                                            <i class="fa fa-trash">
                                                <span class="ml-1"></span>
                                            </i>
                                        </a>
                                        

                                        <form action='{{ url("/comments/{$comment->id}") }}' method="POST" id="comment-delete-{{ $comment->id }}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}



    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-single-topic-list">
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-d"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">dylan89</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                            <h3 class="tt-item-title">
                                <a href="#">Web Hosting Packages for ThemeForest WordPress</a>
                            </h3>
                            <div class="tt-item-tag">
                                <ul class="tt-list-badge">
                                    <li><a href="#"><span class="tt-color03 tt-badge">exchange</span></a></li>
                                    <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                    <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <h6 class="tt-title">Get ready for Movember!</h6>
                            <p>
                                It’s time to channel your inner Magnum P.I., Ron Swanson or Hercule Poroit! It’s the time that all guys (or gals) love and all our
                                partners hate It’s Movember!
                            </p>
                            <p>
                                Throughout November we will be inviting all community members to help raise awareness and funds for the lives of men affected
                                by cancer and mental health problems via the Movember Foundation 10.
                            </p>
                            <h6 class="tt-title">How Does it Work?</h6>
                            <p>
                                Authors and customers with facial hair unite! Simply grow, groom, and share your facial hair during November! Even females can enter if they desire (be creative, ladies!). Be inspired by checking out last year’s highlights 28.
                            </p>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-info-box">
                        <h6 class="tt-title">Thread Status</h6>
                        <div class="tt-row-icon">
                            <div class="tt-item">
                                <a href="#" class="tt-icon-btn tt-position-bottom">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                                    <span class="tt-text">283</span>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class="tt-icon-btn tt-position-bottom">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-view"></use></svg></i>
                                    <span class="tt-text">10.5k</span>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class="tt-icon-btn tt-position-bottom">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-user"></use></svg></i>
                                    <span class="tt-text">168</span>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class="tt-icon-btn tt-position-bottom">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                    <span class="tt-text">2.4k</span>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class="tt-icon-btn tt-position-bottom">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                    <span class="tt-text">951</span>
                                </a>
                            </div>
                            <div class="tt-item">
                                  <a href="#" class="tt-icon-btn tt-position-bottom">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                                    <span class="tt-text">32</span>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h6 class="tt-title">Frequent Posters</h6>
                        <div class="tt-row-icon">
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-d"></use></svg>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-t"></use></svg>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-k"></use></svg>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-n"></use></svg>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-a"></use></svg>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-c"></use></svg>
                                </a>
                            </div>
                            <div class="tt-item">
                                <a href="#" class=" tt-icon-avatar">
                                    <svg><use xlink:href="#icon-ava-h"></use></svg>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row-object-inline form-default">
                            <h6 class="tt-title">Sort replies by:</h6>
                            <ul class="tt-list-badge tt-size-lg">
                                <li><a href="#"><span class="tt-badge">Recent</span></a></li>
                                <li><a href="#"><span class="tt-color02 tt-badge">Most Liked</span></a></li>
                                <li><a href="#"><span class="tt-badge">Longest</span></a></li>
                                <li><a href="#"><span class="tt-badge">Shortest</span></a></li>
                                <li><a href="#"><span class="tt-badge">Accepted Answers</span></a></li>
                            </ul>
                            <select class="tt-select form-control">
                                <option value="Recent">Recent</option>
                                <option value="Most Liked">Most Liked</option>
                                <option value="Longest">Longest</option>
                                <option value="Shortest">Shortest</option>
                                <option value="Accepted Answer">Accepted Answer</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-t"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">tesla02</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            Finally!<br>
                            Are there any special recommendations for design or an updated guide that includes new preview sizes, including retina displays?
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-k"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">kolis27</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <p>
                                It’s too big preview image, it should be smaller even five in row. On one page there are 30 items to 60 pages it is 1800 items in
                            categories eg in Add-Ons category have 22749 items, why not see all of them but only those 1800 items? This is a bad thing.
                            </p>
                            <p>
                                <img class="tt-offset-11" src="images/single-topic-img01.jpg" alt="">
                            </p>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-k"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">kolis27</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <p>
                               I do not like. Choosing a template has become more difficult.<br>Small thumbnails 80x80px were better.
                            </p>
                            <div class="video-container">
                                <iframe title="YouTube video player" src="https://www.youtube.com/embed/BbW8djS7kI4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-v"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">vickey03</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            Finally!<br>
                            Are there any special recommendations for design or an updated guide that includes new preview sizes, including retina displays?
                            <div class="topic-inner-list">
                                <div class="topic-inner">
                                    <div class="topic-inner-title">
                                        <div class="topic-inner-avatar">
                                            <i class="tt-icon"><svg><use xlink:href="#icon-ava-s"></use></svg></i>
                                        </div>
                                        <div class="topic-inner-title"><a href="#">summit92</a></div>
                                    </div>
                                    <div class="topic-inner-description">
                                        Finally!<br>
                                        Are there any special recommendations for design or an updated guide that includes new preview sizes, including retina displays?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item tt-wrapper-success">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-t"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">tesla02</a>
                                   <span class="tt-color13 tt-badge">best answer</span>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            Finally!<br>
                            Are there any special recommendations for design or an updated guide that includes new preview sizes, including retina displays?
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item tt-wrapper-danger">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-u"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">usain31</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                           This post has been flagged by a moderator, received too many downvotes.
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="tt-item-info info-bottom">
                                    <a href="#" class="tt-icon-btn">
                                         <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                        <span class="tt-text">39</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto ml-auto">
                                <a href="#" class="btn btn-primary tt-offset-27">Show Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                     <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-f"></use></svg></i>
                                </div>
                                <div class="tt-avatar-title">
                                   <a href="#">kolis27</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                           <p>
                                It’s too big preview image, it should be smaller even five in row. On one page there are 30 items to 60 pages it is 1800 items in categories eg in Add-Ons category have 22749 items, why not see all of them but only those 1800 items? This is a bad thing.
                           </p>
                           <div class="row tt-offset-37">
                               <div class="col-lg-10">
                                   <div class="tt-gallery-layout">
                                        <div class="tt-item">
                                            <a href="images/single-topic-img03.jpg" class="tt-gallery-obj"><img src="images/single-topic-img03.jpg" alt=""></a>
                                        </div>
                                        <div class="tt-item">
                                            <a href="images/single-topic-img04.jpg" class="tt-gallery-obj"><img src="images/single-topic-img04.jpg" alt=""></a>
                                        </div>
                                        <div class="tt-item">
                                            <a href="images/single-topic-img05.jpg" class="tt-gallery-obj"><img src="images/single-topic-img05.jpg" alt=""></a>
                                        </div>
                                        <div class="tt-item">
                                            <a href="images/single-topic-img06.jpg" class="tt-gallery-obj"><img src="images/single-topic-img06.jpg" alt=""></a>
                                        </div>
                                        <div class="tt-item">
                                            <a href="images/single-topic-img07.jpg" class="tt-gallery-obj"><img src="images/single-topic-img07.jpg" alt=""></a>
                                        </div>
                                        <div class="tt-item">
                                            <a href="images/single-topic-img08.jpg" class="tt-gallery-obj"><img src="images/single-topic-img08.jpg" alt=""></a>
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">671</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                 <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-wrapper-inner">
                <h4 class="tt-title-separator"><span>You’ve reached the end of replies</span></h4>
            </div>
            <div class="tt-topic-list">
                <div class="tt-item tt-item-popup">
                    <div class="tt-col-avatar">
                        <svg class="tt-icon">
                          <use xlink:href="#icon-ava-f"></use>
                        </svg>
                    </div>
                    <div class="tt-col-message">
                        Looks like you are new here. Register for free, learn and contribute.
                    </div>
                    <div class="tt-col-btn">
                        <button type="button" class="btn btn-primary">Log in</button>
                        <button type="button" class="btn btn-secondary">Sign up</button>
                        <button type="button" class="btn-icon">
                            <svg class="tt-icon">
                              <use xlink:href="#icon-cancel"></use>
                            </svg>
                        </button>
                    </div>
                </div>
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