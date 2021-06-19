@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
        <p>2020</p>
        <a href="{{ url("/report/2020") }}">
            <i class="fa fa-eye icon-view"></i>
        </a>
        <p>2021</p>
        <a href="{{ url("/report/2021") }}">
            <i class="fa fa-eye icon-view"></i>
        </a>
@endsection