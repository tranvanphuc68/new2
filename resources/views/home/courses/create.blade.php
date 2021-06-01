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
                    <div><img width=30% src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiLff5M2CCoLu58Ybuz4BjyfYqTe3Ffv6Mng&usqp=CAU" id='img'></div>
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="name">Tên khóa học</label>
                        <input type="text" name="course_name" value="{{ old('course_name') }}" class="form-control">
                    </div>
                    @error('course_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <h2 style="text-align: center; color: #67b0d1">Chi tiết khóa học</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input">Đầu vào</label>
                            <input type="text" name="input" value="{{ old('input') }}" class="form-control">
                            @error('input')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="input">Đầu ra</label>
                            <input type="text" name="output" value="{{ old('output') }}" class="form-control">
                            @error('output')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Học phí</label>
                            <input type="text" name="tuition" value="{{ old('tuition') }}" class="form-control" placeholder="VNĐ">
                            @error('tuition')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input">Thời gian</label>
                            <input type="text" name="time" value="{{ old('time') }}" class="form-control" placeholder="Giờ/buổi">
                            @error('time')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="input">Thời lượng</label>
                            <input type="text" name="duration" value="{{ old('duration') }}" class="form-control" placeholder="Giờ"> 
                            @error('duration')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Mục tiêu khóa học</label>
                            <textarea rows="5" type="text" name="target" class="form-control">{{ old('target') }}</textarea>
                            @error('target')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">Đối tượng</label>
                            <textarea rows="5" type="text" name="student"  class="form-control">{{ old('student') }}</textarea>
                            @error('student')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h2 style="text-align: center; color: #67b0d1">Nội dung khóa học</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">SPEAKING</label>
                            <textarea rows="5"  type="text" name="skill_speaking"  class="form-control">{{ old('skill_speaking') }}</textarea>
                            @error('skill_speaking')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">WRITING</label>
                            <textarea rows="5"  type="text" name="skill_writing"  class="form-control">{{ old('skill_writing') }}</textarea>
                            @error('skill_writing')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">LISTENING</label>
                            <textarea rows="5"  type="text" name="skill_listening"  class="form-control">{{ old('skill_listening') }}</textarea>
                            @error('skill_listening')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">READING</label>
                            <textarea rows="5"  type="text" name="skill_reading"  class="form-control">{{ old('skill_reading') }}</textarea>
                            @error('skill_reading')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">NGỮ PHÁP</label>
                            <textarea rows="5"  type="text" name="grammar"  class="form-control">{{ old('grammar') }}</textarea>
                            @error('grammar')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name">TỪ VỰNG</label>
                            <textarea rows="5"  type="text" name="vocabulary"  class="form-control">{{ old('vocabulary') }}</textarea>
                            @error('vocabulary')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">BÀI THI CUỐI KHÓA</label>
                        <textarea rows="3"  type="text" name="final_test" class="form-control">{{ old('final_test') }}</textarea>
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
<script>
    const input = document.querySelector('input[type="file"]')

    function handleFiles (files) {
      console.log(files)
      const reader = new FileReader()
      reader.onload = function () {
        const img = document.querySelector('#img')
        img.src = reader.result
      }
      reader.readAsDataURL(files[0])
    }

    input.addEventListener('change', function (e) {
      handleFiles(input.files)
    })
</script>
@endsection


