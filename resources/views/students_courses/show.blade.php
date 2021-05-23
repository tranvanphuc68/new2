
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="students_courses">
        <div class="card">
            <h1 class="text-IBM"> Xem danh sách lớp {{ $course[0]->name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                            @if (count($students) != 0)
                                <div class="table-responsive">
                                    @if (Auth::user()->role == 'Admin')
                                        <div class="card-title-block">
                                            <a style="float:right" href="{{ url("/students_courses/create/{$students[0]->id_course}") }}" name="create"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Thêm học viên</span></a>
                                        </div>
                                    @endif
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
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
                                                        <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('stu_cou-delete-{{$student->id_student}}-{{$student->id_course}}').submit()">
                                                            <i class="fa fa-trash-o icon-delete"></i>
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
                                    <h3 class="text-IBM">Lớp chưa có học viên</h3>
                                    <div class="card-title-block">
                                        <a style="float:right" href="{{ url("/students_courses/create/{$id_course}") }}" name="create"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Thêm học viên</span></a>
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