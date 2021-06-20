<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Into</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/logo/INT.png') }}" rel="icon" >
        <link href="{{ asset('assets/img/logo/INT.png') }}" rel="apple-touch-icon">

        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet"  href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" id="blue-style" href="{{ asset('css/app-blue.css') }}">
        <link rel="stylesheet"  href="{{ asset('css/user.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;0,500;1,500&family=IBM+Plex+Serif:ital,wght@0,300;0,400;1,300&family=Noto+Serif+JP:wght@300;400;500&family=Pattaya&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header header-fixed">
                    <h1 class=""><a href=" {{ url('/') }}"><span class="text-Patt" style="font-size: 40px;">Into</span></a></h1>
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li>
                                <a href="{{ url('/home') }}" class="btn btn-sm header-btn">
                                    <i class="fa fa-home"></i>
                                    <span >Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/posts') }}" class="btn btn-sm header-btn">
                                    <i class="fa fa-comment"></i>
                                    <span >Diễn đàn</span>
                                </a>
                            </li>
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ url("") }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle img" width="20%" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                                    <span class="name"> {{ Auth::user()->first_name." ".Auth::user()->last_name }} </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="{{ url("/users/self_show") }} "> 
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/logout')}}">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>

