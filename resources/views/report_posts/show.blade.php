@extends('layouts.forum.app')

@section('title')
    Show report post
@endsection

@section('content')
<div class="container content">
    @if(Auth::check())
        <div class="container mt-5">
            <!-- Show report của post -->
            <div class="d-flex justify-content-center row">
                <div style="width: 100%">
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