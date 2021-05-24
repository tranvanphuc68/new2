@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="card">
            <h1 class="text-IBM"> Học viên đăng kí lớp : {{ $students[0]->name }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a style="float:left" href="{{ url("/fees/edit/{$students[0]->id_course}") }}"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Cập nhật học phí</span></a>
                                <form role="search" style="float:right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                @if (count($students) != 0)
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>ID</th>
                                                <th>Tên Học Sinh</th>
                                                <th>Ngày Sinh</th>
                                                <th>Học phí</th>
                                                <th>Tình trạng</th>
                                            </tr>
                                        </thead>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id_student }}</td>
                                            <td>{{ $student->fullname }}</td>
                                            <td>{{ $student->dob }}</td>
                                            <td>{{ $student->fee }}</td>
                                            <td><?php echo $student->status_fee == 0 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <div>Null</div>
                                    @endif
                                </div>
                                <div style="float: right;">
                                    <h5>Tổng học phí (đã nộp): {{ $sum }}</h5>
                                    <h5>Học viên đã nộp: {{ $count }} / {{ count($students) }}</h5>
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






