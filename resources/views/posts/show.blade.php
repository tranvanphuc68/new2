@extends('layouts.forum.app')

@section('title')
    Show Post
@endsection

@section('content')
<div class="container content">

        <div class="container mt-5 ">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="d-flex flex-column comment-section" id="myGroup">
                        <div class="bg-white p-2">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $post->fullname }}</span>
                                    <span class="date text-black-50">{{ $post->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h3>{{ $post->title }}</h3>
                                <div>{{ $post->content }}</div>
                            </div>
                        </div>

                        <div class="bg-white p-2">
                            <div class="d-flex flex-row fs-12">
                                <div class="like p-2 cursor">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="ml-1">Like</span>
                                </div>
                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1">
                                    <i class="fa fa-commenting-o"></i>
                                    <span class="ml-1">Comment</span>
                                </div>
                                {{-- <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2">
                                    <i class="fa fa-share"></i>
                                    <span class="ml-1">Share</span>
                                </div> --}}
                                @if($post->fullname == Auth::user()->fullname )
                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-3" href="#collapse-3">
                                    <i class="fa fa-pencil"></i>
                                    <span class="ml-1">Edit post</span>
                                </div>
                                @endif
                                @if(($post->fullname == Auth::user()->fullname))
                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-4" href="#collapse-4">
                                    <i class="fa fa-trash"></i>
                                    <span class="ml-1">Delete post</span>
                                </div>
                                @endif
                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-5" href="#collapse-5">
                                    <i class="fa fa-flag"></i>
                                    <span class="ml-1">Report post</span>
                                </div>
                            </div>
                        </div>

                        <form method="POST" action="{{ url("/comments/{$post->id}") }}" >
                            @csrf
                            <div id="collapse-1" class="bg-white p-2 collapse" data-parent="#myGroup" >
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea" name="content"></textarea>
                                </div>
                                <div class="mt-2 text-right">
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                                </div>
                            </div>
                        </form>

                        {{-- <div id="collapse-2" class="bg-light p-2 collapse" data-parent="#myGroup">
                            <div class="d-flex flex-row align-items-start">
                                <i class="fa fa-facebook border p-3 rounded mr-1"></i>
                                <i class="fa fa-twitter border p-3 rounded mr-1"></i>
                                <i class="fa fa-linkedin border p-3 rounded mr-1"></i>
                                <i class="fa fa-instagram border p-3 rounded mr-1"></i>
                                <i class="fa fa-dribbble border p-3 rounded mr-1"></i> 
                                <i class="fa fa-pinterest-p border p-3 rounded mr-1"></i> 
                            </div>
                        </div> --}}

                        @if($post->fullname == Auth::user()->fullname )
                        <form method="POST" action="{{url("/posts/$post->id")}}">
                                @csrf
                                @method('PUT')
                                <div id="collapse-3" class="bg-light p-2 collapse" data-parent="#myGroup">
                                    <div class="d-flex flex-column comment-section">
                                        <div class="bg-light p-2">
                                            <div class="d-flex flex-row align-items-start">
                                                <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                                <div class="d-flex flex-column justify-content-start ml-2">
                                                    <span class="d-block font-weight-bold name">{{ $post->fullname }}</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-start">
                                                <input type="textarea" name="title" value="{{ $post->title }}" class="form-control">
                                                <input type="textarea" name="content" value="{{ $post->content }}" class="form-control">
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

                        @if(($post->fullname == Auth::user()->fullname))
                        <form method="POST" action="{{ url("/posts/{$post->id}") }}">
                            @csrf
                            @method('DELETE')
                            <div id="collapse-4" class="bg-white p-2 collapse" data-parent="#myGroup" data-toggle="collapse">
                                <button type="submit" class="form-control"><i class="fa fa-check-circle"></i></button>
                            </div>
                        </form>
                        @endif

                        <form method="POST" action="{{ url("/report_posts/$post->id") }}" >
                            @csrf
                            <div id="collapse-5" class="bg-white p-2 collapse" data-parent="#myGroup">
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea" name="content"></textarea>
                                </div>
                                <div class="mt-2 text-right">
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit">Create report</button>
                                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                                </div>
                            </div>
                        </form>

                        <div class="bg-white p-2">
                            <h4>Comments</h4>
                        </div>
                        
                        @foreach ($comments as $comment)
                        <div class="bg-white p-2">
                            <div class="d-flex flex-row user-info">
                                <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                <div class="d-flex flex-column justify-content-start ml-2">
                                    <span class="d-block font-weight-bold name">{{ $comment->fullname }}</span>
                                    <span class="date text-black-50">{{ $comment->created_at }}</span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div>{{ $comment->content }}</div>
                            </div>
                        </div>
                        <div class="bg-white p-2">
                            <div class="d-flex flex-row fs-12">
                                <div class="like p-2">
                                    <a href="{{ url("/comments/{$comment->id}/self_edit") }}">
                                        <i class="fa fa-pencil"></i>
                                        <span class="ml-1">Edit</span>
                                    </a>
                                </div>
                                <div class="like p-2">
                                    <a href="javascript:void(0)" onclick="document.getElementById('comment-delete-{{ $comment->id }}').submit()">
                                        <i class="fa fa-trash">
                                            <span class="ml-1">Delete</span>
                                        </i>
                                    </a>
                                    <form action='{{ url("/comments/{$comment->id}") }}' method="POST" id="comment-delete-{{ $comment->id }}">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection


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