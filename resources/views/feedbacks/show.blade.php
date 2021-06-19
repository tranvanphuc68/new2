
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="feedback">
        <div class="card">
            <h1 class="text-IBM">Feedback khóa học {{ $course[0]->name }}</h1>
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
                                                        <th class="w5">ID</th>
                                                        <th class="w20">Tên Học Viên</th>
                                                        <th class="w10">Ngày Sinh</th>
                                                        <th>Feedback</th>
                                                    </tr>
                                                </thead>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td class="w5">{{ $student->id_student }}</td>
                                                        <td class="w20">{{ $student->first_name." ".$student->last_name }}</td>
                                                        <td class="w10">{{ $student->dob }}</td>
                                                        <td><p class="over_flow">{{ $student->feedback }}</p></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    @else
                                        <p>{{ $feedbacks[0]->feedback}}</p>
                                        @if ($feedbacks[0]->status == 3)
                                            <p class="mt-3" class="right">
                                                <a href="{{ url("/feedbacks/edit/{$id_course}") }}">
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
                    <div>
                        <button><a href="{{ url('/feedbacks') }}">Back</a></button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection
