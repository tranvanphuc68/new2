@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card col-md-12" style="padding: 0px;">
        <h1 class="text-IBM">Tạo khóa học</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action="{{ url('/review_course') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Ảnh mô tả</label>
                        <input type="file" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="name">Tên khóa học</label>
                        <input type="text" name="course_name" class="form-control">
                    </div>
                    <h2 style="text-align: center;">Chi tiết khóa học</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input">Đầu vào</label>
                            <input type="text" name="input" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="input">Đầu ra</label>
                            <input type="text" name="output" class="form-control">
                        </div>
                        <div class="col-md-4">
                        <label for="">Học phí</label>
                        <input type="text" name="tuition" class="form-control" placeholder="VNĐ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input">Thời gian</label>
                            <input type="text" name="time" class="form-control" placeholder="Giờ/buổi">
                        </div>
                        <div class="col-md-4">
                            <label for="input">Thời lượng</label>
                            <input type="text" name="duration" class="form-control" placeholder="Giờ"> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Mục tiêu khóa học</label>
                            <textarea rows="5" type="text" name="target" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Đối tượng</label>
                            <textarea rows="5" type="text" name="student" class="form-control"></textarea>
                        </div>
                    </div>
                    <h2 style="text-align: center;">Nội dung khóa học</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">SPEAKING</label>
                            <textarea rows="5"  type="text" name="skill_speaking" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name">WRITING</label>
                            <textarea rows="5"  type="text" name="skill_writing" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">LISTENING</label>
                            <textarea rows="5"  type="text" name="skill_listening" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name">READING</label>
                            <textarea rows="5"  type="text" name="skill_reading" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">NGỮ PHÁP</label>
                            <textarea rows="5"  type="text" name="grammar" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="name">TỪ VỰNG</label>
                            <textarea rows="5"  type="text" name="vocabulary"class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">BÀI THI CUỐI KHÓA</label>
                        <textarea rows="3"  type="text" name="final_test" class="form-control"></textarea>
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


