<article class="content responsive-tables-page">
    <div class="teacher">
        <div class="title-block">
            <h1 class="title"> DANH SÁCH <?php echo ($_GET['name'] == 'teachers') ? 'GIẢNG VIÊN' : 'HỌC SINH'?> </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                                <a href="javascript:void(0)" class="btn btn-primary" name="create">THÊM <?php echo ($_GET['name'] == 'teachers') ? 'GIẢNG VIÊN' : 'HỌC SINH'?></a>
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
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->dob }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                <a href="javascript:void(0)" data-id="<?php echo $user->id?>" class="btn btn-primary" name="view">Xem</a>
                                                <a href="javascript:void(0)" data-id="<?php echo $user->id?>" class="btn btn-primary" name="edit">Sửa</a>
                                                <a href="javascript:void(0)" data-id="<?php echo $user->id?>" class="btn btn-primary" name="delete">Xóa</a>
                                                <!-- <form action='{{ url("/users/$user->id") }}' method="POST" id="user-delete-{{ $user->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form> -->
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