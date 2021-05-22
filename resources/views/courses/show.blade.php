@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="title-block">
        <h3 class="title"> THÔNG TIN CHI TIẾT KHÓA HỌC {{ $course->name }}</h3>
    </div>
    <section class="example">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-block">
                    <div class="row mb-3">
                        @if (Auth::user()->role == 'Admin')
                            <div>
                                <a href="{{ url("/detail_course/create/{$id_course}") }}" class="btn btn-primary">THÊM BUỔI HỌC MỚI</a>
                                @error ('full')
                                <h3>{{ $message }}</h3>
                                @enderror
                            </div>
                        @else
                            <div style="text-align: right;" >
                                <a href="{{ $course->link }}" class="btn btn-primary">LINK NHẬN NỘP BÀI TẬP</a>
                            </div>
                        @endif
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>Buổi</th>
                            <th>Nội Dung</th>
                            <th>Ngày Học</th>
                            @if (Auth::user()->role == 'Admin')
                                <th></th>
                            @endif
                        </tr>   
                        @foreach($detail as $detail)
                            <tr>
                                <td>{{ $detail->number }}</td>
                                <td>{{ $detail->content }}</td>
                                <td>{{ $detail->date }}</td>
                                @if (Auth::user()->role == 'Admin')
                                    <td>
                                        <a href="{{ url("/detail_course/{$detail->id_course}-{$detail->number}/edit") }}" class="btn">
                                            <i class="fa fa-pencil"></i>
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

