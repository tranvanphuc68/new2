
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title">LƯƠNG CÁC GIẢNG VIÊN </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        @if (Auth::user()->role == 'Teacher')
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Khóa học</th>
                                                    <th>Tình trạng</th>
                                                </tr>
                                            </thead>
                                            @foreach($salaries as $salary)
                                                <tr>
                                                    <td>{{ $salary->id }}</td>
                                                    <td>{{ $salary->name }}</td>
                                                    <td><?php echo $salary->status_salary == 0 ? 'Chưa nhận': 'Đã nhận'; ?></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Giảng viên</th>
                                                    <th>Chi tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td>{{ $teacher->id }}</td>
                                                    <td>{{ $teacher->fullname }}</td>
                                                    <td><a class="btn btn-primary" href="{{ url("/salaries/{$teacher->id}") }}">SHOW</a></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
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
