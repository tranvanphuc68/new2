
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">FEEDBACKS</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Khóa học</th>
                                                <th>Tên Khóa học</th>
                                                <th>Trạng Thái</th>
                                                <th>Chi tiết</th>
                                            </tr>
                                        </thead>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->name }}</td>
                                                <td><?php switch ($course->status) {
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
                                                <td><a class="btn btn-primary" href="{{ url("/feedbacks/{$course->id}") }}">Xem</a></td>
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
