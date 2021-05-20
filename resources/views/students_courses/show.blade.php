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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                            @if (count($students) != 0)
                                <div style="text-align: right;" class="mb-3">
                                    <a class="btn btn-primary" href="{{ url("/students_courses/create/{$students[0]->id_course}") }}">Thêm Học Viên</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Mã Học Viên</th>
                                                <th>Tên Học Viên</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->id_student }}</td>
                                                <td>{{ $student->fullname }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}').submit()" class="btn btn-primary">Xóa</a>
                                                    <form method="POST" id="stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}" action="{{ url("/students_courses/{$student->id_student}-{$student->id_course}") }}" >
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @else 
                                <div>
                                    <a class="form-control" href="{{ url("/students_courses/create/{$id_course}") }}">Thêm Học Viên</a>
                                    <h1>Lớp chưa có học viên</h1>
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