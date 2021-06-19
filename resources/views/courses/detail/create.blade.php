@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card">
        <h1 class="text-IBM">Thêm buổi khóa học {{ $id_course }}</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/detail_course/{$id_course}") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="number">Buổi học</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Number" value="{{ $data }}" aria-describedby="helpId" readonly>
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea type="text" name="content" id="content" value="{{ old('content') }}" class="form-control" placeholder="Content" aria-describedby="helpId"> </textarea>
                    </div>
                    @error('content')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="date">Ngày học</label>
                        <input type="date" name="date" id="date" value="{{ old('date') }}" class="form-control" placeholder="Date" aria-describedby="helpId" >
                    </div>
                    @error('date')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="right">
                        <button type="submit" class="btn btn-primary" >Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>

@endsection

