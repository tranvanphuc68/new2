<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" id="blue-style" href="{{ asset('css/app-blue.css') }}">
        <link rel="stylesheet"  href="{{ asset('css/user.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,400;0,500;1,500&family=IBM+Plex+Serif:ital,wght@0,300;0,400;1,300&family=Noto+Serif+JP:wght@300;400;500&family=Pattaya&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title" style="  display: flex; justify-content: center;">
                        <div class="logo">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> 
                        <span style=" font-family: 'Pattaya', sans-serif ; font-size: 40px; color: #52BCD3 ; margin-left: 6px">Into</span>
                    </h1>
                </header>
                <div class="auth-content">
                    <h3 class="text-center" style="font-weight: bold">Đăng nhập</h3>
                    <form id="login-form" action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control underlined" name="email" id="email" placeholder="Your email address" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password">
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('invalid')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="text-center">
                <a href="{{ url('home') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i> Back to Home </a>
            </div>
        </div>
    </div>
    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>


</body>
</html>