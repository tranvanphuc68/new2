@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="title-block">
        <h1 class="title">SỬA THÔNG TIN GIẢNG VIÊN </h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-9">
            <div class="card card-block sameheight-item">
                <form action="{{url("/users/teacher/$user->id")}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h1 class="form-control btn btn-primary">Cập nhật thông tin giảng viên</h1>
                    <div class="form-group">
                        <input type="file" name="avatar">
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" name="fullname" id="name" class="form-control" placeholder="Username" aria-describedby="helpId" value="{{ $user->fullname }}">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <input type="radio" name="gender" id="male" value="Male" <?php echo $user->gender == 'Male' ? 'checked' :'' ?> />
                        <label for="male">Nam</label>
                        <input type="radio" name="gender" id="female" value="Female" <?php echo $user->gender == 'Female' ? 'checked' :'' ?> />
                        <label for="female">Nữ</label>
                    </div>
                    <div class="form-group">
                        <label for="dob">Ngày sinh</label>
                        <input type="text" name="dob" id="dob" class="form-control" placeholder="Date of birth" aria-describedby="helpId" value="{{ $user->dob }}">
                    </div>
                    <div class="form-group">
                        <label for="hometown">Nơi sinh</label>
                        <input type="text" name="hometown" id="hometown" class="form-control" placeholder="Hometown" aria-describedby="helpId" value="{{ $user->hometown }}">
                    </div>
                    <div class="form-group">
                        <label for="id_card">Căn cước công dân</label>
                        <input type="text" name="id_card" id="id_card" class="form-control" placeholder="id card" aria-describedby="helpId" value="{{ $user->id_card }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" aria-describedby="helpId" value="{{ $user->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="account">Số tài khoản</label>
                        <input type="text" name="account" id="account" class="form-control" placeholder="Account" aria-describedby="helpId" value="{{ $user->account }}">
                    </div>
                    <div class="form-group">
                        <label for="academic_level">Trình độ học vấn</label>
                        <input type="text" name="academic_level" id="academic_level" class="form-control" placeholder="Academic level" aria-describedby="helpId" value="{{ $user->academic_level }}">
                    </div>

                    <button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
                    <button type="reset" class="btn btn-primary" name="exit">Thoát</button>
                </form>
            </div>
        </div>
    </div>


</article>

@endsection