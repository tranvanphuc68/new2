@extends('layouts.forum.app')

@section('title')
    Show report post
@endsection

@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container content">
        @if(Auth::check())
            <div class="container mt-5">
                <!-- Show report của post -->
                <div class="d-flex justify-content-center row">
                    <div style="width: 100%">
                        <div class="d-flex flex-column comment-section" >
                                <h3 class="title text-Noto">Số báo cáo {{ $countReportPost }}</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="bg-blue text-white">
                                            <th class="left" style="width: 30%">Name</th>
                                            <th class="left" style="width: 70%">Content report</th>
                                        </tr>
                                    </thead>
                                    @foreach ($report_posts as $report_post)
                                        <tr class="bg-white">
                                            <td class="left" style="width: 30%">
                                                <img class="rounded-circle img" width="30" src="{{ asset("/uploads/avatars/$report_post->avatar") }}">
                                                {{ $report_post->first_name." ".$report_post->last_name }}
                                            </td>
                                            <td class="left" style="width: 70%">{{ $report_post->content }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $report_posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</main>
@endsection