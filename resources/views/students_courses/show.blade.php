
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title"> XEM DANH SÁCH LỚP {{ $course[0]->name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                            @if (count($students) != 0)
                                <div class="table-responsive">
                                    @if (Auth::user()->role == 'Admin')
                                        <div class="mb-3">
                                            <a class="btn btn-primary" href="{{ url("/students_courses/create/{$students[0]->id_course}") }}">Thêm Học Viên</a>
                                        </div>
                                    @endif
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Mã Học Viên</th>
                                                <th>Tên Học Viên</th>
                                                @if (Auth::user()->role == 'Admin')
                                                    <th>Xóa</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->id_student }}</td>
                                                <td>{{ $student->fullname }}</td>
                                                @if (Auth::user()->role == 'Admin')
                                                    <td>
                                                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}').submit()" class="btn btn-primary">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                        <form method="POST" id="stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}" action="{{ url("/students_courses/{$student->id_student}-{$student->id_course}") }}" >
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
                                    <h3>LỚP CHƯA CÓ HỌC VIÊN</h3>
                                    <div class="mt-3">
                                        <a class="btn btn-primary" href="{{ url("/students_courses/create/{$id_course}") }}">Thêm Học Viên</a>
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