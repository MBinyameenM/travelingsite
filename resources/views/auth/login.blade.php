<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHCS</title>

    <style>

.card-body { box-shadow: 15px 15px 20px #69b4fd; }
.card-header { background: #69b4fd !important; color: white; }
.card { margin-top: 7%; }
</style>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/flaticon.cs') }}s" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/jquery-ui.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('template/css/style.css') }}" type="text/css">

    <!--  Font Awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/00ea28fa8f.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
<!--         <div class="header-configure-area">
            <div class="language-option">
                <img src="{{ asset('template/img/flag.jpg') }}" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div> -->
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ url('hotel') }}">Hotels</a></li>
                <li><a href="{{ url('about') }}">About Us</a></li>
                <li><a href="{{ url('event') }}">Events</a></li>
                <li><a href="{{ url('contact_us') }}">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+92) 336 6296427 </li>
            <li><i class="fa fa-envelope"></i> numankhalidbutt@gmail.com </li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
       <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+92) 336 6296427 </li>
                            <li><i class="fa fa-envelope"></i> numankhalidbutt@gmail.com </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                 <!--            <a href="#" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="{{ asset('template/img/flag.jpg') }}" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="menu-item">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('template/img/bhcs.png') }}" height="80px" style="margin-top:-15%; margin-bottom:0;" width="200px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active"><a href="{{ url('hotel') }}">Hotels</a></li>
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                                   <!--  <li><a href="./pages.html">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('room_detail') }}">Room Details</a></li>
                                            <li><a href="{{ url('family_rooms') }}">Family Room</a></li>
                                            <li><a href="{{ url('premium_rooms') }}">Premium Room</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="{{ url('event') }}">Events</a></li>
                                    <li><a href="{{ url('contact_us') }}">Contact</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>



    <!-- Js Plugins -->
    <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>