<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Guide | @yield('title') </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Tevily HTML Template For Tour" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/tevily-icons/style.c') }}ss">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/twentytwenty/twentytwenty.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/tevily.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/tevily-responsive.css') }}" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__top-left">
                            <ul class="list-unstyled main-header__top-address">
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <a href="tel:+254-712-829-756">+ 254 712 829 756</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-at"></span>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:intruderdeveloper@gmail.com">tourguidemanagement.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-right-inner">
                                <div class="main-header__top-right-social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                                <div class="main-header__top-right-btn-box">
                                    <a href="#" class="thm-btn main-header__top-right-btn">Become a local guide</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="container clearfix">
                        <div class="main-menu-wrapper-inner clearfix">
                            <div class="main-menu-wrapper__left clearfix">
                                <div class="main-menu-wrapper__logo">
                                    <a href="{{ url('/') }}"><img
                                            src="{{ asset('frontend/images/resources/logo-1.png') }}" alt=""></a>
                                </div>
                                <div class="main-menu-wrapper__main-menu">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown current">
                                            <a href="{{ url('/') }}">Home</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Destinations</a>
                                            <ul>
                                                <li><a href="#">Destinations</a></li>
                                                <li><a href="#">Destinations Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Tours</a>
                                            <ul>
                                                <li><a href="#">Tours</a></li>
                                                <li><a href="#">Tours List</a></li>
                                                <li><a href="#">Tours Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ url('about-us') }}">About</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                        <li><a href="{{ route('login') }}">My Bookings</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu-wrapper__right">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                <a href="#" class="main-menu__user icon-avatar"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div>
        <!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('frontend/images/backgrounds/main-slider-1-1.jpg') }});">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2> Travel & Adventures</h2>
                                        <p>Where Would You Like To Go?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('frontend/images/backgrounds/main-slider-1-2.jpg') }});">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2> Travel & Adventures</h2>
                                        <p>Where Would You Like To Go?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('frontend/images/backgrounds/main-slider-1-3.jpg') }});">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2> Travel & Adventures</h2>
                                        <p>Where Would You Like To Go?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-nav">
                    <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                    <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
                </div>
            </div>
        </section>

        <!--Tour Search Start-->
        <section class="tour-search">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tour-search-box">
                            <form class="tour-search-one" action="#">
                                <div class="tour-search-one__inner">
                                    <div class="tour-search-one__inputs">
                                        <div class="tour-search-one__input-box">
                                            <label for="place">Where to</label>
                                            <input type="text" placeholder="Enter keywords" name="place" id="place">
                                        </div>
                                        <div class="tour-search-one__input-box">
                                            <label>When</label>
                                            <input type="text" placeholder="September" name="when" id="datepicker">
                                        </div>
                                        <div class="tour-search-one__input-box tour-search-one__input-box-last">
                                            <label for="type">Type</label>
                                            <select class="selectpicker" id="type">
                                                <option value="Adventure">Adventure</option>
                                                <option value="Wildlife">Wildlife</option>
                                                <option value="Sightseeing">Sightseeing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tour-search-one__btn-wrap">
                                        <button type="submit" class="thm-btn tour-search-one__btn">Find now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Tour Search End-->

        <!--Destinations One Start-->
        <section class="destinations-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Destination lists</span>
                    <h2 class="section-title__title">Go Exotic Places</h2>
                </div>
                <div class="row masonary-layout">
                    <div class="col-xl-3 col-lg-3">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img src="{{ asset('frontend/images/destination/destination-1-1.png') }}" alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a href="#">Spain</a>
                                    </h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img src="{{ asset('frontend/images/destination/destination-1-2.png') }}" alt="">
                                <div class="destinations-one__content">
                                    <p class="destinations-one__sub-title">Wildlife</p>
                                    <h2 class="destinations-one__title"><a
                                            href="destinations-details.html">Thailand</a>
                                    </h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img src="{{ asset('frontend/images/destination/destination-1-3.png') }}" alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Africa</a>
                                    </h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img src="{{ asset('frontend/images/destination/destination-1-4.png') }}" alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="destinations-details.html">Australia</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img src="{{ asset('frontend/images/destination/destination-1-5.png') }}" alt="">
                                <div class="destinations-one__content">
                                    <p class="destinations-one__sub-title">Adventure</p>
                                    <h2 class="destinations-one__title"><a
                                            href="destinations-details.html">Switzerland</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Destinations One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-shape-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="{{ asset('frontend/images/shapes/about-one-shape-1.png') }}" alt="">
            </div>
            <div class="about-one-shape-2 float-bob-y"><img
                    src="{{ asset('frontend/images/shapes/about-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('frontend/images/resources/about-one-img-1.png') }}" alt="">
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="about-one__call-number">
                                        <p>Book Tour Now</p>
                                        <h4><a href="tel:254-712-829-756">+254-712-829-756</a></h4>
                                    </div>
                                </div>
                                <div class="about-one__discount">
                                    <h2>30%</h2>
                                    <h3>Discount</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to know us</span>
                                <h2 class="section-title__title">Plan Your Trip with Trevily</h2>
                            </div>
                            <p class="about-one__right-text">There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected hum randomised words which
                                don't look even slightly.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Invest in your simply neighborhood</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Support people in free text extreme need</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Largest global industrial business community</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="about-one__btn thm-btn">Book with us now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Popular Tours Start-->
        <section class="popular-tours">
            <div class="popular-tours__container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Featured tours</span>
                    <h2 class="section-title__title">Most Popular Tours</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="popular-tours__carousel owl-theme owl-carousel">
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-1.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-2.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">The Dark Forest
                                            Adventure</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-3.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">Discover Depth of
                                            Beach</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-4.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">Moscow Red City
                                            Land</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-1.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">Magic of Italy
                                            Tours</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-2.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-3.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">Discover Depth of
                                            Beach</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-4.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-1.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-2.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-3.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img src="{{ asset('frontend/images/resources/popular-tours__img-4.jpg') }}"
                                        alt="">
                                    <div class="popular-tours__icon">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> 8.0 Superb
                                    </div>
                                    <h3 class="popular-tours__title"><a href="#">National Park 2 Days
                                            Tour</a></h3>
                                    <p class="popular-tours__rate"><span>$1870</span> / Per Person</p>
                                    <ul class="popular-tours__meta list-unstyled">
                                        <li><a href="#">3 Days</a></li>
                                        <li><a href="#">12+</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Popular Tours End-->

        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('frontend/images/backgrounds/video-one-bg.jpg') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="video-one__left">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="icon-play-button"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <p class="video-one__tagline">Are you ready to travel?</p>
                            <h2 class="video-one__title">Tevily is a World Leading Online Tour Booking Platform</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="video-one__right">
                            <ul class="list-unstyled video-one__four-icon-boxes">
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-deer"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Wildlife <br> Tours</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-paragliding"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Paragliding <br> Tours</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-flag"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Adventure <br> Tours</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-hang-gliding"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Hang Gliding <br> Tours</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="brand-one-shape"
                style="background-image: url({{ asset('frontend/images/shapes/brand-one-shape.png') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="brand-one__title">
                            <h2>Our partners</h2>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="brand-one__main-content">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        }
                    }}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-1.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-2.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-3.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-4.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-5.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-1.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-2.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-3.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-4.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('frontend/images/brand/brand-one-5.png') }}" alt="">
                                    </div>
                                    <!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-shape-2 float-bob-y">
                <img src="{{ asset('frontend/images/shapes/testimonial-one-shape-2.png') }}" alt="">
            </div>
            <div class="testimonial-one-shape-3 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="{{ asset('frontend/images/shapes/testimonial-one-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Testimonials & reviews</span>
                    <h2 class="section-title__title">What They’re Saying</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__carousel owl-theme owl-carousel">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-1.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Shirley Smith</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-2.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-3.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-1.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Shirley Smith</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-2.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-3.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-1.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Shirley Smith</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-2.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-3.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonail-one__content">
                                    <div class="testimonial-one__top-revivew-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-one__text">This is due to their best service, pricing and
                                        customer support. It’s throughly refresing to such a personal touch. Duis aute
                                        irure lupsum reprehenderit.</p>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-title">Customer</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Gallery One Start-->
        <section class="gallery-one">
            <div class="gallery-one-bg"
                style="background-image: url({{ asset('frontend/images/shapes/gallery-map.png') }})"></div>
            <div class="gallery-one__container-box clearfix">
                <ul class="list-unstyled gallery-one__content clearfix">
                    <li class="wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('frontend/images/gallery/gallery-one-img-1.jpg') }}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup"
                                    href="{{ asset('frontend/images/gallery/gallery-one-img-1.jpg') }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('frontend/images/gallery/gallery-one-img-2.jpg') }}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup"
                                    href="{{ asset('frontend/images/gallery/gallery-one-img-2.jpg') }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('frontend/images/gallery/gallery-one-img-3.jpg') }}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup"
                                    href="{{ asset('frontend/images/gallery/gallery-one-img-3.jpg') }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('frontend/images/gallery/gallery-one-img-4.jpg') }}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup"
                                    href="{{ asset('frontend/images/gallery/gallery-one-img-4.jpg') }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('frontend/images/gallery/gallery-one-img-5.jpg') }}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup"
                                    href="{{ asset('frontend/images/gallery/gallery-one-img-5.jpg') }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Gallery Oned End-->

        <!--Why Choose Start-->
        <section class="why-choose">
            <div class="why-choose__container">
                <div class="why-choose__left">
                    <div class="why-choose__left-bg"
                        style="background-image: url({{ asset('frontend/images/backgrounds/why-choose-left-bg.jpg') }})">
                    </div>
                    <div class="why-choose__toggle">
                        <p>Trips <br> & tours</p>
                    </div>
                </div>
                <div class="why-choose__right">
                    <div class="why-choose__right-map"
                        style="background-image: url({{ asset('frontend/images/shapes/why-choose-right-map.png') }})">
                    </div>
                    <div class="why-choose__right-content">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our benefit lists</span>
                            <h2 class="section-title__title">Why Choose Tevily</h2>
                        </div>
                        <p class="why-choose__right-text">There are many variations of passages of Lorem Ipsum is
                            simply free text available in the market for you, but the majority have suffered alteration
                            in some form.
                        </p>
                        <ul class="list-unstyled why-choose__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-travel"></span>
                                </div>
                                <div class="text">
                                    <h4>Professional and Certified</h4>
                                    <p>Lorem ipsum is simply free text dolor sit but the majority have suffered amet,
                                        consectetur notted.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-travel-map"></span>
                                </div>
                                <div class="text">
                                    <h4>Get Instant Tour Bookings</h4>
                                    <p>Lorem ipsum is simply free text dolor sit but the majority have suffered amet,
                                        consectetur notted.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose End-->

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="news-one__top">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="news-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">From the blog post</span>
                                    <h2 class="section-title__title">News & Articles</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="news-one__top-right">
                                <a href="#" class="news-one__btn thm-btn">View All posts</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-one__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{ asset('frontend/images/blog/news-one-img-1.jpg') }}" alt="">
                                    <a href="#">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>28 <br> <span>Aug</span></p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="##"><i class="far fa-user-circle"></i>Admin</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title">
                                        <a href="#">Things to See and Do When Visiting Japan</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{ asset('frontend/images/blog/news-one-img-2.jpg') }}" alt="">
                                    <a href="#">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>28 <br> <span>Aug</span></p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>Admin</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title">
                                        <a href="#">Journeys are Best Measured in New Friends</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{ asset('frontend/images/blog/news-one-img-3.jpg') }}" alt="">
                                    <a href="#">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>28 <br> <span>Aug</span></p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>Admin</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title">
                                        <a href="#">Travel the Most Beautiful Places in the World</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Site Footer One Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="{{ url('/') }}"><img
                                                src="{{ asset('frontend/images/resources/footer-logo.png') }}"
                                                alt=""></a>
                                    </div>
                                    <p class="footer-widget__about-text">Welcome to our Trip and Tour Agency. Lorem
                                        simply text amet cing elit.</p>
                                    <ul class="footer-widget__about-contact list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone-square-alt"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:+254-712-859-756">+254 712 859 756</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a
                                                    href="mailto:intruderdeveloper@gmail.com">tourguidemanagers@info.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <p>666 road, broklyn street new york</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__company clearfix">
                                    <h3 class="footer-widget__title">Company</h3>
                                    <ul class="footer-widget__company-list list-unstyled">
                                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                                        <li><a href="#">Community Blog</a></li>
                                        <li><a href="#">Rewards</a></li>
                                        <li><a href="#">Work with Us</a></li>
                                        <li><a href="#">Meet the Team</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__explore">
                                    <h3 class="footer-widget__title">Explore</h3>
                                    <ul class="list-unstyled footer-widget__explore-list">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Legal</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Affilitate Program</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                    <form class="footer-widget__newsletter-form mc-form" data-url="">
                                        <div class="footer-widget__newsletter-input-box">
                                            <input type="email" placeholder="Email address" name="EMAIL">
                                            <button type="submit"
                                                class="footer-widget__newsletter-btn">Subscribe</button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response text-center"></div>
                                    <!-- /.mc-form__response -->
                                    <div class="footer-widget__newsletter-bottom">
                                        <div class="footer-widget__newsletter-bottom-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="footer-widget__newsletter-bottom-text">
                                            <p>I agree to all terms and policies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-left">
                                    <div class="footer-widget__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="site-footer__bottom-right">
                                    <p>@ All Copyright 2021, <a href="#">Tour Guide Managers</a></p>
                                </div>
                                <div class="site-footer__bottom-left-arrow">
                                    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div>
    <!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ url('/') }}" aria-label="logo image"><img src="assets/images/resources/logo-2.png"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@tevily.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+254-712-856-756">+254-712-829-756</a>
                </li>
            </ul>
            <!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->




    <script src="{{ asset('frontend/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('frontend/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('frontend/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('frontend/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/vendors/timepicker/timePicker.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('frontend/js/tevily.js') }}"></script>
</body>

</html>
