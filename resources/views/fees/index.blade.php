@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="fee">
        <div class="card">
            <h1 class="text-IBM">Học viên đăng kí</h1>
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
                                    <table class="table table-bordered table-hover">
                                        @if (Auth::user()->role == 'Student')
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>ID</th>
                                                    <th>Tên Khóa Học</th>
                                                    <th>Học Phí</th>
                                                    <th>Tình Trạng</th>
                                                </tr>
                                            </thead>
                                            @foreach($fees as $fee)
                                                <tr>
                                                    <td>{{ $fee->id_course }}</td>
                                                    <td>{{ $fee->name }}</td>
                                                    <td>{{ $fee->fee }}</td>
                                                    <td><?php echo $fee->status_fee == 0 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        @if (Auth::user()->role == 'Admin')
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>ID</th>
                                                    <th>Tên Khóa Học</th>
                                                    <th>Tình Trạng</th>
                                                    <th  style="width: 12%; text-align:center" >Chi Tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td>{{ $course->id }}</td>
                                                    <td>{{ $course->name }}</td>
                                                    <td><?php switch ($course->status) {
                                                                            case '1':
                                                                                echo 'Chưa Học';
                                                                                break;
                                                                            case '2':
                                                                                echo 'Đang Học';
                                                                                break;
                                                                            case '3':
                                                                                echo 'Đã Hoàn Thành';
                                                                                break; 
                                                                }?>
                                                    </td>
                                                    <td class="center">
                                                        <a href="{{ url("/fees/{$course->id}") }}">
                                                            <i class="fa fa-eye icon-view"></i>
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





