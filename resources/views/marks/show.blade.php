
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="fee">
        <div class="card">
            <h1 class="text-IBM">Khóa học {{ $students[0]->name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">   
                                @if (Auth::user()->role == 'Teacher')
                                    <div class="mb-3">
                                        <a class="btn btn-primary" href="{{ url("/marks/edit/{$students[0]->id_course}") }}">Cập nhật điểm</a>
                                    </div>
                                @endif                
                                @if (count($students) != 0)
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>ID Học Viên</th>
                                                <th>Tên Học Viên</th>
                                                <th>Ngày Sinh</th>
                                                <th>Điểm</th>
                                            </tr>
                                        </thead>
                                        @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->id_student }}</td>
                                                <td>{{ $student->first_name." ".$student->last_name }}</td>
                                                <td>{{ $student->dob }}</td>
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