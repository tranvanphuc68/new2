@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="card">
        <h3 class="text-IBM" > Thông tin học viên ID : {{ $user->id }}</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-block ">
                <img style="max-width: 200px" class="mb-3" src="{{ asset("/uploads/avatars/$user->avatar") }}">
                <table class="table">
                    <tr>
                        <td style="width: 25%">ID:</td>
                        <td> {{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Họ tên:</td>
                        <td>{{ $user->first_name." ".$user->last_name }}</td>
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
                        <td>  {{ $user->account }}</td>
                    </tr>
                    <tr>
                        <td>Trình độ học vấn:</td>
                        <td> {{ $user->academic_level }}</td>
                    </tr>
                    <tr>
                        <td>Nơi làm việc:</td>
                        <td> {{ $user->accomplishment }}</td>
                    </tr>
                </table>
                <div class="right">
                    <a href='{{ url("/users/student/{$user->id}/edit") }}' class="btn btn-primary">Thay đổi thông tin</a>
                </div>
            </div>
        </div>
    </div>
    
</article>

@endsection