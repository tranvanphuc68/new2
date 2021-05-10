<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url("/users") }}" method="POST" enctype="multipart/form-data" name="insert">
                    @csrf
                    <div class="form-group">
                        <label for="avatar">avatar</label>
                        <div> <input type="file" name="avatar"> </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" name="fullname" id="name" class="form-control" placeholder="Username" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="gender">Giới tính</label>
                        <input type="text" name="gender" id="gender" class="form-control" placeholder="Gender" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="dob">Ngày sinh</label>
                        <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of birth" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="hometown">Nơi sinh</label>
                        <input type="text" name="hometown" id="hometown" class="form-control" placeholder="Hometown" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="id_card">Căn cước công dân</label>
                        <input type="text" name="id_card" id="id_card" class="form-control" placeholder="id card" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="account">Số tài khoản</label>
                        <input type="text" name="account" id="account" class="form-control" placeholder="Account" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="academic_level">Trình độ học vấn</label>
                        <input type="text" name="academic_level" id="academic_level" class="form-control" placeholder="Academic level" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="academic_level">Tài năng</label>
                        <input type="text" name="accomplishment" id="academic_level" class="form-control" placeholder="accomplishment" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="id_card">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="id_card">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId">
                    </div>


                    <input type="radio" name="role" value="Admin">Admin
                    <input type="radio" name="role" value="Teacher">Teacher
                    <input type="radio" name="role" value="Student">Student

                    <div>
                        <button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
                        <button type="reset" class="btn btn-primary" name="exit">Thoát</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>