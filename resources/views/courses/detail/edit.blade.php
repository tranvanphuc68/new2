@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="title-block">
        <h3 class="title"> </h3>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-9">
            <div class="card card-block sameheight-item">
                <form action='{{ url("/detail_course/{$course->id_course}-{$course->number}") }}' method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div>Sửa thông tin của khóa học {{ $course->id_course }} và buổi học thứ {$course->number}</div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Content" aria-describedby="helpId" value="{{ $course->content }}" >
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày học</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Date" aria-describedby="helpId" value="{{ $course->date }}" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
                    <button type="reset" class="btn btn-primary" name="exit">Thoát</button>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection

