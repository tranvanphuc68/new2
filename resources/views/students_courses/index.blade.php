
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="students_courses">
        <div class="card">
            <h1 class="text-IBM">Danh sách học viên từng lớp</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <form role="search" style="float:left">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        @if (Auth::user()->role == 'Admin')
                                            <thead>
                                                <tr class="table-primary">
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
                                                    <td>
                                                        <?php switch ($course->status) {
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
                                                        <a href="{{ url("/students_courses/{$course->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach 
                                        @endif
                                        @if (Auth::user()->role == 'Teacher')                
                                            <thead>
                                                <tr class="table-primary">
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
                                                    <td>
                                                        <?php switch ($teacher->status) {
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
                                                        <a href="{{ url("/students_courses/{$teacher->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
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
