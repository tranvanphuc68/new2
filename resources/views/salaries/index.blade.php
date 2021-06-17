
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
                            <section class="example">
                                <div class="table-responsive">
                                    @if (Auth::user()->role == 'Teacher')
                                        <div class="card-title-block">
                                            <form method="GET" style="text-align: right">
                                                <div class="input-container">
                                                    <i class="fa fa-search"></i>
                                                    <input type="text" name="searchCourse" placeholder="Search">
                                                    <div class="underline"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w10">ID</th>
                                                    <th class="w50">Tên Khóa Học</th>
                                                    <th class="w20">Lương</th>
                                                    <th class="w20">Tình Trạng</th>
                                                </tr>
                                            </thead>
                                            @foreach($salaries as $salary)
                                                <tr>
                                                    <td class="w10">{{ $salary->id }}</td>
                                                    <td class="w50">{{ $salary->name }}</td>
                                                    <td class="w20">{{ number_format($salary->salary, 0, ' ', ' ') }}</td>
                                                    <td class="w20"><?php echo $salary->status_salary == 0 ? 'Chưa nhận': 'Đã nhận'; ?></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                            <div style="text-align: right;">
                                                <h5>Tổng lương (đã nhận): {{ number_format($sum, 0, ' ', ' ') }}</p>
                                                <p>Số lượng (đã nhận): {{ $count }} / {{ count($salaries) }}</p>
                                            </div>
                                    @endif
                                    
                                    @if (Auth::user()->role == 'Admin')
                                        <div class="card-title-block">
                                            <form method="GET" style="text-align: right">
                                                <div class="input-container">
                                                    <i class="fa fa-search"></i>
                                                    <input type="text" name="searchTeacher" placeholder="Search">
                                                    <div class="underline"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w10">ID</th>
                                                    <th class="w50">Tên Giảng Viên</th>
                                                    <th class="w20">Ngày Sinh</th>
                                                    <th class="w20">Chi Tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td class="w10">{{ $teacher->id }}</td>
                                                    <td class="w50">{{ $teacher->first_name." ".$teacher->last_name }}</td>
                                                    <td class="w20">{{ $teacher->dob }}</td>
                                                    <td class="w20">
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
