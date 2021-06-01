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
                <form action="{{ url("/courses") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên khóa học</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Name" aria-describedby="helpId" >
                    </div>
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="id_teacher">Mã giảng viên</label>
                        <input type="text" name="id_teacher" id="id_teacher" value="{{ old('id_teacher') }}" class="form-control" placeholder="ID_teacher" aria-describedby="helpId" >
                    </div>
                    @error('id_teacher')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" name="description" id="description" value="{{ old('description') }}" class="form-control" placeholder="Description" aria-describedby="helpId" >
                    </div>
                    @error('description')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="timetable">Thời gian biểu</label>
                        <input type="text" name="timetable" id="timetable" value="{{ old('timetable') }}" class="form-control" placeholder="Timetable" aria-describedby="helpId" >
                    </div>
                    @error('timetable')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="max_students">Số học sinh tối đa</label>
                        <input type="text" name="max_students" id="max_students" value="{{ old('max_students') }}" class="form-control" placeholder="Max_students" aria-describedby="helpId" >
                    </div>
                    @error('max_students')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="sum_time">Tổng thời gian</label>
                        <input type="text" name="sum_time" id="sum_time" value="{{ old('sum_time') }}" class="form-control" placeholder="Sum_time" aria-describedby="helpId" >
                    </div>
                    @error('sum_time')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="lessons">Số buổi học</label>
                        <input type="text" name="lessons" id="lessons" value="{{ old('lessons') }}" class="form-control" placeholder="Lessons" aria-describedby="helpId" >
                    </div>
                    @error('lessons')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="fee">Học phí</label>
                        <input type="text" name="fee" id="fee" value="{{ old('fee') }}" class="form-control" placeholder="Fee" aria-describedby="helpId" >
                    </div>
                    @error('fee')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="salary">Lương</label>
                        <input type="text" name="salary" id="salary" value="{{ old('salary') }}" class="form-control" placeholder="Salary" aria-describedby="helpId" >
                    </div>
                    @error('salary')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group" >
                        <label for="link">Link nhận nộp bài tập</label>
                        <input type="text" name="link" id="link" value="{{ old('link') }}" class="form-control" placeholder="Link" aria-describedby="helpId" >
                    </div>
                    @error('link')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Tình trạng</label>
                        <div>   
                            <input type="radio" name="status" id="status0" value="1" <?php if(old('status') == 1) echo "checked" ?>>
                            <label for="status1">Chưa học</label>
                        </div>
                        <div>                           
                            <input type="radio" name="status" id="status1" value="2" <?php if(old('status') == 2) echo "checked" ?>>
                            <label for="status2">Đang học</label>
                        </div>
                        <div> 
                            <input type="radio" name="status" id="status2" value="3" <?php if(old('status') == 3) echo "checked" ?>>
                            <label for="status3">Hoàn thành</label>
                        </div>
                    </div>
                    @error('status')
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

