<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forum - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Forum - Responsive HTML5 Template">
    <meta name="author" content="Forum">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo/INT.png') }}" rel="icon" >
    <link href="{{ asset('assets/img/logo/INT.png') }}" rel="apple-touch-icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;0,500;1,500&family=IBM+Plex+Serif:ital,wght@0,300;0,400;1,300&family=Noto+Serif+JP:wght@300;400;500&family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/forum.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style_test.css') }}" >
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
<header id="tt-header" class="bg-info">
    <div class="container">
        <div class="row tt-row no-gutters">
            <div class="col-auto">
                <!-- toggle mobile menu -->
                <a class="toggle-mobile-menu" href="#">
                    <svg class="tt-icon">
                      <use xlink:href="#icon-menu_icon"></use>
                    </svg>
                </a>
                <!-- /toggle mobile menu -->
                <!-- logo -->
                <div class="tt-logo">
                    <a href="{{ url('/posts') }}" style=" font-family: 'Pattaya', sans-serif ; color: #fff; font-size: 40px; ; margin-left: 6px" >Into</a>
                </div>
                <!-- desctop menu -->
                 <div class="tt-desktop-menu">
                    <nav>
                        <ul>
                            <!-- Home -->
                            <li>
                                <a href="{{ url('/home') }}">
                                  <i class="fa fa-home"><span> Home </span></i>
                                </a>
                            </li>
                            @if (Auth::check())
                                <li>
                                  <a href="{{ url('/') }}"> 
                                    <i class="fa fa-dashboard" style="font-size:13px">
                                      @if (Auth::user()->role == "Admin") <span> Admin </span> @endif 
                                      @if (Auth::user()->role == "Teacher") <span> Teacher </span> @endif 
                                      @if (Auth::user()->role == "Student") <span> Student </span> @endif 
                                    </i> 
                                  </a>
                                </li>
                                <!-- New post -->
                                <li>
                                    <a href="{{ url('/posts/create') }}"> <i class="fa fa-plus" style="font-size:13px"> <span>New post</span> </i> </a>
                                </li>
                                <!-- Manage reportes posts -->
                                @if (Auth::user()->role == "Admin")
                                    <li>
                                        <a href="{{ url('/report_posts') }}">
                                            <i class="fa fa-bell-o" style="text-transform: uppercase;"> <span>Reported posts</span></i>
                                            <sup>
                                            <span class="counter">{{ $countPostHadBeenReported }}</span>
                                        </sup>
                                        </a>
                                    </li>
                                @endif
                            @endif

                            <li>
                                <a href="page-single-user.html"><span>Pages</span></a>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="page-single-topic.html">Single Topic</a></li>
                                    <li><a href="page-create-topic.html">Create Topic</a></li>
                                    <li><a href="page-single-user.html">Single User Activity</a></li>
                                    <li><a href="page-single_threads.html">Single User Threads</a></li>
                                    <li><a href="page-single_replies.html">Single User Replies</a></li>
                                    <li><a href="page-single_followers.html">Single User Followers</a></li>
                                    <li><a href="page-single_categories.html">Single User Categories</a></li>
                                    <li><a href="page-single_settings.html">Single User Settings</a></li>
                                    <li><a href="page-signup.html">Sign up</a></li>
                                    <li><a href="page-login.html">Log in</a></li>
                                    <li><a href="page-categories.html">Categories</a></li>
                                    <li><a href="page-categories-single.html">Single Category</a></li>
                                    <li><a href="page-tabs.html">About</a></li>
                                    <li><a href="page-tabs_guidelines.html">Guidelines</a></li>
                                    <li><a href="_demo_modal-advancedSearch.html">Advanced Search</a></li>
                                    <li><a href="error404.html">Error 404</a></li>
                                    <li><a href="_demo_modal-age-confirmation.html">Age Verification</a></li>
                                    <li><a href="_demo_modal-level-up.html">Level up Notification</a></li>
                                    <li><a href="messages-page.html">Message</a></li>
                                    <li><a href="messages-compose.html">Message Compose</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /desctop menu -->
                <!-- tt-search -->
                <div class="tt-search">
                    <!-- toggle -->
                    <button class="tt-search-toggle" data-toggle="modal" data-target="#modalAdvancedSearch">
                       <svg class="tt-icon">
                          <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <!-- /toggle -->
                    <form class="search-wrapper">
                        <div class="search-form">
                            <input type="text" class="tt-search__input" placeholder="Search">
                            <button class="tt-search__btn" type="submit">
                               <svg class="tt-icon">
                                  <use xlink:href="#icon-search"></use>
                                </svg>
                            </button>
                             <button class="tt-search__close">
                               <svg class="tt-icon">
                                  <use xlink:href="#cancel"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="search-results">
                            <div class="tt-search-scroll">
                                <ul>
                                    <li>
                                        <a href="page-single-topic.html">
                                            <h6 class="tt-title">Rdr2 secret easter eggs</h6>
                                            <div class="tt-description">
                                               Here’s what I’ve found in Red Dead Redem..
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="page-single-topic.html">
                                            <h6 class="tt-title">Top 10 easter eggs in Red Dead Rede..</h6>
                                            <div class="tt-description">
                                                You can find these easter eggs in Red Dea..
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="page-single-topic.html">
                                            <h6 class="tt-title">Red Dead Redemtion: Arthur Morgan..</h6>
                                            <div class="tt-description">
                                                Here’s what I’ve found in Red Dead Redem..
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-single-topic.html">
                                            <h6 class="tt-title">Rdr2 secret easter eggs</h6>
                                            <div class="tt-description">
                                               Here’s what I’ve found in Red Dead Redem..
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="page-single-topic.html">
                                            <h6 class="tt-title">Top 10 easter eggs in Red Dead Rede..</h6>
                                            <div class="tt-description">
                                                You can find these easter eggs in Red Dea..
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="page-single-topic.html">
                                            <h6 class="tt-title">Red Dead Redemtion: Arthur Morgan..</h6>
                                            <div class="tt-description">
                                                Here’s what I’ve found in Red Dead Redem..
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="tt-view-all" data-toggle="modal" data-target="#modalAdvancedSearch">Advanced Search</button>
                        </div>
                    </form>
                </div>
                <!-- /tt-search -->
            </div>
            <div class="col-auto ml-auto">
                <div class="tt-account-btn">
                    <a href="page-login.html" class="btn btn-primary">Log in</a>
                    <a href="page-signup.html" class="btn btn-secondary">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</header>



