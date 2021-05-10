@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="title-block">
        <h3 class="title"> THÔNG TIN CHI TIẾT</h3>
    </div>
    <div class="card card-block sameheight-item">
    <div>ID: {{ $user->id }}</div>
    <div>Họ tên: {{ $user->name }}</div>
    <div>Giới tính: {{ $user->gender }}</div>
    <div> Ngày sinh: {{ $user->dob }}</div>
    <div> Nơi sinh: {{ $user->hometown }}</div>
    <div> Căn cước công dân: {{ $user->id_card }}</div>
    <div> Email: {{ $user->account }}</div>
    <div> Số điện thoại: {{ $user->phone }}</div>
    <div> Số tài khoản: {{ $user->email }}</div>
    <div> Trình độ học vấn: {{ $user->academic_level }}</div>
    </div>
</article>

@endsection