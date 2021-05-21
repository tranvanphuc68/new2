@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="title-block">
        <h1 class="title">CẬP NHẬT THÔNG TIN KHÓA HỌC {{ $course->name }}</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-9">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/courses/$course->id") }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên khóa học</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId" value="{{ $course->name }}">
                    </div>
                    <div class="form-group">
                        <label for="id_teacher">Mã giảng viên</label>
                        <input type="text" name="id_teacher" id="id_teacher" class="form-control" placeholder="ID_teacher" aria-describedby="helpId" value="{{ $course->id_teacher }}"> 
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Description" aria-describedby="helpId" value="{{ $course->description }}"> 
                    </div>
                    <div class="form-group">
                        <label for="timetable">Thời gian biểu</label>
                        <input type="text" name="timetable" id="timetable" class="form-control" placeholder="Timetable" aria-describedby="helpId" value="{{ $course->timetable }}">
                    </div>
                    <div class="form-group">
                        <label for="max_student">Số học sinh tối đa</label>
                        <input type="text" name="max_students" id="max_students" class="form-control" placeholder="Max_students" aria-describedby="helpId" value="{{ $course->max_students }}" >
                    </div>
                    <div class="form-group">
                        <label for="sum_time">Tổng thời gian</label>
                        <input type="text" name="sum_time" id="sum_time" class="form-control" placeholder="Sum_time" aria-describedby="helpId" value="{{ $course->sum_time }}">
                    </div>
                    <div class="form-group">
                        <label for="lessons">Số buổi học</label>
                        <input type="text" name="lessons" id="lessons" class="form-control" placeholder="Lessons" aria-describedby="helpId" value="{{ $course->lessons }}">
                    </div>
                    <div class="form-group">
                        <label for="fee">Học phí</label>
                        <input type="text" name="fee" id="fee" class="form-control" placeholder="Fee" aria-describedby="helpId" value="{{ $course->fee }}">
                    </div>
                    <div class="form-group">
                        <label for="salary">Lương</label>
                        <input type="text" name="salary" id="salary" class="form-control" placeholder="Salary" aria-describedby="helpId" value="{{ $course->salary }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Tình trạng</label>
                        <input type="text" name="status" id="status" class="form-control" placeholder="Status" aria-describedby="helpId" value="{{ $course->status }}">
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary" >Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection


