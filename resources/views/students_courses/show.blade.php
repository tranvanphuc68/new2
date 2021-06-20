@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="students_courses">
        <div class="card">
            <h1 class="text-IBM">Danh sách học viên lớp {{ $course[0]->name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <h5>Số lượng học viên: {{ $countStu }}/{{$course[0]->max_students}}</h5>
                                @if ($countStu != 0)
                                @if (Auth::user()->role == 'Admin')
                                    @if ( $countStu == $course[0]->max_students)
                                        <div class="card-title-block d-left">
                                            <h5>Số học viên đã tối đa</h5>
                                        </div>
                                    @else
                                        <div class="card-title-block d-left" id="create">
                                            <a href="{{ url("/students_courses/create/{$students[0]->id_course}") }}" name="create"><img src="{{ asset('assets/img/icon-plus.png') }}" class="mw-45" alt=""><span class="fz-24">Thêm học viên</span></a>
                                        </div>
                                    @endif
                                @endif
                                <div class="card-title-block right">
                                    <form role="search" >
                                        <div  class="input-container">
                                            <input type="text" class="search" name="search" placeholder="Search by last name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                                            <div class="underline"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th class="w15">Mã Học Viên</th>
                                                <th class="w50">Tên Học Viên</th>
                                                <th class="w20">Ngày Sinh</th>
                                                @if (Auth::user()->role == 'Admin')
                                                <th class="w15">Xóa</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td class="w15">{{ $student->id_student }}</td>
                                            <td class="w50">{{ $student->first_name." ".$student->last_name }}</td>
                                            <td class="w20">{{ $student->dob }}</td>
                                            @if (Auth::user()->role == 'Admin')
                                            <td class="w15">
                                                <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}').submit()">
                                                    <i class="fa fa-trash-o icon-delete"></i>
                                                </a>
                                                <form method="POST" id="stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}" action="{{ url("/students_courses/{$student->id_student}-{$student->id_course}") }}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @else
                                <div>
                                    <h5>Lớp chưa có học viên</h5>
                                    <div class="card-title-block">
                                        <a class="left" href="{{ url("/students_courses/create/{$id_course}") }}" name="create"><img src="{{ asset('assets/img/icon-plus.png') }}" style="max-width: 45px" alt=""><span style="font-size:20px">Thêm học viên</span></a>
                                    </div>
                                </div>
                            </section>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection