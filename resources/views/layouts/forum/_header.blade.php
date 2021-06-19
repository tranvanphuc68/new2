<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forum</title>
    <meta name="description" content="Forum">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo/INT.png') }}" rel="icon" >
    <link href="{{ asset('assets/img/logo/INT.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;0,500;1,500&family=IBM+Plex+Serif:ital,wght@0,300;0,400;1,300&family=Noto+Serif+JP:wght@300;400;500&family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    
    <!-- Summernote -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-audio.css') }}">
    <link href="{{ asset('vendor/tam-emoji/css/emoji.css') }}" rel="stylesheet">

    <link rel="stylesheet" id="blue-style" href="{{ asset('css/app-blue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}" >
    <link rel="stylesheet"  href="{{ asset('css/vendor.css') }}">
</head>
<body>
<!-- tt-mobile menu -->
<nav class="panel-menu" id="mobile-menu">
    <ul>

    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">
            Close
            <div class="tt-icon">
                <svg>
                  <use xlink:href="#icon-cancel"></use>
                </svg>
            </div>
        </div>
        <div class="mm-backbtn">Back</div>
    </div>
</nav>
<header id="tt-header">
    <div class="container">
        <div class="row tt-row">
            <div class="col-auto">
                <!-- toggle mobile menu -->
                <a class="toggle-mobile-menu" href="#">
                    <svg class="tt-icon text-white">
                      <use xlink:href="#icon-menu_icon"></use>
                    </svg>
                </a>
                <!-- /toggle mobile menu -->
                <!-- logo -->
                <a href="{{ url('/posts') }}" class="mr-lg-5">
                    <div class="tt-logo">
                        Into
                    </div>
                </a>
                <!-- /logo -->
                <!-- desktop menu -->
                 <div class="tt-desktop-menu">
                    <nav>
                        <ul class="font">
                            <!-- Home -->
                            <li>
                                <a href="{{ url('/home') }}">
                                    Home
                                </a>
                            </li>
                            @if (Auth::check())
                            <!-- User -->
                            <li>
                                <a href="{{ url('/') }}">
                                    @if (Auth::user()->role == "Admin")  Admin  @endif 
                                    @if (Auth::user()->role == "Teacher")  Teacher  @endif 
                                    @if (Auth::user()->role == "Student")  Student  @endif 
                                </a>
                            </li>
                            <!-- Manage reportes posts -->
                            @if (Auth::user()->role == "Admin")
                            <li>
                                <a href="{{ url('/report_posts') }}">
                                        Reported posts
                                        <sup>
                                            {{ $countPostHadBeenReported }}
                                        </sup>
                                </a>
                            </li>
                            @endif
            
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- /desctop menu -->
            </div>


            @if (Auth::check())
            <!-- User=>profile + logout -->
            <div class="col-auto ml-auto">
                <div class="tt-user-info d-flex justify-content-center">
                    <a class="nav-link dropdown-toggle" style="padding: 13px 15px;" data-toggle="dropdown" href="{{ url("") }}" role="button" aria-haspopup="true" aria-expanded="false">
                      <img class="rounded-circle img" width="40px" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                      <span class="name"> {{ Auth::user()->fullname }} </span>
                    </a>
                    <div class="dropdown-menu profile-dropdown-menu bg-blue" aria-labelledby="dropdownMenu1">
                      <a class="dropdown-item text-white mb-2" href="{{ url("/users/self_show") }} ">
                        <i class="fa fa-user icon"></i> Profile </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-white" href="{{url('/logout')}}">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                    </div>
                </div>
                <!-- /User=>profile + logout -->   
                @endif

                @if (!Auth::check())
                <!-- Login -->
                <div class="col-auto ml-auto">
                    <div class="tt-user-info d-flex justify-content-center">
                        <div class="tt-account-btn">
                            <a href="{{ url('/login') }}"> <span class="text-white">Login</span> </a>
                        </div>
                    </div>
                </div>
                @endif
           </div>
        </div>
    </div>
</header>