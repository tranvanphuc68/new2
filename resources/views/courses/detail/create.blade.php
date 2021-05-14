@extends('layouts.courses.app')

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
                <form action='{{ url("/detail_course") }}' method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="form-control btn btn-primary">Tạo chi tiết khóa học {{ $course->id_course }}</h1>
                    <div class="form-group">
                        <label for="id_course">ID_course</label>
                        <input type="text" name="id_course" id="id_course" class="form-control" placeholder="Id_course" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="number">Buổi học</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Number" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Content" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày học</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Date" aria-describedby="helpId" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
                    <button type="reset" class="btn btn-primary" name="exit">Thoát</button>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection

