@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="title-block">
    <h1 class="title">THÊM BUỔI HỌC KHÓA HỌC {{ $id_course }}</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-9">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/detail_course/{$id_course}") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="number">Buổi học</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Number" value="{{ $data }}" aria-describedby="helpId" >
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Content" aria-describedby="helpId"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày học</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Date" aria-describedby="helpId" >
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

