@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card">
            <h1 class="text-IBM"> Danh sách khóa học </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a style="float:left" href=" {{ url("/review_course/create") }}"><img src="{{ asset('assets/img/icon-plus.png') }}" style="max-width: 45px" alt=""><span style="font-size:20px">Thêm khóa học</span></a>
                            </div>
                            <section class="example">
                                <div class="row">
                                    @foreach ($review_course as $item)
                                    <div class="col-md-4">
                                        <div class="card m-2">
                                            <img style="height: 200px" src="{{ asset("/uploads/courses/$item->image") }}">
                                            <div class="card-body" style=" display: flex; flex-direction: column;align-items: center; justify-content: space-between;">
                                                <h5 class="card-title" style="font-weight: bold;">{{ $item->course_name }} </h5>
                                                <h6 class="card-subtitle mb-1 text-muted">Đầu vào: {{ $item->input }} </h6>
                                                <h6 class="card-subtitle mb-1 text-muted">Đầu ra: {{ $item->output }}+</h6>
                                                <div>
                                                    <a href="{{ url("/review_course/$item->id") }}">
                                                        <i class="fa fa-eye icon-view"></i>
                                                    </a>
                                                    <a href="{{ url("/review_course/edit/$item->id") }}">
                                                        <i class="fa fa-pencil icon-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('user-delete-{{ $item->id }}').submit()">
                                                        <i class="fa fa-trash-o icon-delete"></i>
                                                    </a>
                                                    <form method="POST" id="user-delete-{{ $item->id }}" action="{{ url("/review_course/$item->id") }}">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</article>
@endsection