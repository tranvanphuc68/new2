
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
                                <form role="search" style="text-align: right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
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
                                                    <th style="width: 20%">ID Khóa Học</th>
                                                    <th>Tên Khóa Học</th>
                                                    <th style="width: 12%; text-align:center" >Điểm</th>
                                                </tr>
                                            </thead>
                                            @foreach ($marks as $mark)
                                                <tr>
                                                    <td>{{ $mark->id_course}}</td>
                                                    <td>{{ $mark->name }}</td>
                                                    <td>{{ $mark->mark }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @if (Auth::user()->role == 'Admin')
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th style="width: 20%">ID Khóa Học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th style="width: 12%; text-align:center" >Xem Điểm</th>
                                                    </tr>
                                                </thead>
                                                @foreach($courses as $course)
                                                    <tr>
                                                        <td>{{ $course->id }}</td>
                                                        <td>{{ $course->name }}</td>
                                                        <td class="center">
                                                            <a href="{{ url("/marks/{$course->id}") }}">
                                                                <i class="fa fa-eye icon-view"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach  
                                            @else  
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th style="width: 20%">ID Khóa Học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th style="width: 12%; text-align:center">Điểm</th>
                                                    </tr>
                                                </thead>
                                                @foreach($teachers as $teacher)
                                                    <tr>
                                                        <td>{{ $teacher->id }}</td>
                                                        <td>{{ $teacher->name }}</td>
                                                        <td class="center">
                                                            <a href="{{ url("/marks/{$teacher->id}") }}">
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
