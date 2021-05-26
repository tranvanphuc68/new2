@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="card col-md-12" style="padding: 0px;">
        <h3 class="text-IBM"> Thông tin chi tiết khóa học {{ $course->name }}</h3>
    </div>
    <section class="example">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-block">
                    <div class="row mb-3">
                        @if (Auth::user()->role == 'Admin')
                            <div>
                                <a style="float:left" href="{{ url("/detail_course/create/{$id_course}") }}"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Thêm buổi học</span></a>
                                @error ('full')
                                <div style="float:right; " >
                                    <a class="text-IBM" style="color: red; background-color: white" href="">{{ $message }}</a>
                                </div>
                                @enderror
                            </div>
                        @else
                            <div>
                                <a href="{{ $course->link }}" class="btn btn-primary">Link nhập nộp bài tập</a>
                            </div>
                        @endif
                    </div>
                    <table class="table table-bordered table-hover">
                        <tr class="table-primary">
                            <th style="width: 5%; text-align:center">Buổi</th>
                            <th>Nội Dung</th>
                            <th>Thời Khóa Biểu</th>
                            <th>Ngày Học</th>
                            @if (Auth::user()->role == 'Admin')
                                <th style="width: 5%; text-align:center">Sửa</th>
                            @endif
                        </tr>   
                        @foreach($detail as $detail)
                            <tr>
                                <td class="center">{{ $detail->number }}</td>
                                <td>{{ $detail->content }}</td>
                                <td>{{ $detail->date }}</td>
                                <td>{{ $detail->timetable }}</td>
                                @if (Auth::user()->role == 'Admin')
                                    <td class="center">
                                        <a href="{{ url("/detail_course/{$detail->id_course}-{$detail->number}/edit") }}">
                                            <i class="fa fa-pencil icon-edit"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</article>

@endsection

