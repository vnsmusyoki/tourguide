@extends('pages.layout')
@section('title', 'About us')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg"
                style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg.jpg') }})">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>About</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>.</span></li>
                        <li>Pages</li>
                        <li><span>.</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Page Start-->
    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-page__left">
                        <div class="about-page__img">
                            <img src="{{ asset('frontend/images/resources/about-page-img.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Learn about us</span>
                            <h2 class="section-title__title">Dare to Explore with Tevily Agency</h2>
                        </div>
                        <p class="about-page__text-1">A Simply Perfect Place to Get Lost</p>
                        <p class="about-page__text-2">We are trusted by our clients and have a reputation for the
                            best services in the field. Lorem ipsum is simply free text dolor sit amett consectetur
                            adipiscing elit. It is a long established fact that a reader will be distracted by the
                            readable content of a page.</p>
                        <div class="about-page__progress">
                            <div class="about-page__progress-single">
                                <h4 class="about-page__progress-title">Best Services</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="77%">
                                        <div class="count-text">77%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-page__progress-single">
                                <h4 class="about-page__progress-title">Tour Agents</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar" data-percent="38%">
                                        <div class="count-text">38%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Page End-->

    <!--Book Now Start-->
    <section class="book-now">
        <div class="book-now-shape" style="background-image: url({{ asset('frontend/images/shapes/book-now-shape.png')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="book-now__inner">
                        <div class="book-now__left">
                            <p>Plan your trip with us</p>
                            <h2>Ready for an unforgetable tour?</h2>
                        </div>
                        <div class="book-now__right">
                            <a href="#" class="thm-btn book-now__btn">Book tour now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Book Now End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one about-page-testimonial">
        <div class="about-page-testimonial-map"
            style="background-image: url({{ asset('frontend/images/shapes/about-page-testimonial-map.png')}})"></div>
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-1.png')}}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-2.png')}}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-3.png')}}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-1.png')}}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-2.png')}}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-3.png')}}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-1.png') }}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-2.png') }}" alt="">
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
                                <img src="{{ asset('frontend/images/testimonial/testimonial-one-img-3.png') }}" alt="">
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

    <!--Video Two Start-->
    <div class="video-two">
        <div class="video-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{ asset('frontend/images/backgrounds/video-one-two-bg.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-two__inner">
                        <div class="video-one__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-one__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <p class="video-one__tagline">Are you ready to travel?</p>
                        <h2 class="video-one__title">Tevily is a World Leading <br> Online Tour Booking Platform
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Video Two End-->

    <!--Counter One Start-->
    <div class="counter-one">
        <div class="counter-one__container">
            <ul class="list-unstyled counters-one__box">
                <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                    <h3 class="odometer" data-count="870">00</h3>
                    <p class="counter-one__text">Total Donations</p>
                </li>
                <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                    <h3 class="odometer" data-count="480">00</h3>
                    <p class="counter-one__text">Campaigns Closed</p>
                </li>
                <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                    <h3 class="odometer" data-count="930">00</h3>
                    <p class="counter-one__text">Happy People</p>
                </li>
                <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                    <h3 class="odometer" data-count="63">00</h3>
                    <p class="counter-one__text">Our Volunteers</p>
                </li>
            </ul>
        </div>
    </div>
    <!--Counter One End-->

    

    <!--Brand Three Start-->
    <section class="brand-two brand-three">
        <div class="container">
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
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-1.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-2.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-3.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-4.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-5.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-1.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-2.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-3.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-4.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/brand/brand-2-5.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand Three End-->
@endsection
