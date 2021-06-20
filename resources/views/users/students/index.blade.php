@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="card">
            <h1 class="text-IBM">Danh sách học viên</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block" id="create">
                                <a class="d-left" href="{{ url("/users/student/create") }}" ><img src="{{ asset('assets/img/icon-plus.png') }}" class="mw-45" alt=""><span class="fz-24">Thêm học viên</span></a>
                                <form method="GET" class="right">
                                    <div class="input-container">
                                        <input type="text" class="search" name="search" placeholder="Search by last name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th class="w5">ID</th>
                                                <th class="w20">Họ Tên</th>
                                                <th class="w10">Giới Tính</th>
                                                <th class="w15">Ngày Sinh</th>
                                                <th class="w20">Email</th>
                                                <th class="w15">SĐT</th>
                                                <th class="w15">Chức Năng</th>
                                            </tr>
                                        </thead>
                                        @foreach($students as $user)
                                        <tr>
                                            <td class="w5">{{ $user->id }}</td>
                                            <td class="w20">{{ $user->first_name." ".$user->last_name }}</td>
                                            <td class="w10">{{ $user->gender }}</td>
                                            <td class="w15">{{ $user->dob }}</td>
                                            <td class="w20">{{ $user->email }}</td>
                                            <td class="w15">{{ $user->phone }}</td>
                                            <td class="center">
                                                <a href='{{ url("/users/student/{$user->id}") }}'>
                                                    <i class="fa fa-eye icon-view"></i>
                                                </a>
                                                <a href='{{ url("/users/student/{$user->id}/edit") }}'>
                                                    <i class="fa fa-pencil icon-edit"></i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('user-delete-{{ $user->id }}').submit()">
                                                    <i class="fa fa-trash-o icon-delete"></i>
                                                </a>
                                                <form method="POST" id="user-delete-{{ $user->id }}" action="{{ url("/users/student/{$user->id}") }}" >
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    {{ $students->links('') }}
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