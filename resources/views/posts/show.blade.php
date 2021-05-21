@extends('layouts.forum.app')

@section('title')
    Show Post
@endsection

@section('content')
<div class="content">
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8" style="border-top: 3px solid rgb(201, 220, 221); border-left: 2px solid rgb(201, 220, 221); border-right: 2px solid rgb(201, 220, 221); background-color:rgb(255, 255, 255); border-radius: 10px; border-bottom: 5px solid rgb(218, 227, 245); background-color:rgb(228, 238, 255)">
                    <div class="d-flex flex-column comment-section" id="myGroup">
                        <div class="pt-3">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $post->fullname }}</span>
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
                                @if ($post->fullname == Auth::user()->fullname )
                                    <div class="like cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1">
                                        <span class="ml-3"><i class="fa fa-pencil"></i></span>
                                    </div>
                                @endif

                                <!-- Delete post -->
                                @if (($post->fullname == Auth::user()->fullname) || (Auth::user()->role == "Admin") )
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
                                                <sup>
                                                    <span class="counter">({{ $countReportPost }})</span>
                                                </sup>
                                            </a>
                                            <div class="modal fade" id="report" tabindex="-1" aria-labelledby="reportLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img class="modal-title rounded-circle img" id="report" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                                                            <span class="d-block font-weight-bold name">{{ Auth::user()->fullname }}</span>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                              <label for="recipient-name" class="col-form-label">Content report:</label>
                                                              <textarea class="form-control ml-1 shadow-none textarea" name="content" placeholder="Content"></textarea>
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
                        @if($post->fullname == Auth::user()->fullname )
                        <form method="POST" action="{{url("/posts/$post->id")}}">
                                @csrf
                                @method('PUT')
                                <div id="collapse-1" class="p-2 collapse mb-3" data-parent="#myGroup">
                                    <div class="d-flex flex-column comment-section" >
                                        <div class="p-2" style="background-color: rgb(207, 213, 241); border: 2px solid rgb(160, 158, 241); border-radius: 10px;">
                                            <div class="d-flex flex-row align-items-start mb-3">
                                                <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$post->avatar") }}">
                                                <div class="d-flex flex-column justify-content-start ml-2">
                                                    <span class="d-block font-weight-bold name">{{ $post->fullname }}</span>
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
                                    <span class="d-block font-weight-bold name">{{ $comment->fullname }}</span>
                                    <span class="date text-black-50">{{ $comment->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2 ml-5">
                                <div style="color: rgb(8, 8, 8)">{{ $comment->content }}</div>
                            </div>
                        </div>

                        @if (Auth::check())
                            @if(($comment->fullname == Auth::user()->fullname))
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
    </div>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
        $(document).on('click', "button[name='but']", function() {
            statusList = $('input[type=radio]:checked')
            data = []
            for(i=0;i<statusList.length;i++) {
                std = {
                    'id_student': $(statusList[i]).attr('name'),
                    'status': $(statusList[i]).val(),
                }
                data.push(std)
            }
            data = JSON.stringify(data)
            console.log(data)
            $.ajax({
                    url: "{{ url("/attendance") }}",
                    method: 'POST',
                    data:{
                        '_token': '{{ csrf_token() }}',
                        'data' : data,
                        'id_course' : {{$id_course}},
                        'number' : {{$number}}
                    },
                    success: function(res) {
                        location.assign("{{ url("/attendance") }}")
                    },
                    error: function(err) {
                        console.error(err)
                    }
                });  
        })
    
</script> --}}
@endsection
