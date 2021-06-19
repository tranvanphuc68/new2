
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
                                <form action="{{ url('/search/students_courses') }}" method="GET" class="right">
                                    <div class="input-container">
                                        <input type="text" class="search" name="search" placeholder="Search by course name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w15">ID Khóa Học</th>
                                                    <th class="w40">Tên Khóa Học</th>
                                                    <th class="w30">Trạng Thái</th>
                                                    <th class="w15">Xem</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td class="w10">{{ $course->id }}</td>
                                                    <td class="w40">{{ $course->name }}</td>
                                                    <td class="w30">
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
                                                    <td class="w20">  
                                                        <a href="{{ url("/students_courses/{$course->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
                                                        </a>
                                                    </td>
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
