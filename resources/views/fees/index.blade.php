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
                                                    <th class="w10">ID</th>
                                                    <th class="w40">Tên Khóa Học</th>
                                                    <th class="w25">Học Phí</th>
                                                    <th class="w25">Tình Trạng</th>
                                                </tr>
                                            </thead>
                                            @foreach($fees as $fee)
                                                <tr>
                                                    <td class="w10">{{ $fee->id_course }}</td>
                                                    <td class="w40">{{ $fee->name }}</td>
                                                    <td class="w25">{{  number_format($fee->fee, 0, ' ', ' ') }}</td>
                                                    <td class="w25"><?php echo $fee->status_fee == 0 ? 'Chưa nộp' : 'Đã nộp'; ?></td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        @if (Auth::user()->role == 'Admin')
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w15">ID</th>
                                                    <th class="w40">Tên Khóa Học</th>
                                                    <th class="w30">Tình Trạng</th>
                                                    <th class="w15">Chi Tiết</th>
                                                </tr>
                                            </thead>
                                            @foreach($courses as $course)
                                                <tr>
                                                    <td class="w15">{{ $course->id }}</td>
                                                    <td class="w40">{{ $course->name }}</td>
                                                    <td class="w30"><?php switch ($course->status) {
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
                                                    <td class="w15">
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





