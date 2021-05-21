
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="title-block">
            <h1 class="title"> ĐIỂM DANH NGÀY {{ $todayNow }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                            </div>
                            <section class="example">
                            @if (count($data) != 0)
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID_course</th>
                                                <th>Buổi</th>
                                                <th>Nội Dung</th>
                                                <th>Điểm Danh</th>
                                            </tr>
                                        </thead>
                                        @foreach($data as $data)
                                            <tr>
                                                <td>{{ $data->id_course }}</td>
                                                <td>{{ $data->number }}</td>
                                                <td>{{ $data->content }}</td>
                                                <td>
                                                    <a href="{{ url("/attendance/{$data->id_course}-{$data->number}") }}" class="btn btn-primary">
                                                        <i class="fa fa-check-circle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            @else
                                <h5>HÔM NAY K CÓ LỚP ĐIỂM DANH</h5>
                            @endif
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection
