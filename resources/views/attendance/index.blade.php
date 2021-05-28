
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
                                                <th class="w15">Tên Khóa Học</th>
                                                <th class="w5">Buổi</th>
                                                <th class="w15">Thời gian</th>
                                                <th style="text-align: center;" >Nội Dung</th>
                                                <th class="w10">Điểm Danh</th>
                                            </tr>
                                        </thead>
                                        @foreach($data as $data)
                                            <tr>
                                                <td class="w15">{{ $data->name }}</td>
                                                <td class="w5">{{ $data->number }}</td>
                                                <td class="w15">{{ $data->timetable }}</td>
                                                <td>{{ $data->content }}</td>
                                                <td class="center">
                                                    @if ( $data->status == 0 )
                                                        <a href="{{ url("/attendance/{$data->id_course}-{$data->number}") }}">
                                                            <img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 40px"alt="">
                                                        </a>
                                                    @else
                                                            <img src="{{ asset('assets/img/complete-icon.png') }}"  style = "max-width: 40px"alt="">
                                                    @endif
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
