@extends('pages.layout')
@section('title', 'Homepage')
@section('content')


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


@endsection
