
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="mark">
        <div class="card">
            <h1 class="text-IBM">Bảng điểm các khóa</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <form action="{{ url('/search/marks') }}" method="GET" style="text-align: right">
                                    <div class="input-container">
                                        <input type="text" class="search" name="search" placeholder="Search by course name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        @if (Auth::user()->role == 'Student')
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w20">ID Khóa Học</th>
                                                    <th class="w60">Tên Khóa Học</th>
                                                    <th class="w20" >Điểm</th>
                                                </tr>
                                            </thead>
                                            @foreach ($studentView as $mark)
                                                <tr>
                                                    <td class="w20">{{ $mark->id_course}}</td>
                                                    <td class="w60">{{ $mark->name }}</td>
                                                    <td class="w20">{{ number_format(("$mark->mark"),1,'.','') }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @if (Auth::user()->role == 'Admin')
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th class="w20">ID Khóa Học</th>
                                                        <th class="w60">Tên Khóa Học</th>
                                                        <th class="w20" >Xem Điểm</th>
                                                    </tr>
                                                </thead>
                                                @foreach($adminView as $course)
                                                    <tr>
                                                        <td class="w20">{{ $course->id }}</td>
                                                        <td class="w60">{{ $course->name }}</td>
                                                        <td class="w20" >
                                                            <a href="{{ url("/marks/{$course->id}") }}">
                                                                <i class="fa fa-eye icon-view"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach  
                                            @else  
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th class="w20">ID Khóa Học</th>
                                                        <th class="w60">Tên Khóa Học</th>
                                                        <th class="w20">Điểm</th>
                                                    </tr>
                                                </thead>
                                                @foreach($teacherView as $course)
                                                    <tr>
                                                        <td class="w20">{{ $course->id }}</td>
                                                        <td class="w60">{{ $course->name }}</td>
                                                        <td class="w20" >
                                                            <a href="{{ url("/marks/{$course->id}") }}">
                                                                <i class="fa fa-eye icon-view"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach 
                                            @endif
                                        @endif
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
