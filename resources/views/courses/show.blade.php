@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="title-block">
        <h3 class="title"> THÔNG TIN CHI TIẾT KHÓA HỌC {{$id_course}}</h3>
    </div>
    <a href="{{ url("/detail_course/create/{$id_course}") }}" class="btn btn-primary">Thêm chi tiết</a>
    <div class="card card-block sameheight-item">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Buổi</th>
                <th>Nội dung</th>
                <th>Ngày học</th>
                <th></th>
            </tr>   
            @foreach($detail as $detail)
                <tr>
                    <td>{{ $detail->number }}</td>
                    <td>{{ $detail->content }}</td>
                    <td>{{ $detail->date }}</td>
                    <td>
                        <a href="{{ url("/detail_course/{$detail->id_course}-{$detail->number}/edit") }}" class="btn btn-primary">Sửa</a>
                        <a href="javascript:void(0)" onclick="if (confirm('Are you sure you want to delete this item?')) document.getElementById('detailCourse-delete-{{ $detail->id_course }}').submit()" class="btn btn-primary">Xóa</a>
                        <form method="POST" id="detailCourse-delete-{{ $detail->id_course }}" action="{{ url("/detail_course/{$detail->id_course}-{$detail->number}") }}" >
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</article>

@endsection

