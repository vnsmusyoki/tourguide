@extends('pages.layout')
@section('title', 'Contact us')
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
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>.</span></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Talk with our team</span>
                            <h2 class="section-title__title">Any Question? Feel Free to Contact</h2>
                        </div>
                        <div class="contact-page__social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <div class="comment-form">
                            <form action="" class="comment-one__form contact-form-validated">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write Comment"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Send a
                                            message</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div><!-- /.result -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Information Start-->
    <section class="information">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Information Single-->
                    <div class="information__single">
                        <div class="information__icon">
                            <span class="icon-place"></span>
                        </div>
                        <div class="information__text">
                            <p>88 Broklyn Street <br> Road New York. USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Information Single-->
                    <div class="information__single">
                        <div class="information__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="information__text">
                            <h4>
                                <a href="tel:+92-666-888-0000" class="information__number-1">+92 666 888 0000</a>
                                <br>
                                <a href="tel:666-888-0000" class="information__number-2">666 888 0000</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Information Single-->
                    <div class="information__single">
                        <div class="information__icon">
                            <span class="icon-at"></span>
                        </div>
                        <div class="information__text">
                            <h4>
                                <a href="mailto:needhelp@tevily.com" class="information__mail-1">needhelp@tevily.com</a>
                                <br>
                                <a href="mailto:info@tevily.com" class="information__mail-2">info@tevily.com</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Information End-->

    <!--Google Map Start-->
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="contact-page-google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->
@endsection
