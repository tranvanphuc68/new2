@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title"> HỌC PHÍ LỚP : {{ $students[0]->name }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a class="btn btn-primary" href="{{ url("/fees/edit/{$students[0]->id_course}") }}">CẬP NHẬT HỌC PHÍ</a>
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
                                @if (count($students) != 0)
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Học Sinh</th>
                                                <th>Học phí</th>
                                                <th>Tình trạng</th>
                                            </tr>
                                        </thead>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id_student }}</td>
                                            <td>{{ $student->fullname }}</td>
                                            <td>{{ $student->fee }}</td>
                                            <td><?php echo $student->status_fee == 0 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else
                                    <div>Null</div>
                                    @endif
                                </div>
                                <div style="text-align: right;">
                                    <h5>Tổng học phí (đã nhập): {{ $sum }}</h5>
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







