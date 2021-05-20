@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="title-block">
        <h3 class="title"> THÔNG TIN CHI TIẾT KHÓA HỌC {{ $detail[0]->name }}</h3>
    </div>
    <section class="example">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-block">
                    <div class="mb-3">
                        <a href="{{ url("/detail_course/create/{$id_course}") }}" class="btn btn-primary">THÊM BUỔI HỌC MỚI</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>Buổi</th>
                            <th>Nội Dung</th>
                            <th>Ngày Học</th>
                            <th></th>
                        </tr>   
                        @foreach($detail as $detail)
                            <tr>
                                <td>{{ $detail->number }}</td>
                                <td>{{ $detail->content }}</td>
                                <td>{{ $detail->date }}</td>
                                <td>
                                    <a href="{{ url("/detail_course/{$detail->id_course}-{$detail->number}/edit") }}" class="btn">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure you want to delete this item?')) document.getElementById('detailCourse-delete-{{ $detail->id_course }}').submit()" class="btn">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <form method="POST" id="detailCourse-delete-{{ $detail->id_course }}" action="{{ url("/detail_course/{$detail->id_course}-{$detail->number}") }}" >
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</article>

@endsection