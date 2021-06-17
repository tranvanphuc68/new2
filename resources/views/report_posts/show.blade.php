@extends('layouts.forum.app')

@section('title')
    Show report post
@endsection

@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        @if(Auth::check())
            <div class="container">
                <!-- Show report của post -->
                <div class="d-flex justify-content-center row mt-3">
                    <div class="width_100">
                        <div class="d-flex flex-column comment-section" >
                            <h3 class="title text-Noto mb-lg-5">Số báo cáo {{ $countReportPost }}</h3>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-blue">
                                        <th class="left width_30">Name</th>
                                        <th class="left width_70">Content report</th>
                                    </tr>
                                </thead>
                                @foreach ($report_posts as $report_post)
                                    <tr class="bg-white">
                                        <td class="left width_30">
                                            <img class="rounded-circle img mb-2 mr-2" width="30" src="{{ asset("/uploads/avatars/$report_post->avatar") }}">
                                            {{ $report_post->first_name." ".$report_post->last_name }}
                                        </td>
                                        <td class="left width_70">{{ $report_post->content }}</td>
                                    </tr>
                                @endforeach
                            </table>
                            
                            <div>
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