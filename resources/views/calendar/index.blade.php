
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card">
            @if (Auth::user()->role == "Teacher")
                <h1 class="text-IBM"> Lịch dạy </h1>
            @endif
            @if (Auth::user()->role == "Student")
                <h1 class="text-IBM"> Lịch học </h1>
            @endif
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div id='content' class="card-title-block res calender-block calender">
                                @foreach ($arr as $item)
                                    <div class="border border-secondary rounded calender-item">
                                        <h5>{{ $item }}</h5>
                                        @foreach ($data as $class)
                                            @if ($item == $class->date)
                                            <div class="border-top">
                                                <td>{{ $class->name }}|</td>
                                                <td>{{ $class->timetable }}</td>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection
