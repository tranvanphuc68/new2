<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/forum.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent bg-info">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <a href="index.html" class="text-white"><h1>Into</h1></a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
            @if (Auth::check())
              <!-- New post -->
              <li>
                <a href="{{ url('/posts/create') }}"> <i class="fa fa-plus" style="font-size:13px"> New Post </i> </a>
              </li>
            @endif

            <!-- Search -->
            <li>
              <a href="#search"> <i class="fa fa-search" style="font-size:13px"> Search </i> </a>
            </li>

            @if (Auth::check())
              <!-- Manage reportes posts -->
              @if (Auth::user()->role == "Admin")
                <li>
                  <a href="{{ url('/report_posts') }}">Manage reported posts</a>
                </li>
                <!-- Reported posts -->
                <li class="notifications new">
                    <a href="" data-toggle="dropdown">
                        <i class="fa fa-bell-o" style="text-transform: uppercase;"> Reported posts </i>
                        <sup>
                            <span class="counter">{{ $countPostHadBeenReported }}</span>
                        </sup>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="notifications-container">
                            
                                <li>
                                    <a href="" class="notification-item" style="color: black">
                                        <div class="img-col">
                                            <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p>
                                                <span class="accent">Zack Alien</span> pushed new commit: 
                                                <span class="accent">Fix page load performance issue</span>. 
                                            </p>
                                        </div>
                                    </a>
                                </li>
                        </ul>

                        <footer>
                            <ul>
                                <li>
                                    <a href=""  style="color: black;; text-align: center; "> View All </a>
                                </li>
                            </ul>
                        </footer>
                    </div>
                </li>
              @endif

              <!-- Notifications -->
              <li class="notifications new">
                <a href="" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <sup>
                        <span class="counter">8</span>
                    </sup>
                </a>
                <div class="dropdown-menu">
                    <ul class="notifications-container">
                        <li>
                            <a href="" class="notification-item" style="color: black">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Zack Alien</span> pushed new commit: 
                                        <span class="accent">Fix page load performance issue</span>. 
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification-item" style="color: black">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/img/team/team-1')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Amaya Hatsumi</span> started new task: 
                                        <span class="accent">Dashboard UI design.</span>. 
                                      </p>
                                </div>
                            </a>
                        </li>
                        <li style="color: black">
                            <a href="" class="notification-item" style="color: black">
                                <div class="img-col">
                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                </div>
                                <div class="body-col">
                                    <p>
                                        <span class="accent">Andy Nouman</span> deployed new version of 
                                        <span class="accent">NodeJS REST Api V3</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <footer>
                        <ul>
                            <li>
                                <a href=""  style="color: black;; text-align: center; "> View All </a>
                            </li>
                        </ul>
                    </footer>
                </div>
              </li>
            
              <!-- User=>profile + logout -->
              <li>
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::user()->avatar != '')
                      <img class="rounded-circle img" width="18px" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                    @endif

                    @if (Auth::user()->avatar == '' && Auth::user()->gender == 'Male')
                      <img class="rounded-circle img" width="18px" src="https://tse2.mm.bing.net/th?id=OIP.8wpigmkTKaGH42dEjT8eUwHaH6&pid=Api&P=0&w=300&h=300">
                    @endif

                    @if (Auth::user()->avatar == '' && Auth::user()->gender == 'Female')
                      <img class="rounded-circle img" width="18px" src="https://tse4.mm.bing.net/th?id=OIP.T2ILd2qLXwqlcImvKtXcGgAAAA&pid=Api&P=0&w=184&h=180">
                    @endif

                    <span> {{ Auth::user()->fullname }} </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu bg-primary" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="{{ url("/users/self_show") }} "> 
                        <i class="fa fa-user icon"></i> Profile </a>
                    <a class="dropdown-item" href="{{url('/logout')}}">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
              </li>
            @endif

            @if (!Auth::check())
              <!-- Login -->
              <li>
                <a href="{{ url('/login') }}">Login</a>
              </li>
            @endif
        </ul>
      </nav>
      <!-- .nav-menu -->

    </div>
  </header>
  <!-- End Header -->
