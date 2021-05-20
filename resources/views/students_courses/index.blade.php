
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">STUDENTS_COURSES</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-10">
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
                                                    <th>Trạng Thái</th>
                                                </tr>
                                            </thead>
                                            @foreach ($student_courses as $student_course)
                                                <tr>
                                                    <td>{{ $student_course->id_course}}</td>
                                                    <td>{{ $student_course->name }}</td>
                                                    <td><?php switch ($student_course->status) {
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
                                                </tr>
                                            @endforeach
                                        @else
                                            @if (Auth::user()->role == 'Admin')
                                                <thead>
                                                    <tr>
                                                        <th>ID Khóa Học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th>Trạng Thái</th>
                                                        <th>Xem</th>
                                                    </tr>
                                                </thead>
                                                @foreach($courses as $course)
                                                    <tr>
                                                        <td>{{ $course->id }}</td>
                                                        <td>{{ $course->name }}</td>
                                                        <td><?php echo $course->status == 1 ? 'Chưa học': 'Đang học'; ?></td>
                                                        <td>
                                                            <a class="btn btn-primary" href="{{ url("/students_courses/{$course->id}") }}">
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
                                                        <th>Trạng Thái</th>
                                                        <th>Xem</th>
                                                    </tr>
                                                </thead>
                                                @foreach($teachers as $teacher)
                                                    <tr>
                                                        <td>{{ $teacher->id }}</td>
                                                        <td>{{ $teacher->name }}</td>
                                                        <td><?php echo $teacher->status == 1 ? 'Chưa học': 'Đang học'; ?></td>
                                                        <td>
                                                            <a class="btn btn-primary" href="{{ url("/students_courses/{$teacher->id}") }}">
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
