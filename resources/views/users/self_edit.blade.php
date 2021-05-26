@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card">
        <h1 class="text-IBM"> Cập nhật thông tin cá nhân</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <form action="{{url("/users/update_avt/$user->id")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <img style="border-radius: 7px;" class="mb-3" width="20%" src="{{ asset("/uploads/avatars/$user->avatar") }}">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="avatar">
                        </div>
                        <div class="col-md-6">
                            <button id="avt" type="submit" class="btn btn-primary">Lưu Avatar</button>
                        </div>
                    </div>
                </form>
                <form action="{{url("/users/self_edit/$user->id")}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" aria-describedby="helpId" value="{{ $user->first_name }}">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" aria-describedby="helpId" value="{{ $user->last_name }}">
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
                        <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of birth" aria-describedby="helpId" value="{{ $user->dob }}">
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
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>

// if ( window.history.replaceState ) {
//   window.history.replaceState( null, null, window.location.href );
// }
 
</script>
@endsection