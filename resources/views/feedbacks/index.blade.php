
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="feedback">
        <div class="card">
            <h1 class="text-IBM">Feedbacks</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">  
                                <form action="{{ url('/search/feedbacks') }}" method="GET" class="right">
                                    <div class="input-container">
                                        <input type="text" class="search" name="search" placeholder="Search by course name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th class="w15">ID Lớp Học</th>
                                                <th class="w30">Tên Lớp Học</th>
                                                <th class="w40">Trạng Thái</th>
                                                <th class="w15">Chi Tiết</th>
                                            </tr>
                                        </thead>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td class="w15">{{ $course->id }}</td>
                                                <td class="w30">{{ $course->name }}</td>
                                                <td class="w40"><?php switch ($course->status) {
                                                    case '1':
                                                        echo 'Chưa học';
                                                        break;
                                                    case '2':
                                                        echo 'Đang học';
                                                        break;
                                                    case '3':
                                                        echo 'Đã hoàn thành';
                                                        break; 
                                                    }?></td>
                                                <td class="center">
                                                    <a href="{{ url("/feedbacks/{$course->id}") }}">
                                                        <i class="fa fa-eye icon-view"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection
