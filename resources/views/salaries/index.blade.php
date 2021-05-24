
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="salary">
        <div class="card">
            <h1 class="text-IBM">Lương của giảng viên</h1>
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
                                    @if (Auth::user()->role == 'Teacher')
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>ID</th>
                                                    <th>Tên Khóa Học</th>
                                                    <th>Lương</th>
                                                    <th>Tình Trạng</th>
                                                </tr>
                                            </thead>
                                            @foreach($salaries as $salary)
                                                <tr>
                                                    <td>{{ $salary->id }}</td>
                                                    <td>{{ $salary->name }}</td>
                                                    <td>{{ $salary->salary }}</td>
                                                    <td><?php echo $salary->status_salary == 0 ? 'Chưa nhận': 'Đã nhận'; ?></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                            <div style="text-align: right;">
                                                <h5>Tổng lương (đã nhận): {{ $sum }}</p>
                                                <p>Số lượng (đã nhận): {{ $count }} / {{ count($salaries) }}</p>
                                            </div>
                                    @endif
                                    
                                    @if (Auth::user()->role == 'Admin')
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>ID</th>
                                                    <th>Tên Giảng Viên</th>
                                                    <th>Ngày Sinh</th>
                                                    <th>Chi Tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td>{{ $teacher->id }}</td>
                                                    <td>{{ $teacher->fullname }}</td>
                                                    <td>{{ $teacher->dob }}</td>
                                                    <td>
                                                        <a href="{{ url("/salaries/{$teacher->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    @endif
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
