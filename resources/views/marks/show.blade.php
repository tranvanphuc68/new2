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
                                <div class="card-title-block">
                                    <form role="search" style="float:right">
                                        <div class="input-container">
                                            <i class="fa fa-search"></i>
                                            <input type="search" placeholder="Search">
                                            <div class="underline"></div>
                                        </div>
                                    </form>
                                </div>
                                @if (count($students) != 0)
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th class="w10">ID Học Viên</th>
                                                <th class="w40">Tên Học Viên</th>
                                                <th class="w25">Ngày Sinh</th>
                                                <th class="w25">Điểm</th>
                                            </tr>
                                        </thead>
                                        @foreach($students as $student)
                                        <tr>
                                            <td class="w10">{{ $student->id_student }}</td>
                                            <td class="w40">{{ $student->first_name." ".$student->last_name }}</td>
                                            <td class="w25">{{ $student->dob }}</td>
                                            <td class="w25">{{ $student->mark }}</td>
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