
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="salary">
        <div class="card">
            <h1 class="text-IBM"> Lương của giảng viên {{ $salaries[0]->first_name." ".$salaries[0]->last_name }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a style="float:left" href="{{ url("/salaries/edit/{$salaries[0]->id_teacher}") }}" name="edit"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Cập nhật lương</span></a>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>ID</th>
                                                <th>Tên Khóa Học</th>
                                                <th>Lương</th>
                                                <th>Tình Trạng</th>
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
                                    <h5>Tổng lương (đã trả): {{ $sum }}</p>
                                    <p>Số lượng (đã nhận): {{ $count }} / {{ count($salaries) }}</p>
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