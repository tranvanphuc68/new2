@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card">
            <h1 class="text-IBM"> Danh sách khóa học </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                @if (Auth::user()->role == 'Admin')
                                    <a style="float:left" href=" {{ url("/courses/create") }}" name="create"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Thêm khóa học</span></a>
                                @endif
                                <form role="search" style="float:right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                @if (Auth::user()->role == 'Admin')
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
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
                                                <td style="display: flex;  justify-content: space-around;">
                                                    <a href="{{ url("/courses/{$course->id}") }}" >
                                                        <i class="fa fa-eye icon-view"></i>
                                                    </a>
                                                    <a href="{{ url("/courses/{$course->id}/edit") }}" >
                                                        <i class="fa fa-pencil icon-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('course-delete-{{ $course->id }}').submit()" >
                                                        <i class="fa fa-trash-o icon-delete"></i>
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
                                @else
                                    @if (Auth::user()->role == 'Teacher')
                                        <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Khóa</th>
                                                    <th>Mô Tả</th>
                                                    <th>Thời Khóa Biểu</th>
                                                    <th>Học Viên Tối Đa</th>
                                                    <th>Tổng Giờ</th>
                                                    <th>Số Tiết</th>
                                                    <th>Tình Trạng</th>
                                                    <th>Xem Chi Tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td>{{ $course->id }}</td>
                                                    <td>{{ $course->name }}</td>
                                                    <td>{{ $course->description }}</td>
                                                    <td>{{ $course->timetable }}</td>
                                                    <td>{{ $course->max_students }}</td>
                                                    <td>{{ $course->sum_time }}</td>
                                                    <td>{{ $course->lessons }}</td>
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
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {{ $courses->links('') }}
                                    </div>
                                    @else
                                        <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Khóa</th>
                                                    <th>Tên Giảng Viên</th>
                                                    <th>Mô Tả</th>
                                                    <th>Thời Khóa Biểu</th>
                                                    <th>Tổng Giờ</th>
                                                    <th>Số Tiết</th>
                                                    <th>Tình Trạng</th>
                                                    <th>Xem</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td>{{ $course->id }}</td>
                                                    <td>{{ $course->name }}</td>
                                                    <td>{{ $course->fullname }}</td>
                                                    <td>{{ $course->description }}</td>
                                                    <td>{{ $course->timetable }}</td>
                                                    <td>{{ $course->sum_time }}</td>
                                                    <td>{{ $course->lessons }}</td>
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
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {{ $courses->links('') }}
                                    </div>
                                    @endif
                                @endif
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection
