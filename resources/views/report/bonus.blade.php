@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card">
            <h1 class="text-IBM"> Danh sách học viên xuất sắc </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="table-primary">
                                            <th class="w10">ID Học Viên</th>
                                            <th class="w40">Tên Học Viên</th>
                                            <th class="w25">Khóa học</th>
                                            <th class="w25">Điểm</th>
                                        </tr>
                                    </thead>
                                    @foreach($res as $item)
                                    @foreach($item as $course)
                                    @foreach($course as $student)
                                    <tr>
                                        <td class="w10">{{ $student->id }}</td>
                                        <td class="w40">{{ $student->first_name." ".$student->last_name }}</td>
                                        <td class="w25">{{ $student->name }}</td>
                                        <td class="w25">{{ number_format(("$student->mark"),1,'.','') }}</td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</article>
@endsection