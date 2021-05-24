@extends('layouts.forum.app')

@section('title')
    Show report post
@endsection

@section('content')
<div class="container content">
    @if(Auth::check())
        <div class="container mt-5">
            {{-- <div class="d-flex justify-content-center row">
                <h3>CHI TIẾT REPORT POST</h3>
            </div>
            <div class="d-flex justify-content-center row">
                <div class="col-md-8" style="border-top: 3px solid rgb(201, 220, 221); border-left: 2px solid rgb(201, 220, 221); border-right: 2px solid rgb(201, 220, 221); background-color:rgb(255, 255, 255); border-radius: 10px; border-bottom: 5px solid rgb(218, 227, 245); background-color:rgb(228, 238, 255)">
                    <!-- show post -->                    
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
                    </div>
                    
                    <div class="d-flex flex-row fs-12" style="justify-content:flex-end">
                        <!-- Delete post -->  
                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('post-delete-{{ $post->id }}').submit()" style="color: black">
                            <i class="fa fa-trash"></i>
                        </a>
                            
                        <form action='{{ url("/posts/$post->id") }}' method="POST" id="post-delete-{{ $post->id }}">
                            @method('DELETE')
                            @csrf
                        </form>
                        <!-- Count report post -->
                        <div class="like cursor action-collapse ml-4" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1" style="color: black">
                            <i class="fa fa-flag"></i>
                            <sup>
                                <span class="counter">({{ $countReportPost }})</span>
                            </sup>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Show report của post -->
            <div class="d-flex justify-content-center row">
                <div >
                    <div class="d-flex flex-column comment-section" >
                        <div class="p-2">
                        </div>
                            <h2 style="color: steelblue">Số báo cáo {{ $countReportPost }}</h2>
                            <table class="table table-striped table-hover"  style="border: 2px solid black; ">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>Name</th>
                                        <th>Content report</th>
                                    </tr>
                                </thead>
                                @foreach ($report_posts as $report_post)
                                    <tr>
                                        <td>
                                            <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/$report_post->avatar") }}">
                                            {{ $report_post->fullname }}
                                        </td>
                                        <td>{{ $report_post->content }}</td>
                                    </tr>
                                @endforeach
                            </table>
                            {{ $report_posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif
@endsection