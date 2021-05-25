<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo/INT.png') }}" rel="icon">
  <link href="{{ asset('assets/img/logo/INT.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;0,500;1,500&family=IBM+Plex+Serif:ital,wght@0,300;0,400;1,300&family=Noto+Serif+JP:wght@300;400;500&family=Pattaya&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="{{ url('/home') }}" style=" font-family: 'Pattaya', sans-serif ; font-size: 40px; color: #fff ; margin-left: 6px">Into</a>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/home') }}">Trang chủ</a></li>
          <li><a href="#about">Giới thiệu</a></li>
          <li><a href="#services">Khóa học</a></li>
          <li><a href="#testimonials">Học viên</a></li>
          <li><a href="#team">Giảng viên</a></li>
          <li><a href="#contact">Liên hệ</a></li>
          <li><a href="{{ url('/posts') }}">Diễn đàn</a></li>
          @if (Auth::check())
          <li class="profile dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ url("") }}" role="button" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle img" width="20%" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
              <span class="name"> {{ Auth::user()->fullname }} </span>
            </a>
            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
              <a class="dropdown-item" href="{{ url("/users/self_show") }} ">
                <i class="fa fa-user icon"></i> Profile </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-bell icon"></i> Notifications </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-gear icon"></i> Settings </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/logout')}}">
                <i class="fa fa-power-off icon"></i> Logout </a>
            </div>
          </li>
          @else
          <li>
            <a href="{{ url('login') }}">Đăng nhập</a>
          </li>
          @endif
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->