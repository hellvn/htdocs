<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from rainbowdesign.in/themes/Stetho/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Mar 2021 13:16:47 GMT -->
<head>
    <base href="{{asset('/')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- page title -->
    <title>Stetho - @yield('title')</title>
    <!-- favicon -->
    <link rel="icon" href="favicon.ico" />
    <!-- bootstrap core CSS -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <!-- font awesome -->
    <link href="front/css/all.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link href="front/css/owl.carousel.min.css" rel="stylesheet">
    <link href="front/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- venobox css -->
    <link rel="stylesheet" href="front/css/venobox.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="front/css/datepicker.min.css">
    <!-- custom styles for this template -->
    <link href="front/css/custom.css" rel="stylesheet">
    <link href="front/css/responsive.css" rel="stylesheet">
    <link href="front/css/helper.css" rel="stylesheet">
</head>

<body>
<!-- ================ Preloader ================ -->
<div id="preloader">
    <div class="spinner-grow" role="status"> <span class="sr-only">Loading...</span> </div>
</div>
<!-- ================ Preloader end ================ -->

<!-- ================ Header ================ -->
<header class="header">
    <!-- header upper -->
    <div class="header-upper-bar">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8 col-md-6 col-sm-4 col-2">
                    <!-- header navigation -->
                    <nav class="navbar header-navigation navbar-expand-lg p-0">
                        <!-- mobile Toggle -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTheme" aria-controls="navbarTheme" aria-expanded="false" aria-label="Toggle navigation"> <span></span> <span></span> <span></span> </button>
                        <!-- mobile toggle end -->
                        <!-- top Menu -->
                        <div class="collapse navbar-collapse" id="navbarTheme">
                            <ul class="navbar-nav align-items-start align-items-lg-center">
                                <li><a class="nav-link" href="{{'/'}}">Home</a></li>
                                <li><a class="nav-link" href="about.html">About Us</a></li>
                                <li><a class="nav-link" href="gallery.html">Gallery</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinations</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown02">
                                        <a class="dropdown-item" href="destinations.html">Destinations</a>
                                        <a class="dropdown-item" href="destination-detail.html">Destination Detail</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown04"> <a class="dropdown-item" href="blog.html">Blog</a> <a class="dropdown-item" href="blog-single.html">Blog Singal</a> </div>
                                </li>
                                <li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown05"> <a class="dropdown-item" href="listing.html">Hotel Listing</a> <a class="dropdown-item" href="hotel-detail.html">Hotel Detail</a> <a class="dropdown-item" href="signin.html">Login</a> <a class="dropdown-item" href="register.html">Register</a> <a class="dropdown-item" href="team.html">Team</a> <a class="dropdown-item" href="testimonial.html">Testimonial</a> <a class="dropdown-item" href="traveler-information.html">Traveler Information</a> <a class="dropdown-item" href="payment-information.html">Payment Information</a> <a class="dropdown-item" href="faq.html">Faq</a> </div>
                                </li>
                                <li><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- top menu end -->
                    </nav>
                    <!-- header navigation end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-10 text-right">
                    <!-- header right link -->
                    <div class=" header-navigation navbar-expand-lg header-right-link">
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a style="text-transform: none" class="nav-link" href="{{ route('login') }}"><i class="fas fa-chevron-right"></i> {{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a style="text-transform: none" class="nav-link" href="{{ route('register') }}"><i class="fas fa-chevron-right"></i> {{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a style="text-transform: none" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                                        <a style="text-transform: none" class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            <li class="nav-item">
                                <a style="text-transform: none" href="contact-us.html" class="nav-link header-request">Request a Quote</a></li>
                        </ul>
                    </div>
                    <!-- header right link end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header upper end -->
    <!-- header lover -->
    <div class="header-lover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12">
                    <!-- brand -->
                    <div class="logo"><a class="navbar-brand p-0" href="index-2.html"><img src="front/img/logo.png" alt=""></a></div>
                    <!-- brand end -->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- header call us -->
                    <div class="header-call-us">
                        <ul>
                            <li>
                                <div class="iocn-holder"><i class="far fa-clock"></i></div>
                                <div class="text-holder">
                                    <h6>Working Hours</h6>
                                    <p class="mb-0">Monday - Sunday: 9.00am to 6.00pm</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder"><i class="fas fa-phone-volume"></i></div>
                                <div class="text-holder">
                                    <h6>Call Us</h6>
                                    <p class="mb-0"><a href="tel:123456789">+011 123 4567</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder"><i class="far fa-envelope"></i></div>
                                <div class="text-holder">
                                    <h6>Mail Us</h6>
                                    <p class="mb-0"><a href="mailto:info@exampal.com">spstetho@gmail.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- header call us end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header lover end -->
</header>
<!-- ================ Header end ================ -->

@yield('body')

<!-- ================ Footer area ================ -->
<footer class="pt-50">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>About Us</h3>
                    </div>
                    <!-- title end -->
                    <!-- text -->
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet sectetur adipiscing elit amet consectetur scing elit amet consectetur adipiscing elit sed et eletum.</p>
                        <p>Lorem ipsum dolor sit amet sectetur adipiscing elit amet consectetur scing elit amet.</p>
                    </div>
                    <!-- end text -->
                    <!-- footer social -->
                    <div class="footer-social"> <a href="#"><i class="fab fa-facebook-square"></i></a> <a href="#"><i class="fab fa-twitter-square"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a> <a href="#"><i class="fab fa-pinterest-square"></i></a> <a href="#"><i class="fab fa-google-plus-square"></i></a> </div>
                    <!-- footer social end -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>Navigation</h3>
                    </div>
                    <!-- title end -->
                    <!-- footer link -->
                    <ul class="footer-link">
                        <li><i class="fas fa-caret-right"></i> <a href="#">Home</a> </li>
                        <li><i class="fas fa-caret-right"></i> <a href="#">About Us</a> </li>
                        <li><i class="fas fa-caret-right"></i> <a href="#">Services</a> </li>
                        <li><i class="fas fa-caret-right"></i> <a href="#">Projects</a> </li>
                        <li><i class="fas fa-caret-right"></i> <a href="#">Blog</a> </li>
                        <li><i class="fas fa-caret-right"></i> <a href="#">Faq</a> </li>
                        <li><i class="fas fa-caret-right"></i> <a href="#">Contact</a> </li>
                    </ul>
                    <!-- footer link end -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>Recent posts</h3>
                    </div>
                    <!-- title end -->
                    <!-- recent-posts -->
                    <div class="footer-recent-post">
                        <!-- footer recent post item -->
                        <div class="footer-recent-post-item"> <a href="#">
                                <p>Lorem ipsum dolor sit amet sectetur adipiscing elit amet</p>
                                <small><i class="far fa-calendar-alt pr-6"></i> 01 Oct 2020</small></a> </div>
                        <!-- footer recent post item end -->
                        <!-- footer recent post item -->
                        <div class="footer-recent-post-item"> <a href="#">
                                <p>Lorem ipsum dolor sit amet sectetur adipiscing elit amet</p>
                                <small><i class="far fa-calendar-alt pr-6"></i> 01 Oct 2020</small></a> </div>
                        <!-- footer recent post item end -->
                        <!-- footer recent post item -->
                        <div class="footer-recent-post-item"> <a href="#">
                                <p>Lorem ipsum dolor sit amet sectetur adipiscing elit amet</p>
                                <small><i class="far fa-calendar-alt pr-6"></i> 01 Oct 2020</small></a> </div>
                        <!-- footer recent post item end -->
                    </div>
                    <!-- recent-posts end -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>Newsletter</h3>
                    </div>
                    <!-- title end -->
                    <!-- footer newsletter text -->
                    <div class="footer-newsletter-text">
                        <p>Lorem ipsum dolor sit amet sectetur adipiscing elit amet consectetur scing elit sed et eletum.</p>
                    </div>
                    <!-- footer newsletter text end -->
                    <!-- footer newsletter form -->
                    <div class="footer-newsletter-form">
                        <form>
                            <input placeholder="Email Adress..." type="text" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                    <!-- footer newsletter form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright -->
    <div class="copyright text-center mt-20">© <span class="current-year"></span> All Rights Reserved.</div>
    <!-- footer copyright end -->
</footer>
<!-- ================ Footer area end ================ -->

<!-- ================ Top scroll ================ -->
<a href="#" class="scroll-top">Top</a>
<!-- ================ Top scroll end ================ -->

<!-- js files -->
<script src="front/js/jquery-3.5.1.min.js"></script>
<script src="front/js/bootstrap.bundle.min.js"></script>
<!-- counter js -->
<script src="front/js/jquery-1.10.2.min.js"></script>
<script src="front/js/waypoints.min.js"></script>
<script src="front/js/jquery.counterup.min.js"></script>
<!-- venobox js -->
<script src="front/js/venobox.min.js"></script>
<!-- owl carousel -->
<script src="front/js/owl.carousel.min.js"></script>
<!-- portfolio js -->
<script src="front/js/jquery.mixitup.min.js"></script>
<!-- datepicker js -->
<script src="front/js/datepicker.min.js"></script>
<!-- script js -->
<script src="front/js/custom.js"></script>
</body>

<!-- Mirrored from rainbowdesign.in/themes/Stetho/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Mar 2021 13:16:47 GMT -->
</html>
