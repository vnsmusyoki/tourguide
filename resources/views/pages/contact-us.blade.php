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
                                        <button type="button" class="thm-btn comment-form__btn">Send a
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

    <!--Google Map Start-->
    <section class="contact-page-google-map">
      
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8072632214307!2d37.70618651471146!3d0.1348907643114514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17883c967d5c1517%3A0x94e1dbf4dfea47bd!2sMeru%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2ske!4v1642668540210!5m2!1sen!2ske" class="contact-page-google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->
@endsection
