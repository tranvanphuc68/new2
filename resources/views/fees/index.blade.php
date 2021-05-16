@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="teacher">
        <div class="title-block">
            <h1 class="title"> DANH SÁCH GIẢNG VIÊN </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    @if (Auth::user()->role == 'Student')
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên Khóa học</th>
                                            <th>Tình trạng</th>
                                        </tr>
                                    </thead>
                                    @foreach($fees as $fee)
                                    <tr>
                                        <td>{{ $fee->id_course }}</td>
                                        <td>{{ $fee->name }}</td>
                                        <td><?php echo $fee->status_fee == 1 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên Khóa học</th>
                                            <th>Tình trạng</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td><?php echo $course->status == 1 ? 'Chưa học' : 'Đang học'; ?></td>
                                        <td><a class="btn btn-primary" href="{{ url("/fees/{$course->id}") }}"> SHOW</a></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>


@endsection