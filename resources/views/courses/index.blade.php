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
                                <form action="{{ url('/search/courses') }}" method="GET" style="float:right">
                                <div  class="input-container">
                                        <input type="text" class="search" name="search" placeholder="Search by course name" value="{{ old('search') }}">
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
                                                <th class="w3">ID</th>
                                                <th class="w">Tên Khóa</th>
                                                <th class="w">Tên Giảng Viên</th>
                                                <th class="w">Mô Tả</th>
                                                <th class="w10">Thời Khóa Biểu</th>
                                                <th class="w6">Học Viên Tối Đa</th>
                                                <th class="w5">Tổng Giờ</th>
                                                <th class="w5">Số Tiết</th>
                                                <th class="w6">Lương</th>
                                                <th class="w6">Học Phí</th>
                                                <th class="w6">Tình Trạng</th>
                                                <th class="w6">Chức Năng</th>
                                            </tr>
                                        </thead>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td class="w">{{ $course->id }}</td>
                                                <td class="w">{{ $course->name }}</td>
                                                <td class="w">{{ $course->first_name." ".$course->last_name }}</td>
                                                <td class="w">{{ $course->description }}</td>
                                                <td class="w">{{ $course->timetable }}</td>
                                                <td class="w">{{ $course->max_students }}</td>
                                                <td class="w">{{ $course->sum_time }}</td>
                                                <td class="w">{{ $course->lessons }}</td>
                                                <td class="w">{{ $course->salary }}</td>
                                                <td class="w">{{ $course->fee }}</td>
                                                <td class="w"><?php switch ($course->status) {
                                                                        case '1':
                                                                            echo 'Chưa Học';
                                                                            break;
                                                                        case '2':
                                                                            echo 'Đang Học';
                                                                            break;
                                                                        case '3':
                                                                            echo 'Hoàn Thành';
                                                                            break; 
                                                            }?>
                                                    </td>
                                                <td class="center">
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
                                                    <th class="w3">ID</th>
                                                    <th class="w20">Tên Khóa</th>
                                                    <th class="w30">Mô Tả</th>
                                                    <th class="w15">Thời Khóa Biểu</th>
                                                    <th class="w10">Học Viên Tối Đa</th>
                                                    <th class="w6">Tổng Giờ</th>
                                                    <th class="w6">Số Tiết</th>
                                                    <th class="w10">Tình Trạng</th>
                                                    <th class="w5">Xem</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td class="w3">{{ $course->id }}</td>
                                                    <td class="w20">{{ $course->name }}</td>
                                                    <td class="w30">{{ $course->description }}</td>
                                                    <td class="w15">{{ $course->timetable }}</td>
                                                    <td class="w10">{{ $course->max_students }}</td>
                                                    <td class="w6">{{ $course->sum_time }}</td>
                                                    <td class="w6">{{ $course->lessons }}</td>
                                                    <td class="w10"><?php switch ($course->status) {
                                                                            case '1':
                                                                                echo 'Chưa Học';
                                                                                break;
                                                                            case '2':
                                                                                echo 'Đang Học';
                                                                                break;
                                                                            case '3':
                                                                                echo 'Hoàn Thành';
                                                                                break; 
                                                                }?>
                                                        </td>
                                                    <td class="w5">
                                                        <a href="{{ url("/courses/{$course->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
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
                                                    <th class="w5">ID</th>
                                                    <th class="w">Tên Khóa</th>
                                                    <th class="w">Tên Giảng Viên</th>
                                                    <th class="w">Mô Tả</th>
                                                    <th class="w">Thời Khóa Biểu</th>
                                                    <th class="w">Tổng Giờ</th>
                                                    <th class="w">Số Tiết</th>
                                                    <th class="w">Tình Trạng</th>
                                                    <th class="w">Xem</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td class="w5">{{ $course->id }}</td>
                                                    <td class="w">{{ $course->name }}</td>
                                                    <td class="w">{{ $course->first_name." ".$course->last_name }}</td>
                                                    <td class="w">{{ $course->description }}</td>
                                                    <td class="w">{{ $course->timetable }}</td>
                                                    <td class="w">{{ $course->sum_time }}</td>
                                                    <td class="w">{{ $course->lessons }}</td>
                                                    <td class="w"><?php switch ($course->status) {
                                                                            case '1':
                                                                                echo 'Chưa Học';
                                                                                break;
                                                                            case '2':
                                                                                echo 'Đang Học';
                                                                                break;
                                                                            case '3':
                                                                                echo 'Hoàn Thành';
                                                                                break; 
                                                                }?>
                                                        </td>
                                                    <td class="w5">
                                                        <a href="{{ url("/courses/{$course->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
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
