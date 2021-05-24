
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card col-md-12" style="padding: 0px;">
            <h1 class="text-IBM"> Điểm danh ngày {{ $today }} </h1>
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
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
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
                                                <td  style="display: flex;  justify-content: space-around;">
                                                    <a href="{{ url("/attendance/{$data->id_course}-{$data->number}") }}">
                                                        <img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt="">
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
