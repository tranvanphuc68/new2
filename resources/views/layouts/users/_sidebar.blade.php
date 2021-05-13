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
                                </div> Admin
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="index.html">
                                        <i class="fa fa-home"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-group"></i> Quản lí người dùng<i class="fa arrow"></i>
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
                                            <a href=""> Lương của giảng viên </a>
                                        </li>
                                        <li>
                                            <a href=""> Học phí </a>
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
                        </nav>
                    </div>
                    
            </aside>

                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>

    