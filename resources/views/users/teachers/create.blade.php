
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card col-md-12" style="padding: 0px;">
        <h1 class="text-IBM">Thêm giảng viên</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/users/teacher") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name" aria-describedby="helpId">
                    </div>
                    @error('first_name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name" aria-describedby="helpId">
                    </div>
                    @error('last_name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Giới tính</label>
                        <input type="radio" name="gender" value="Male" />
                        <label for="male">Nam</label>
                        <input type="radio" name="gender" value="Female" />
                        <label for="female">Nữ</label>
                    </div>
                    @error('gender')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="dob">Ngày sinh</label>
                        <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control" placeholder="Date of birth" aria-describedby="helpId">
                    </div>
                    @error('dob')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="hometown">Nơi sinh</label>
                        <input type="text" name="hometown" id="hometown" value="{{ old('hometown') }}" class="form-control" placeholder="Hometown" aria-describedby="helpId">
                    </div>
                    @error('hometown')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="id_card">Căn cước công dân</label>
                        <input type="text" name="id_card" id="id_card" value="{{ old('id_card') }}" class="form-control" placeholder="id card" aria-describedby="helpId">
                    </div>
                    @error('id_card')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone number" aria-describedby="helpId">
                    </div>
                    @error('phone')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="account">Số tài khoản</label>
                        <input type="text" name="account" id="account" value="{{ old('account') }}" class="form-control" placeholder="Account" aria-describedby="helpId">
                    </div>
                    @error('account')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="academic_level">Trình độ học vấn</label>
                        <input type="text" name="academic_level" id="academic_level" value="{{ old('academic_level') }}" class="form-control" placeholder="Academic level" aria-describedby="helpId">
                    </div>
                    @error('academic_level')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="accomplishment">Tài năng</label>
                        <input type="text" name="accomplishment" id="accomplishment" value="{{ old('accomplishment') }}" class="form-control" placeholder="accomplishment" aria-describedby="helpId">
                    </div>
                    @error('accomplishment')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email" aria-describedby="helpId">
                    </div>
                    @error('email')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId">
                    </div>
                    @error('password')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</article>

@endsection