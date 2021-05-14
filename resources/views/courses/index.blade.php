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
                                <a href="javascript:void(0)" class="btn btn-primary" name="create">THÊM KHÓA HỌC</a>
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
                                                <th>Id</th>
                                                <th>Mã khóa</th>
                                                <th>Rên khóa</th>
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
                                                    <a href="javascript:void(0)" data-id="<?php echo $course->id?>" class="btn btn-primary" name="view">Xem</a>
                                                    <a href="javascript:void(0)" data-id="<?php echo $course->id?>" class="btn btn-primary" name="edit">Sửa</a>
                                                    <a href="javascript:void(0)" data-id="<?php echo $course->id?>" class="btn btn-primary" name="delete">Xóa</a>
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
