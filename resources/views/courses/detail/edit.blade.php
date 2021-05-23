@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card">
        <h1 class="text-IBM"> Cập nhật thông tin khóa học {{ $course->id_course }}, buổi học thứ {{$course->number}} </h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action='{{ url("/detail_course/{$course->id_course}-{$course->number}") }}' method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Content" aria-describedby="helpId" value="">{{ $course->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày học</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Date" aria-describedby="helpId" value="{{ $course->date }}" >
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection

