@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="title-block">
            <h1 class="title"> DANH SÁCH KHÓA HỌC </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a href=" {{ url("/courses/create") }}" class="btn btn-primary" name="create">THÊM KHÓA HỌC</a>
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
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên khóa</th>
                                                <th>Tên teacher</th>
                                                <th>Mô tả</th>
                                                <th>Thời khóa biểu</th>
                                                <th>Số lượng học viên tối đa</th>
                                                <th>Tổng số giờ</th>
                                                <th>Số tiết</th>
                                                <th>Học phí</th>
                                                <th>Lương</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->name }}</td>
                                                <td>{{ $course->fullname }}</td>
                                                <td>{{ $course->description }}</td>
                                                <td>{{ $course->timetable }}</td>
                                                <td>{{ $course->max_students }}</td>
                                                <td>{{ $course->sum_time }}</td>
                                                <td>{{ $course->lessons }}</td>
                                                <td>{{ $course->fee }}</td>
                                                <td>{{ $course->salary }}</td>
                                                <td>
                                                    <a href="{{ url("/courses/{$course->id}") }}" class="btn btn-primary">Xem</a>
                                                    <a href="{{ url("/courses/{$course->id}/edit") }}" class="btn btn-primary">Sửa</a>
                                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure you want to delete this item?')) document.getElementById('course-delete-{{ $course->id }}').submit()" class="btn btn-primary">Xóa</a>
                                                    <form method="POST" id="course-delete-{{ $course->id }}" action="{{ url("/courses/$course->id") }} >
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    {{ $courses->links('') }}
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
