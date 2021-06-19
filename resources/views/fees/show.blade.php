@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="card">
            <h1 class="text-IBM"> Học viên đăng kí lớp : {{ $course[0]->name }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a class="d-left" href="{{ url("/fees/edit/{$students[0]->id_course}") }}"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Cập nhật học phí</span></a>
                                <form role="search" class="right">
                                    <div class="input-container">
                                        <input type="text" class="search" name="search" placeholder="Search by last name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
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
                                                <th class="w5">ID</th>
                                                <th class="w40">Tên Học Sinh</th>
                                                <th class="w20">Ngày Sinh</th>
                                                <th class="w20">Học phí</th>
                                                <th class="w15">Tình trạng</th>
                                            </tr>
                                        </thead>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td class="w5">{{ $student->id_student }}</td>
                                            <td class="w40">{{ $student->first_name." ".$student->last_name }}</td>
                                            <td class="w20">{{ $student->dob }}</td>
                                            <td class="w20">{{ number_format($course[0]->fee, 0, ' ', ' ') }}</td>
                                            <td class="w15"><?php echo $student->status_fee == 0 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <div>Null</div>
                                    @endif
                                </div>
                                <div class="right">
                                    <h5>Tổng học phí (đã nộp): {{ number_format($sum, 0, ' ', ' ') }}</h5>
                                    <h5>Học viên đã nộp: {{ $count }} / {{ $countStu }}</h5>
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







