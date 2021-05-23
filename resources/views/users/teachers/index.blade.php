
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="teacher">
        <div class="card">
            <h1 class="text-IBM">Danh sách giảng viên</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a style="float:right" href="{{ url("/users/teacher/create") }}"><img src="{{ asset('assets/img/icon-plus.png') }}"  style = "max-width: 45px"alt=""><span style="font-size:20px">Thêm giảng viên</span></a>
                                <form role="search" style="float:left">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>ID</th>
                                                <th>Họ Tên</th>
                                                <th>Giới Tính</th>
                                                <th>Ngày Sinh</th>
                                                <th>Email</th>
                                                <th>SĐT</th>
                                                <th>Chức Năng</th>
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
                                            <td style="display: flex;  justify-content: space-around;">
                                                <a href='{{ url("/users/teacher/{$user->id}") }}'>
                                                    <i class="fa fa-eye icon-view"></i>
                                                </a>
                                                <a href='{{ url("/users/teacher/{$user->id}/edit") }}'>
                                                    <i class="fa fa-pencil icon-edit"></i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="if (confirm('Bạn có chắc muốn xóa không?')) document.getElementById('user-delete-{{ $user->id }}').submit()">
                                                    <i class="fa fa-trash-o icon-delete"></i>
                                                </a>
                                                <form method="POST" id="user-delete-{{ $user->id }}" action="{{ url("/users/teacher/{$user->id}") }}" >
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    {{ $teachers->links('') }}
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