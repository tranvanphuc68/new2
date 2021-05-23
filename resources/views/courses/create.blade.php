@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card col-md-9" style="padding: 0px;">
        <h1 class="text-IBM">Tạo khóa học</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-9">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/courses") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên khóa học</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="id_teacher">Mã giảng viên</label>
                        <input type="text" name="id_teacher" id="id_teacher" class="form-control" placeholder="ID_teacher" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Description" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="timetable">Thời gian biểu</label>
                        <input type="text" name="timetable" id="timetable" class="form-control" placeholder="Timetable" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="max_student">Số học sinh tối đa</label>
                        <input type="text" name="max_students" id="max_students" class="form-control" placeholder="Max_students" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="sum_time">Tổng thời gian</label>
                        <input type="text" name="sum_time" id="sum_time" class="form-control" placeholder="Sum_time" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="lessons">Số buổi học</label>
                        <input type="text" name="lessons" id="lessons" class="form-control" placeholder="Lessons" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="fee">Học phí</label>
                        <input type="text" name="fee" id="fee" class="form-control" placeholder="Fee" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="salary">Lương</label>
                        <input type="text" name="salary" id="salary" class="form-control" placeholder="Salary" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" class="form-control" placeholder="Link" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="status">Tình trạng</label>
                        <input type="text" name="status" id="status" class="form-control" placeholder="Status" aria-describedby="helpId" >
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

