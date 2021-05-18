
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title"> CẬP NHẬT KHÓA HỌC </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <form method="POST" action="{{ action="{{ url("/students_courses/{$student_course->id_student}-{$student_course->id_course}") }}" }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="id_student">Mã Học Viên</label>
                                            <input type="text" name="id_student" id="id_student" class="form-control" placeholder="Mã học viên" aria-describedby="helpId" value="{{ $student_course->id_student }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="id_course">Mã Khóa Học</label>
                                            <input type="text" name="id_course" id="id_course" class="form-control" placeholder="Mã khóa học" aria-describedby="helpId" value="{{ $student_course->id_course }}">
                                        </div>
                                        <div style="text-align: right">
                                            <button class="btn btn-primary" type="submit"> Cập Nhật</button>
                                        </div>
                                    </form>
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