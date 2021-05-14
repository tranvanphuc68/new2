@extends('layouts.courses.app')

@section('title')
Into
@endsection

@section('content')
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url("/courses") }}" method="POST" enctype="multipart/form-data" name="insert">
                    @csrf
                    <h1 class="form-control btn btn-primary">Tạo khóa học mới</h1>
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Id" aria-describedby="helpId" >
                    </div>
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
                        <label for="status">Tình trạng</label>
                        <input type="text" name="status" id="status" class="form-control" placeholder="Status" aria-describedby="helpId" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
                    <button type="reset" class="btn btn-primary" name="exit">Thoát</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

