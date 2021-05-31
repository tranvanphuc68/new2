@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card col-md-12" style="padding: 0px;">
        <h1 class="text-IBM">Sửa khóa học</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/review_course/$review_course->id") }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Ảnh mô tả</label>
                        <div class=""><img src="{{ asset("/uploads/courses/$review_course->image") }}" class="img-fluid"></div>
                        <input type="file" name="image" >
                    </div>
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="name">Tên khóa học</label>
                        <input type="text" name="course_name" class="form-control" value="{{ $review_course->course_name }}">
                    </div>
                    @error('course_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <h2 style="text-align: center;">Chi tiết khóa học</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input">Đầu vào</label>
                            <input type="text" name="input" class="form-control" value="{{ $review_course->input }}">
                            @error('input')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="input">Đầu ra</label>
                            <input type="text" name="output" class="form-control" value="{{ $review_course->output }}">
                            @error('output')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Học phí</label>
                            <input type="text" name="tuition" class="form-control" placeholder="VNĐ" value="{{ $review_course->tuition }}">
                            @error('tuition')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input">Thời gian</label>
                            <input type="text" name="time" class="form-control" placeholder="Giờ/buổi" value="{{ $review_course->time }}">
                            @error('time')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="input">Thời lượng</label>
                            <input type="text" name="duration" class="form-control" placeholder="Giờ" value="{{ $review_course->duration }}">
                            @error('duration')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Mục tiêu khóa học</label>
                            <textarea rows="5" type="text" name="target" class="form-control">{{ $review_course->target }}</textarea>
                            @error('target')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">Đối tượng</label>
                            <textarea rows="5" type="text" name="student" class="form-control">{{ $review_course->student }}</textarea>
                            @error('student')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h2 style="text-align: center;">Nội dung khóa học</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">SPEAKING</label>
                            <textarea rows="5"  type="text" name="skill_speaking" class="form-control">{{ $review_course->skill_speaking }}</textarea>
                            @error('skill_speaking')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">WRITING</label>
                            <textarea rows="5"  type="text" name="skill_writing" class="form-control">{{ $review_course->skill_writing }}</textarea>
                            @error('skill_writing')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">LISTENING</label>
                            <textarea rows="5"  type="text" name="skill_listening" class="form-control">{{ $review_course->skill_listening }}</textarea>
                            @error('skill_listening')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">READING</label>
                            <textarea rows="5"  type="text" name="skill_reading" class="form-control">{{ $review_course->skill_reading }}</textarea>
                            @error('skill_reading')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">NGỮ PHÁP</label>
                            <textarea rows="5"  type="text" name="grammar" class="form-control">{{ $review_course->grammar }}</textarea>
                            @error('grammar')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">TỪ VỰNG</label>
                            <textarea rows="5"  type="text" name="vocabulary"class="form-control">{{ $review_course->vocabulary }}</textarea>
                            @error('vocabulary')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">BÀI THI CUỐI KHÓA</label>
                        <textarea rows="3"  type="text" name="final_test" class="form-control">{{ $review_course->final_test }}</textarea>
                    </div>
                    @error('final_test')
                                <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary" >Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>
@endsection







