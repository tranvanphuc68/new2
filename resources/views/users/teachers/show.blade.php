@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="title-block">
        <h3 class="title"> THÔNG TIN CHI TIẾT GIẢNG VIÊN ID {{ $user->id }}     </h3>
    </div>
    <div class="card card-block sameheight-item">
        <img style="max-width: 200px" class="mb-3" src="{{ asset('assets/img/team/team-1.jpg') }}" alt="">
        <table class="table">
            <tr>
                <td style="width: 25%">ID:</td>
                <td> {{ $user->id }}</td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td>{{ $user->fullname }}</td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>{{ $user->gender }}</td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td>{{ $user->dob }}</td>
            </tr>
            <tr>
                <td>Nơi sinh:</td>
                <td> {{ $user->hometown }}</td>
            </tr>
            <tr>
                <td>Căn cước công dân:</td>
                <td> {{ $user->id_card }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td> {{ $user->email }}</td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td> {{ $user->phone }}</td>
            </tr>
            <tr>
                <td>Số tài khoản:</td>
                <td>  {{ $user->email }}</td>
            </tr>
            <tr>
                <td>Trình độ học vấn:</td>
                <td> {{ $user->academic_level }}</td>
            </tr>
        </table>
        <a href='{{ url("/users/teacher/{$user->id}/edit") }}' class="btn btn-primary">Thay đổi thông tin</a>
    </div>
</article>

@endsection