@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card">
        <h1 class="text-IBM" >Cập nhật thông tin học viên ID : {{ $user->id }}</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action="{{url("/users/student/$user->id")}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" aria-describedby="helpId" value="{{ $user->first_name }}">
                    </div>
                    @error('first_name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" aria-describedby="helpId" value="{{ $user->last_name }}">
                    </div>
                    @error('last_name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Giới tính</label>
                        <input type="radio" name="gender" id="male" value="Nam" @if(old('gender',$user->gender)=="Nam") checked @endif />
                        <label for="male">Nam</label>
                        <input type="radio" name="gender" id="female" value="Nữ" @if(old('gender',$user->gender)=="Nữ") checked @endif />
                        <label for="female">Nữ</label>
                    </div>
                    @error('gender')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="dob">Ngày sinh</label>
                        <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of birth" aria-describedby="helpId" value="{{ old('dob',$user->dob) }}">
                    </div>
                    @error('dob')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="hometown">Nơi sinh</label>
                        <input type="text" name="hometown" id="hometown" class="form-control" placeholder="Hometown" aria-describedby="helpId" value="{{ old('hometown',$user->hometown) }}">
                    </div>
                    @error('hometown')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="id_card">Căn cước công dân</label>
                        <input type="text" name="id_card" id="id_card" class="form-control" placeholder="id card" aria-describedby="helpId" value="{{ old('id_card',$user->id_card) }}">
                    </div>
                    @error('id_card')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId" value="{{ old('email',$user->email) }}">
                    </div>
                    @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" aria-describedby="helpId" value="{{ old('phone',$user->phone) }}">
                    </div>
                    @error('phone')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="account">Số tài khoản</label>
                        <input type="text" name="account" id="account" class="form-control" placeholder="Account" aria-describedby="helpId" value="{{ old('account',$user->account) }}">
                    </div>
                    @error('account')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="academic_level">Trình độ học vấn</label>
                        <input type="text" name="academic_level" id="academic_level" class="form-control" placeholder="Academic level" aria-describedby="helpId" value="{{ old('academic_level',$user->academic_level) }}">
                    </div>
                    @error('academic_level')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="accomplishment">Nơi làm việc</label>
                        <input type="text" name="accomplishment" id="accomplishment" class="form-control" placeholder="Work place" aria-describedby="helpId" value="{{ old('accomplishment',$user->accomplishment) }}">
                    </div>
                    @error('accomplishment')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                    <div class="right">
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</article>

@endsection