
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="teacher">
        <div class="title-block">
            <h1 class="title"> DANH SÁCH GIẢNG VIÊN </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a href="{{ url("/users/teacher/create") }}" class="btn btn-primary">THÊM GIẢNG VIÊN</a>
                                <form role="search" style="text-align: right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Họ tên</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                                <th>Email</th>
                                                <th>Sdt</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        @foreach($teachers as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->dob }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                <a href='{{ url("/users/teacher/{$user->id}") }}' class="btn btn-primary">Xem</a>
                                                <a href='{{ url("/users/teacher/{$user->id}/edit") }}' class="btn btn-primary">Sửa</a>
                                                <a href="javascript:void(0)" onclick="document.getElementById('user-delete-{{ $user->id }}').submit()" class="btn btn-primary">Xóa</a>
                                                <form method="POST" id="user-delete-{{ $user->id }}" action="{{ url("/users/teacher/{$user->id}") }}" >
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
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