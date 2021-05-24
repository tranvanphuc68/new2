
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="feedback">
        <div class="card">
            <h1 class="text-IBM">Feedback khóa học {{ $students[0]->name }}</h1>
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
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th>ID</th>
                                                        <th>Tên Học Viên</th>
                                                        <th>Ngày Sinh</th>
                                                        <th>Feedback</th>
                                                    </tr>
                                                </thead>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td>{{ $student->id_student }}</td>
                                                        <td>{{ $student->fullname }}</td>
                                                        <td>{{ $student->dob }}</td>
                                                        <td>{{ $student->feedback }}</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    @else
                                        <p>{{ $feedback[0]->feedback}}</p>
                                        @if ($feedback[0]->status == 3)
                                            <p class="mt-3" style="text-align: right;">
                                                <a href="{{ url("/feedbacks/edit/{$feedback[0]->id_course}") }}">
                                                    <i class="fa fa-pencil icon-edit"></i>
                                                </a>
                                            </p>
                                        @endif 
                                    @endif
                                @else
                                    <h3>Null</h3>
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