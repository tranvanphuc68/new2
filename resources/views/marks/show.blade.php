
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">Khóa học {{ $students[0]->name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">                   
                                @if (count($students) != 0)
                                    @if (Auth::user()->role == 'Teacher')
                                    <a class="btn btn-primary" href="{{ url("/marks/edit/{$students[0]->id_course}") }}">Cập nhật điểm</a>
                                    @endif
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Học viên</th>
                                                <th>Tên Học viên</th>
                                                <th>Điểm</th>
                                            </tr>
                                        </thead>
                                        @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->id_student }}</td>
                                                <td>{{ $student->fullname }}</td>
                                                <td>{{ $student->mark }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    </div>
                                @else
                                <p>Null</p>
                                @endif
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection