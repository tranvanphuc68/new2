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
                                <a href=" {{ url("/courses/create") }}" class="btn btn-primary" name="create">THÊM KHÓA HỌC MỚI</a>
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
                                                <th>Tên Khóa</th>
                                                <th>Tên Giảng Viên</th>
                                                <th>Mô Tả</th>
                                                <th>Thời Khóa Biểu</th>
                                                <th>Học Viên Tối Đa</th>
                                                <th>Tổng Giờ</th>
                                                <th>Số Tiết</th>
                                                <th>Lương</th>
                                                <th>Học Phí</th>
                                                <th>Tình Trạng</th>
                                                <th>Chức Năng</th>
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
                                                <td>{{ $course->salary }}</td>
                                                <td>{{ $course->fee }}</td>
                                                <td><?php switch ($course->status) {
                                                                        case '1':
                                                                            echo 'Chưa Học';
                                                                            break;
                                                                        case '2':
                                                                            echo 'Đang Học';
                                                                            break;
                                                                        case '3':
                                                                            echo 'Đã Hoàn Thành';
                                                                            break; 
                                                            }?>
                                                    </td>
                                                <td>
                                                    <a href="{{ url("/courses/{$course->id}") }}" class="btn">
                                                        
                                                    </a>
                                                    <a href="{{ url("/courses/{$course->id}/edit") }}" class="btn">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('course-delete-{{ $course->id }}').submit()" class="btn">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
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
