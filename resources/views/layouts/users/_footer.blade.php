<footer class="footer">
    <div class="footer-block buttons">

    </div>
    <div class="footer-block author">
        <ul>
            <li> created by <a href="">ModularCode</a>
            </li>
            <li>
                <a href="">get in touch</a>
            </li>
        </ul>
    </div>
</footer>

<div class="modal fade" id="index" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url("/users") }}" method="POST" enctype="multipart/form-data" name="insert" role="form">
                    <!-- @csrf -->
                    <div class="form-group">
                        <label for="avatar">avatar</label>
                        <div> <input type="file" name="avatar"> </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Username" aria-describedby="helpId">
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
                        <label for="accomplishment">Tài năng</label>
                        <input type="text" name="accomplishment" id="accomplishment" class="form-control" placeholder="accomplishment" aria-describedby="helpId">
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
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở về</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="title-block">
                    <h3 class="title"> THÔNG TIN CHI TIẾT</h3>
                </div>
                <div class="card card-block sameheight-item">
                    <div id="id">ID: <span ></span></div>
                    <div id="fullname">Họ tên: <span ></span></div>
                    <div id="gender">Giới tính: <span ></span></div>
                    <div id="dob"> Ngày sinh: <span> </span></div>
                    <div id="hometown"> Nơi sinh: <span></span></div>
                    <div id="id_card"> Căn cước công dân: <span></span></div>
                    <div id="email"> Email: <span> </span></div>
                    <div id="phone"> Số điện thoại:<span></span> </div>
                    <div id="account"> Số tài khoản: <span> </span></div>
                    <div id="academic_level"> Trình độ học vấn:<span></span> </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action=""  name="edit" method="POST" enctype="multipart/form-data"  role="form">
                    <!-- @csrf -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="avatar">avatar</label>
                        <div> <input type="file" name="avatar"> </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Username" aria-describedby="helpId">
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
                        <label for="accomplishment">Tài năng</label>
                        <input type="text" name="accomplishment" id="accomplishment" class="form-control" placeholder="accomplishment" aria-describedby="helpId">
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
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở về</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-80463319-4', 'auto');
    ga('send', 'pageview');
</script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(function() {
        // $(document).on('click', "li a", function() {
        //     $('this').parent().addClass('active open')
        // })

        function refreshPage() {
            $.ajax({
                //gửi request lên url index.php với controller và action tương ứng
                url: 'users',
                method: 'GET',
                //nếu thành công thì xoá nội dung trong <tbody> và append nội dung ajax vào <table>
                success: function(res) {
                    $('.content-users').html(res);
                },
                error: function(err) {
                    console.error(err)
                }
            });
        }

        $(document).on('click', "a[name='view']", function() {
                const id = $(this).data('id');
                $.ajax({
                    url: 'users/' + id,
                    method: 'GET',
                }).done(function(res) {
                    const result = JSON.parse(res);
                    $("#view").modal('show')
                    $("#id span").text(result.id)
                    $("#fullname span").text(result.fullname)
                    $("#gender span").text(result.gender)
                    $("#dob span").text(result.dob)
                    $("#hometown span").text(result.hometown)
                    $("#id_card span").text(result.id_card)
                    $("#account span").text(result.account)
                    $("#phone span").text(result.phone)
                    $("#email span").text(result.email)
                    $("#academic_level span").text(result.academic_level)
                }).fail(function(err) {

                });
            } );
        $(document).on('click', "a[name='index']", function() {
            const name = $(this).data('name');
            $.ajax({
                async: true,
                url: 'users?name=' + name,
                method: 'GET',
            }).done(function(res) {
                $('.content-users').html(res);
            }).fail(function(err) {
                console.error(err)
            });
        });

        $(document).on('click', "a[name='create']", function() {
            $("#index").modal('show')
            $("form[name='insert']").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    async: true,
                    url: 'users',
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        fullname: $("input[name='fullname']").val(),
                        gender: $("input[name='gender']").val(),
                        dob: $("input[name='dob']").val(),
                        hometown: $("input[name='hometown']").val(),
                        id_card: $("input[name='id_card']").val(),
                        academic_level: $("input[name='academic_level']").val(),
                        accomplishment: $("input[name='accomplishment']").val(),
                        account: $("input[name='account']").val(),
                        phone: $("input[name='phone']").val(),
                        email: $("input[name='email']").val(),
                        password: $("input[name='password']").val(),
                        role: $('input[name="role"]:checked').val()
                    }
                }).done(function(res) {
                    $("#index").modal('hide');
                }).fail(function(err) {
                    console.error(err);
                });
            })
        });


        $(document).on('click', "a[name='edit']", function() {
            $("#edit").modal('show')
            const id = $(this).data('id');
            $("form[name='edit']").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    async: true,
                    url: 'users/' + id,
                    method: 'put',
                    data: {
                        _token: "{{ csrf_token() }}",
                        fullname: $("input[name='fullname']").val(),
                        gender: $("input[name='gender']").val(),
                        dob: $("input[name='dob']").val(),
                        hometown: $("input[name='hometown']").val(),
                        id_card: $("input[name='id_card']").val(),
                        academic_level: $("input[name='academic_level']").val(),
                        accomplishment: $("input[name='accomplishment']").val(),
                        account: $("input[name='account']").val(),
                        phone: $("input[name='phone']").val(),
                        email: $("input[name='email']").val(),
                        password: $("input[name='password']").val(),
                        role: $('input[name="role"]:checked').val()
                    }
                }).done(function(res) {
                    $("#index").modal('hide');
                }).fail(function(err) {
                    console.error(err);
                });
            })
        });


        $(document).on('click', "a[name='delete']", function() {
                const id = $(this).data('id');
                
                if (confirm('Bạn có chắc???')) {
                    $.ajax({
                        url: 'users/' + id,
                        method: 'delete',
                        data: {
                        _token: "{{ csrf_token() }}"
                        }
                        
                    }).done(function(res) {
                        
                
                    }).fail(function(err) {
                        console.error(err);
                    })
                }

            });

    })
</script>
</body>

</html>