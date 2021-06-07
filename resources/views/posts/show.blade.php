@extends('layouts.forum.app')

@section('title')
    Show Post
@endsection

@section('content')
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-single-topic-list">
                <!--Show post-->
                <div class="tt-item card card-block">
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
                        </div>
                        <div class="tt-item-description">
                            {!! $post->content !!}
                        </div>

                        @if (Auth::check())
                        <div class="tt-item-info info-bottom">
                            <!-- create Comment -->
                            <a href="#reply" class="tt-icon-btn text-dark nav-link">
                                <i class="fa fa-reply"> Reply  ({{ $countComment }})</i>
                            </a>

                            <div class="col-separator"></div>

                            <!-- Edit post -->
                            @if ($post->id_user == Auth::user()->id )
                                <a href="{{ url("/posts/$post->id/self_edit") }}" class="tt-icon-btn text-dark">
                                    <i class="fa fa-pencil"> Edit post</i>
                                </a>
                            @endif

                            <div class="col-separator"></div>

                            <!-- Delete post -->
                            @if (($post->id_user == Auth::user()->id) || (Auth::user()->role == "Admin") )
                                <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" class="tt-icon-btn text-dark">
                                    <i class="fa fa-trash"> Delete post</i>
                                </a>
                             
                                <form action='{{ url("/posts/$post->id") }}' method="POST" id="post-delete-{{$post->id }}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            @endif

                            <div class="col-separator"></div>

                            <!-- Report post -->
                            <a href="{{ url("/report_posts/$post->id/create")}}" class="tt-icon-btn text-dark">
                                <i class="fa fa-exclamation-circle"> Report post  ({{ $countReportPost }})</i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Show comment -->
                <div class="tt-item card card-block">
                    @foreach ($comments as $comment)
                    {{-- <div class="tt-single-topic">
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
                            {!! $comment->content !!}
                        </div>
                    </div> --}}
                     <!--FIRST LIST ITEM-->
                    <div class="media ml-lg-5">
                        <span class="round pt-2">
                            <img class="mr-lg-5 rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$comment->avatar") }}">
                        </span>
                        <div class="media-body">
                            <div class="row d-flex">
                                <h6 class="user pt-2">{{ $comment->first_name." ".$comment->last_name }}</h6>
                                <div class="ml-auto mr-lg-5">
                                    <p class="text">3m</p>
                                </div>
                            </div>
                            <p class="text">{{ $comment->created_at }}</p>
                            <div class="images mt-2"> 
                                {!! $comment->content !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="tt-wrapper-inner">
                <h4 class="tt-title-separator"><span>You’ve reached the end of replies</span></h4>
            </div>
            
            <!-- create comment -->
            @if (Auth::check())
            <form method="POST" action="{{ url("/comments/{$post->id}") }}" >
                @csrf
                <div class="tt-wrapper-inner" id="reply">
                    <div class="pt-editor form-default">
                        <h5 class="pt-title">Post Your Reply</h5>

                        <div class="form-group">
                            <textarea class="summernoteContentComment" name="content">
                                {{ old('content') }}
                            </textarea>
                            @error('content')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row form-group">
                            <div class="col-auto ml-md-auto">
                                <button class="btn btn-primary btn-width-lg" type="submit">Reply</button>
                                <button class="btn btn-danger btn-sm ml-2" type="reset">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endif

        </div>
    </main>
@endsection