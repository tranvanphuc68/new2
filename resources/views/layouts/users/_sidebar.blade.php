    <aside class="sidebar">
        <div class="sidebar-container">
            <div class="sidebar-header">
                <div class="brand">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div>  
                </div>
            </div>
            <nav class="menu">
            @if (Auth::user()->role == 'Admin')
                <ul class="sidebar-menu metismenu" id="sidebar-menu">
                    <li class="active">
                        <a href="">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-group"></i> Quản lí người dùng <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ url("users/teacher") }}" name="teacher-link"> Giảng viên</a>
                            </li>
                            <li>
                                <a href="{{ url("users/student") }}" name="student-link"> Học sinh </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-th-large"></i> Quản lí lớp học<i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ url("/courses") }}" name="teacher-link"> Khóa học</a>
                            </li>
                            <li>
                                <a href="{{ url("/attendance") }}" name="student-link"> Điểm danh </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-building-o"></i> Quản lí tài chính <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ url("/salaries") }}"> Lương của giảng viên </a>
                            </li>
                            <li>
                                <a href="{{ url("/fees") }}"> Học viên đăng kí </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-table"></i> Báo cáo và thống kê <i class="fa arrow"></i>
                        </a>
                        <ul class="sidebar-nav">
                            <li>
                                <a href=""> Học sinh </a>
                            </li>
                            <li>
                                <a href=""> Khen thưởng  </a>
                            </li>
                            <li>
                                <a href=""> Tài chính  </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            @endif
            @if (Auth::user()->role == 'Teacher')
                <ul class="sidebar-menu metismenu" id="sidebar-menu">
                    <li class="active">
                        <a href="">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-building-o"></i> Các lớp đang dạy <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url("/attendance") }}">
                            <i class="fa fa-table"></i> Điểm danh <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-table"></i> Nhập điểm <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-table"></i> Lịch dạy <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-table"></i> Lương <i class="fa arrow"></i>
                        </a>
                    </li>

                </ul>
            @endif
            @if (Auth::user()->role == 'Student')
                <ul class="sidebar-menu metismenu" id="sidebar-menu">
                    <li class="active">
                        <a href="">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-group"></i> Các lớp đã đăng kí <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-th-large"></i> Điểm <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-th-large"></i> Điểm danh <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-th-large"></i> Lịch học <i class="fa arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-building-o"></i> Học phí <i class="fa arrow"></i>
                        </a>
                    </li>
                </ul>
            @endif
            </nav>
        </div>
        
</aside>

    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
    <div class="mobile-menu-handle"></div>

