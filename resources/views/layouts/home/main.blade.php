<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--icon font css-->
    <link rel="stylesheet" href="{{ asset('vendors/themify-icon/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icon/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/magnify-pop/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/elagent/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/scroll/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive2.css') }}">
    @stack('head')
</head>

<body>
    <div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_eight">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="{{ route('home') }}"><img src="{{ asset('img/logo2.png') }}" style="width: 200px;" alt="logo"><img src="{{ asset('img/logo.png') }}" style="width: 200px" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    @include('layouts.home.navbar')
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="footer_area footer_dark_one footer_dark_ten pt_120">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget dark_widget company_widget wow fadeInUp" data-wow-delay="0.2s">
                                <a href="index.html" class="f-logo"><img src="{{ asset('img/logo2.png') }}" style="200px" alt="logo"></a>
                                <div class="widget-wrap">
                                    <p class="f_400 f_p f_size_15 mb-0 l_height34"><span>Email:</span> <a href="mailto:{{ config('mail.from.address') }}" class="f_400">{{ config('mail.from.address') }}</a></p>
                                    <p class="f_400 f_p f_size_15 mb-0 l_height34"><span>Phone:</span> <a href="tel:{{ settings_phone() }}" class="f_400">{{ settings_phone() }}</a></p>
                                </div>
                                <div class="f_social_icon_two">
                                    <a href="#" class="ti-facebook"></a>
                                    <a href="#" class="ti-twitter-alt"></a>
                                    <a href="#" class="ti-vimeo-alt"></a>
                                    <a href="#" class="ti-pinterest"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget dark_widget about-widget pl_70 wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f-title f_600 t_color f_size_18 mb_40">Quick Links</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="/#track-order">Track Order</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget dark_widget about-widget pl_20 wow fadeInUp" data-wow-delay="0.6s">
                                <h3 class="f-title f_600 t_color f_size_18 mb_40">Legal</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom dark_f_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <p class="mb-0 f_400">Copyright © {{ date('Y') }} {{ config('app.name') }}</p>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <ul class="list-unstyled f_menu text-right">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/propper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendors/sckroller/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('vendors/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-selector/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendors/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @include('layouts.chat')
    @stack('js')
</body>

</html>
