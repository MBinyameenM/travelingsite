<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHCS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49bf7f7ca4.js" crossorigin="anonymous"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
<style>
#owl-demo .item{
padding: 15px; 
}
.hotels_a { text-decoration: none; color: #dfa974 }
.hotels_a:hover { font-weight: bold; color: #dfa974 }
.section-title span { font-size: 30px; }
#owl-demo { margin-bottom: 8%; }    

#custom_btns{
    position: relative;
    top: 35%;
    display: block;
    margin-left: auto; 
    margin-right: auto; 
}
.customNextBtn, .customPreviousBtn{
    ackground-color: #fff;
    box-shadow: -14.142px 14.142px 20px 0px rgba(157,157,157,0.2);
    padding: 14px;
    color: #000;
    font-weight: 500;
    border: 1px solid #f5f5f5;
    display: inline-flex;
    cursor: pointer;  
}
.customNextBtn:hover, .customPreviousBtn:hover
{
    box-shadow: -21.142px 9.142px 20px #ccc;
}
.gtc_pictures img { min-height: 400px; margin-bottom: 5%; }
.gtc_des { font-family: 'league_spartanbold'; }
.hr-text { background: rgba(255,255,255,.9);  padding: 10px; border-radius: 5px; }
</style>
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
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
     <!--    <div class="header-configure-area ">
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
        <!--         <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="{{ url('room_detail') }}">Room Details</a></li>
                        <li><a href="">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
 -->                <li><a href="{{ url('event') }}">Events</a></li>
                <li><a href="{{ url('contact_us') }}">Contact</a></li>
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        
        <div class="menu-item">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('template/img/bhcs.png') }}" width"100px" height="50px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    @if( \Auth::user() && \Auth::user()->user_role != 3  )
                                    <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                                    @endif
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active"><a href="{{ url('hotel') }}">Hotels</a></li>
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                          <!--           <li><a href="./pages.html">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('room_detail') }}">Room Details</a></li>
                                            <li><a href="{{ url('family_rooms') }}">Family Room</a></li>
                                            <li><a href="{{ url('premium_rooms') }}">Premium Room</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="{{ url('event') }}">Events</a></li> -->
                                    <li><a href="{{ url('contact_us') }}">Contact</a></li>
                                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="padding:0; padding-left:5px; margin-top: -10%;" href="{{ route( 'logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                                </ul>
                            </nav>
                       <!--      <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>BHCS</h1>
                        <p>Here are the best hotel booking sites, including recommendations for international
                            travel and for finding low-priced hotel rooms.</p>
                        <!-- <a href="#" class="primary-btn">Discover Now</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Search Your Hotel</h3>
                        <form action="{{ url('search_hotel') }}" method="POST">
                            @csrf
                            <div class="select-option">
                                <label for="city">City:</label>
                                <select id="city" name="city">
                                    @foreach( \App\Hotels::select('city')->get() as $row )
                                    <option value="{{ $row->city }}">{{ $row->city }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="event">Event:</label>
                                <select id="event" name="event">
                                    @foreach( \App\EventCategories::select('title')->get() as $row )
                                    <option value="{{ $row->title }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="people">People:</label>
                                <select id="people" name="people">
                                    <option value="50-100">50-100</option>
                                    <option value="100-300">100-300</option>
                                    <option value="300-500">300-500</option>
                                    <option value="500-1000">500-1000</option>
                                    <option value="1000-2000">1000-2000</option>
                                </select>
                            </div>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('template/img/hero/hero-1.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('template/img/hero/hero-2.jpg') }}"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('template/img/hero/hero-3.jpg') }}"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-text">
                        <div class="section-title">
                            <span class="display-2">Top Rated Hotels</span>
                        </div>
                        <p class="f-para">Sona.com is a leading online accommodation site. We’re passionate about
                            travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
                            languages.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                            apartment, guest house, or tree house, we’ve got you covered.</p>
                        <a href="#" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-pic">
                        <div class="row">    
                            <div class="col-lg-11">
                                <div id="top_rated_hotels" class="owl-carousel owl-theme">
                                    @foreach(\App\Reviews::select(DB::raw('ROUND(avg(rating),2) as avg_rating,reviews.hotel_id'))->with('hotel')->groupBy('hotel_id')->orderBy('avg_rating','desc')->get() as $rating)
                                    <div class="item">
                                        <div class="gtc_pictures">
                                            <img src="{{ asset('../storage/app/'.$rating->hotel->images->first()->path.$rating->hotel->images->first()->unique_identifier) }}" alt="" class="img-fluid img-thumbmnail">    
                                        </div>
                                        <div class="gtc_des">
                                            <span class="gtc_country_flag float-left"> {{ $rating->avg_rating }} </span>
                                            <a class="hotels_a" href="{{ url('hotels/'.$rating->hotel->id) }}"> <span class="gtc_name float-left ml-2"> {{ $rating->hotel->name }} </span> </a>
                                        </div>
                                    </div>
                                    @endforeach
                                
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div id="custom_btns">
                                  <div class="customNextBtn mt-1"><i class="fas fa-long-arrow-alt-up"></i></div>
                                  <div class="customPreviousBtn mt-2"><i class="fas fa-long-arrow-alt-down"></i></div>
                                </div>
                            </div>       
                            
                        </div>
                       <!--  <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ asset('template/img/about/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('template/img/about/about-2.jpg') }}" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <!--                        <i class="flaticon-012-cocktail"></i>-->
                        <i class="fas fa-ring" style="font-size: 60px"></i>
                        <h4>Wedding</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
<!--                        <i class="flaticon-033-dinner"></i>-->
                        <i class="fas fa-campground mt-4" style="font-size: 60px"></i>
                        <h4>Catering Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item" style="font-size: 60px">
                        <i class="fas fa-icons"></i>
                        <h4>Social Night</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="fas fa-birthday-cake" style="font-size: 60px"></i>
                        <h4>Birthday</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="far fa-handshake" style="font-size: 60px"></i>
                        <h4>Confrances</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
<!--                        <i class="flaticon-012-cocktail"></i>-->
                        <i class="fas fa-info-circle" style="font-size: 60px"></i>
                        <h4>Others</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('template/img/room/waleema.jpg') }}">
                            <div class="hr-text">
                                <h2>Waleema</h2>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('template/img/room/mehndi.webp') }}">
                            <div class="hr-text">
                                <h2>Mehndi</h2>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('template/img/room/anniversary.jpg') }}">
                            <div class="hr-text">
                                <h2>Anniversary</h2>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="{{ asset('template/img/room/birthday.jpg') }}">
                            <div class="hr-text">
                                <h2>Birthdays</h2>
                                <!-- <a href="#" class="primary-btn">More Details</a> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
     <!--                        <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt=""> -->
                        </div>
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                           <!--  <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="{{ asset('template/img/testimonial-logo.png') }}" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('template/img/blog/blog-1.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('template/img/blog/blog-2.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Camping</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('template/img/blog/blog-3.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Copper Canyon</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="{{ asset('template/img/blog/blog-wide.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="{{ asset('template/img/blog/blog-10.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Travel</span>
                            <h4><a href="#">Traveling To Barcelona</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ asset('template/img/bhcs.png') }}" width="100px" height="100px" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(+92) 336 6296427</li>
                                <li>numankhalidbutt@gmail.com</li>
                                <li>Dawood recendency,Lahore.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    
<script>
    $(document).ready(function(){
        const owl = $("#top_rated_hotels");
          owl.owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            lazyLoad: true,
            autoplay:true,
            infinite: true,
            smartSpeed: 800,
            nav: false,
            items: 2,

          });
          $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
          });
          $('.customPreviousBtn').click(function() {
            owl.trigger('prev.owl.carousel');
          });

    });
</script>
</body>

</html>