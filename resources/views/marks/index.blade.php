
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
                                                    <th class="w20">ID Khóa Học</th>
                                                    <th class="w60">Tên Khóa Học</th>
                                                    <th class="w20" >Điểm</th>
                                                </tr>
                                            </thead>
                                            @foreach ($marks as $mark)
                                                <tr>
                                                    <td class="w20">{{ $mark->id_course}}</td>
                                                    <td class="w60">{{ $mark->name }}</td>
                                                    <td class="w20">{{ $mark->mark }}</td>
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
                                                @foreach($courses as $course)
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
                                                @foreach($teachers as $teacher)
                                                    <tr>
                                                        <td class="w20">{{ $teacher->id }}</td>
                                                        <td class="w60">{{ $teacher->name }}</td>
                                                        <td class="w20" >
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
