@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">HỌC PHÍ CÁC KHÓA</h1>
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
                                                <th>ID</th>
                                                <th>Tên Khóa Học</th>
                                                <th>Tình Trạng</th>
                                            </tr>
                                        </thead>
                                        @foreach($fees as $fee)
                                        <tr>
                                            <td>{{ $fee->id_course }}</td>
                                            <td>{{ $fee->name }}</td>
                                            <td><?php echo $fee->status_fee == 0 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Khóa Học</th>
                                                <th>Tình Trạng</th>
                                                <th>Chi Tiết</th>
                                            </tr>
                                        </thead>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->name }}</td>
                                            <td><?php echo $course->status == 0 ? 'Chưa học' : 'Đang học'; ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ url("/fees/{$course->id}") }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
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
