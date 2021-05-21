
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
                            <div class="card-title-block">
                                <form role="search" style="text-align: right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        @if (Auth::user()->role == 'Teacher')
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Khóa Học</th>
                                                    <th>Tình Trạng</th>
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
                                                    <th>Tên Giảng Viên</th>
                                                    <th>Chi Tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td>{{ $teacher->id }}</td>
                                                    <td>{{ $teacher->fullname }}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ url("/salaries/{$teacher->id}") }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
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
