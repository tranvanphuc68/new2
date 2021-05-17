
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title"> Lương của giảng viên {{ $salaries[0]->fullname }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Khóa học</th>
                                                <th>Lương</th>
                                                <th>Tình trạng</th>
                                            </tr>
                                        </thead>
                                        @foreach ($salaries as $salary)
                                            <tr>
                                                <td>{{ $salary->id }}</td>
                                                <td>{{ $salary->name }}</td>
                                                <td>{{ $salary->salary }}</td>
                                                <td><?php echo $salary->status_salary == 0 ? 'Chưa nhận': 'Đã nhận'; ?></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div style="text-align: right;">
                                    <a class="btn btn-primary" href="{{ url("/salaries/edit/{$salaries[0]->id_teacher}") }}">CẬP NHẬT LƯƠNG</a>
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