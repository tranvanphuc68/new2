
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">FEEDBACKS</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">  
                                <form role="search" style="text-align: right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Khóa Học</th>
                                                <th>Tên Khóa Học</th>
                                                <th>Trạng Thái</th>
                                                <th>Chi Tiết</th>
                                            </tr>
                                        </thead>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->name }}</td>
                                                <td><?php switch ($course->status) {
                                                    case '1':
                                                        echo 'Chưa học';
                                                        break;
                                                    case '2':
                                                        echo 'Đang học';
                                                        break;
                                                    case '3':
                                                        echo 'Đã hoàn thành';
                                                        break; 
                                                    }?></td>
                                                <td>
                                                    <a class="btn" href="{{ url("/feedbacks/{$course->id}") }}">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
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
