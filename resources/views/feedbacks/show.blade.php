
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">FEEDBACKS KHÓA HỌC {{ $students[0]->name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">                   
                                @if (count($students) != 0)
                                    @if (Auth::user()->role == 'Admin' or Auth::user()->role == 'Teacher')
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tên Học viên</th>
                                                        <th>Feedback</th>
                                                    </tr>
                                                </thead>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td>{{ $student->id_student }}</td>
                                                        <td>{{ $student->fullname }}</td>
                                                        <td>{{ $student->feedback }}</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    @else
                                        <p>{{ $feedback[0]->feedback}}</p>
                                        @if ($feedback[0]->status == 3)
                                            <p class="mt-3" style="text-align: right;">
                                                <a class="btn btn-primary" href="{{ url("/feedbacks/edit/{$feedback[0]->id_course}") }}">Sửa</a>
                                            </p>
                                        @endif 
                                    @endif
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