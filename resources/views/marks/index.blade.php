
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">BẢNG ĐIỂM CÁC KHÓA</h1>
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
                                    <table class="table table-striped table-bordered table-hover">
                                        @if (Auth::user()->role == 'Student')
                                            <thead>
                                                <tr>
                                                    <th>ID Khóa Học</th>
                                                    <th>Tên Khóa Học</th>
                                                    <th>Điểm</th>
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
                                                    <tr>
                                                        <th>ID Khóa Học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th>Xem Điểm</th>
                                                    </tr>
                                                </thead>
                                                @foreach($courses as $course)
                                                    <tr>
                                                        <td>{{ $course->id }}</td>
                                                        <td>{{ $course->name }}</td>
                                                        <td>
                                                            <a class="btn btn-primary" href="{{ url("/marks/{$course->id}") }}">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach  
                                            @else  
                                                <thead>
                                                    <tr>
                                                        <th>ID Khóa Học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th>Điểm</th>
                                                    </tr>
                                                </thead>
                                                @foreach($teachers as $teacher)
                                                    <tr>
                                                        <td>{{ $teacher->id }}</td>
                                                        <td>{{ $teacher->name }}</td>
                                                        <td>
                                                            <a class="btn btn-primary" href="{{ url("/marks/{$teacher->id}") }}">
                                                                <i class="fa fa-eye"></i>
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
