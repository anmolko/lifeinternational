@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    @if(count($sliders) > 0)
        <div class="banner__two swiper banner-two-slider">
            <div class="swiper-wrapper">
                @foreach(@$sliders as $slider)
                    <div class="banner__two-image swiper-slide" data-background="{{ asset('/images/sliders/'.$slider->image) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="banner__two-content">
                                    <b class="subtitle">Life International</b>
                                    <span data-animation="fadeInUp" data-delay=".3s">{{@$slider->subheading}}</span>
                                    <h1 data-animation="fadeInUp" data-delay=".7s">{{@$slider->heading}}</h1>
                                    @if(@$slider->button)
                                        <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                            <a class="btn-five" href="{{@$slider->link}}"> {{@$slider->button ?? 'Start here'}} <i class="far fa-chevron-double-right"></i></a>
                                        </div>
                                    @endif
                                    <img class="banner__two-image-shape-one" src="{{asset('assets/frontend/img/shape/banner-1.png')}}" data-animation="rollIn" data-delay="2s" alt="">
                                </div>
                                <img class="banner__two-image-shape-two" src="{{asset('assets/frontend/img/shape/banner-2.png')}}" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="banner__two-arrow">
                <div class="banner__two-arrow-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                <div class="banner__two-arrow-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
            </div>
        </div>
    @endif
    @if($homepage_info->mission)
        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="features-area">
                            <div class="features-area-item ltb-radius">
                                <span><i class="far fa-arrow-right"></i></span>
                                <h4>Mission</h4>
                                <p>{{ ucfirst(@$homepage_info->mission) }}</p>
                            </div>
                            <div class="features-area-item features-area-item-hover">
                                <span><i class="far fa-arrow-right"></i></span>
                                <h4>Vision</h4>
                                <p>{{ ucfirst(@$homepage_info->vision) }}</p>
                            </div>
                            <div class="features-area-item rtb-radius">
                                <span><i class="far fa-arrow-right"></i></span>
                                <h4>Goal</h4>
                                <p>{{ ucfirst(@$homepage_info->value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(!empty($homepage_info->welcome_description))
        <div class="about__one dark__image section-padding">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 lg-mb-30">
                            @if(@$homepage_info->welcome_side_image == "left")
                                <div class="about__one-left">
                                    <div class="about__one-left-image">
                                        <img class="two" src="{{ $homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                    </div>
                                </div>
                            @else
                                <div class="about__one-right">
                                    <div class="about__one-right-title">
                                        <span class="subtitle-one">{{$homepage_info->welcome_subheading ?? ''}}</span>
                                        <h2>{{$homepage_info->welcome_heading ?? ''}}</h2>
                                        <p> {{ ucfirst(@$homepage_info->welcome_description) }}</p>
                                    </div>
                                    @if(@$homepage_info->welcome_button)
                                        <div class="about__one-right-btn">
                                            <div>
                                                <a class="btn-one" href="{{@$homepage_info->welcome_link}}">Discover More<i class="far fa-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                             @endif


                        </div>
                        <div class="col-xl-6 col-lg-6">
                            @if(@$homepage_info->welcome_side_image == "left")
                                <div class="about__one-right">
                                    <div class="about__one-right-title">
                                        <span class="subtitle-one">{{$homepage_info->welcome_subheading ?? ''}}</span>
                                        <h2>{{$homepage_info->welcome_heading ?? ''}}</h2>
                                        <p> {{ ucfirst(@$homepage_info->welcome_description) }}</p>
                                    </div>
                                    @if(@$homepage_info->welcome_button)
                                        <div class="about__one-right-btn">
                                            <div>
                                                <a class="btn-one" href="{{@$homepage_info->welcome_link}}">Discover More<i class="far fa-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="about__one-left">
                                    <div class="about__one-left-image">
                                        <img class="two" src="{{ $homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                    </div>
                                </div>
                            @endif
                        </div>

                </div>
            </div>
            <img class="about__one-shape-1 dark-n" src="{{asset('assets/frontend/img/shape/about-1.png')}}" alt="">
            <img class="about__one-shape-1 light-n" src="{{asset('assets/frontend/img/shape/about-1-dark.png')}}" alt="">
            <img class="about__one-shape-2 dark-n" src="{{asset('assets/frontend/img/shape/about-2.png')}}" alt="">
            <img class="about__one-shape-2 light-n" src="{{asset('assets/frontend/img/shape/about-2-dark.png')}}" alt="">
        </div>
    @endif

    @if(!empty($homepage_info->core_main_heading))
        <div class="services__one section-padding-2 pt-0" >
            <div class="container">
                <div class="row align-items-end mb-70">
                    <div class="col-xl-7 col-lg-8 lg-mb-30">
                        <div class="services__one-title lg-t-center">
                            <span class="subtitle-one">{{ucfirst(@$homepage_info->core_main_description)}}</span>
                            <h2>{{ucwords(@$homepage_info->core_main_heading)}}</h2>
                        </div>
                    </div>
{{--                    <div class="col-xl-5 col-lg-4 t-right lg-t-center">--}}
{{--                        <a class="btn-one" href="services-two.html">All Services<i class="far fa-chevron-double-right"></i></a>--}}
{{--                    </div>--}}
                </div>
                <div class="row">
                    <div class="swiper portfolio__area-slider">
                        <div class="swiper-wrapper">
                            <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30 swiper-slide">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-1.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-11.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description1 ?? '')}}</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30 swiper-slide">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-2.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-22.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading2)}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description2)}}</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30 swiper-slide">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-3.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-33.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading3)}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description3)}}</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30 swiper-slide">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-4.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-44.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading4)}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description4)}}</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30 swiper-slide">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-3.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-33.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description5)}}</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 swiper-slide">
                                <div class="services__one-item">
                                    <div class="services__one-item-icon">
                                        <img src="{{asset('assets/frontend/img/icon/services-2.png')}}" alt="">
                                        <div class="services__one-item-icon-one">
                                            <img src="{{asset('assets/frontend/img/icon/services-22.png')}}" alt="">
                                        </div>
                                    </div>
                                    <h4><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h4>
                                    <p>{{ucfirst(@$homepage_info->core_description6)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->action_heading))
        <!-- Cta Area Start -->
        <div class="cta__area">
            <div class="container">
                <div class="row cta__area-bg align-items-center">
                    <div class="col-xxl-9 col-xl-4">
                        <div class="cta__area-title">
                            <h2>{{@$homepage_info->action_heading}}</h2>
                            <span class="text-two">{{@$homepage_info->action_heading2}}</span>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-8 pr-0">
                        <div class="cta__area-form">
                            <form>
                                <div class="cta__area-form-item">
                                    <a href="{{@$homepage_info->action_link2}}" class="btn-four" type="submit">{{@$homepage_info->action_link ?? 'Learn more'}}<i class="far fa-chevron-double-right"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cta Area End -->
    @endif
    <!-- Experience Area Start -->
    @if(count($director) > 0)
        <div class="team__details dark__image section-padding">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-xl-8 col-lg-8 lg-mb-30">
                        <div class="testimonial__area-title lg-t-center">
                            <span class="subtitle-one">Real Client Stories</span>
                            <h2>Customer Experiences</h2>
                        </div>
                    </div>
                </div>
                <div class="swiper director-slider">
                    <div class="swiper-wrapper">
                        @foreach($director as $managing)
                            <div class="row align-items-center swiper-slide">
                                <div class="col-xl-5 xl-mb-30">
                                    <div class="team__details-thumb dark__image">
                                        <img class="img__full" src="{{asset('/images/director/'.@$managing->image)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="team__details-content ml-20 xl-ml-0">
                                        <span>{{ucfirst($managing->designation)}}</span>
                                        <h2>{{ucfirst($managing->heading)}}</h2>
                                        <p> {{$managing->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Portfolio Area Start -->
    <div class="portfolio__area section-padding pb-0">
        <div class="container-fluid p-0">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="portfolio__area-title t-center">
                        <span class="subtitle-one">Company Case Study</span>
                        <h2>Our Consulting Success</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper portfolio__area-slider">
                        <div class="swiper-wrapper">
                            <div class="portfolio__area-item swiper-slide">
                                <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Business strategy</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="assets/img/icon/up-arrow.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__area-item swiper-slide">
                                <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Digital Consulting</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="assets/img/icon/up-arrow.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__area-item swiper-slide">
                                <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Human Resource</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="assets/img/icon/up-arrow.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__area-item swiper-slide">
                                <img src="assets/img/portfolio/portfolio-4.jpg" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Business Consulting</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="assets/img/icon/up-arrow.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial__area section-padding">
        <img class="testimonial__area-shape dark-n" src="assets/img/shape/testimonial.png" alt="">
        <img class="testimonial__area-shape light-n" src="assets/img/shape/testimonial-dark.png" alt="">
        <div class="container">
            <div class="row mb-70 align-items-end">
                <div class="col-xl-8 col-lg-8 lg-mb-30">
                    <div class="testimonial__area-title lg-t-center">
                        <span class="subtitle-one">Real Client Stories</span>
                        <h2>Customer Experiences</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="testimonial__area-button t-right lg-t-center">
                        <div class="testimonial__area-button-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                        <div class="testimonial__area-button-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper testimonial__area-slider">
                        <div class="swiper-wrapper">
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="assets/img/avatar/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Flores, Juanita</h5>
                                        <span class="text-eight">Ceo Founder</span>
                                    </div>
                                </div>
                                <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="assets/img/avatar/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Cooper, Kristin</h5>
                                        <span class="text-eight">Co Founder</span>
                                    </div>
                                </div>
                                <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="assets/img/avatar/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Johnsie Jock</h5>
                                        <span class="text-eight">sr. Designer</span>
                                    </div>
                                </div>
                                <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Get In Touch Start End -->
    <div class="getIn__touch section-padding" data-background="assets/img/pages/getInTouch.jpg">
        <img class="getIn__touch-shape left-right-animate2" src="assets/img/shape/getInTouch.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 lg-mb-30">
                    <div class="getIn__touch-left">
                        <div class="getIn__touch-left-title">
                            <span class="subtitle-one">Get In Touch</span>
                            <h2>Free Consultation</h2>
                        </div>
                        <div class="getIn__touch-left-form">
                            <form action="#">
                                <div class="mt-25">
                                    <input type="text" name="name" placeholder="Full Name" required="required">
                                </div>
                                <div class="mt-25">
                                    <input type="email" name="email" placeholder="Email Address" required="required">
                                </div>
                                <div class="mt-25">
                                    <input type="text" name="subject" placeholder="Subject" required="required">
                                </div>
                                <div class="mt-25">
                                    <button class="btn-one" type="submit">Free Consulting</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="getIn__touch-right">
                        <div class="getIn__touch-right-title">
                            <h2>We serving 30% Of Global 600 Companies</h2>
                            <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat. Donec vel sodales dui,</p>
                        </div>
                        <div class="getIn__touch-right-bottom">
                            <div class="getIn__touch-right-bottom-text">
                                <h4>client satisfaction in the globaly</h4>
                            </div>
                            <div class="getIn__touch-right-bottom-shape">
                                <img src="assets/img/icon/getInTouch.png" alt="">
                            </div>
                            <div class="getIn__touch-right-bottom-image">
                                <ul>
                                    <li><img src="assets/img/avatar/avatar-7.jpg" alt=""></li>
                                    <li><img src="assets/img/avatar/avatar-5.jpg" alt=""></li>
                                    <li><img src="assets/img/avatar/avatar-6.jpg" alt=""></li>
                                    <li><img src="assets/img/avatar/avatar-4.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Area End -->
    <!-- Emargency Help Area Start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-5"></div>
            <div class="col-xl-7">
                <div class="help__area">
                    <div class="help__area-item">
                        <div class="help__area-item-icon icon-animation">
                            <i class="fal fa-phone-alt"></i>
                        </div>
                        <div class="help__area-item-info">
                            <span class="text-three">Emargency Help</span>
                            <h5><a href="tel:+012652689523">+012 652 689 523</a></h5>
                        </div>
                    </div>
                    <div class="help__area-item">
                        <div class="help__area-item-icon">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="help__area-item-info">
                            <span class="text-three">Email drop Us</span>
                            <h5><a href="mailto:conbix@gmail.com">conbix@gmail.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emargency Help Area End -->
    <!-- Blog Area Start -->
    <div class="blog__one dark__image section-padding">
        <div class="container">
            <div class="row align-items-end mb-70">
                <div class="col-xl-7 col-lg-8 lg-mb-30">
                    <div class="blog__one-title lg-t-center">
                        <span class="subtitle-one">From the blog</span>
                        <h2>News & Articles</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 t-right lg-t-center">
                    <a class="btn-two" href="blog-grid-three.html">See more blog<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 xl-mb-30">
                    <div class="blog__one-item">
                        <div class="blog__one-item-image">
                            <a href="single-right-sidebar.html"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                            <div class="blog__one-item-image-date">
                                <span class="text-three">23</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__one-item-content">
                            <div class="blog__one-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">When a small business is just starting out,</a></h4>
                            <p>Experts say some good first steps in starting business are researching</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__one-item">
                        <div class="blog__one-item-image">
                            <a href="single-right-sidebar.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                            <div class="blog__one-item-image-date">
                                <span class="text-three">20</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__one-item-content">
                            <div class="blog__one-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Finances and accounting are one of the hardest</a></h4>
                            <p>Experts say some good first steps in starting business are researching</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog__one-item">
                        <div class="blog__one-item-image">
                            <a href="single-right-sidebar.html"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                            <div class="blog__one-item-image-date">
                                <span class="text-three">17</span>
                                <span class="text-five">Dec</span>
                            </div>
                        </div>
                        <div class="blog__one-item-content">
                            <div class="blog__one-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="single-right-sidebar.html">Despite the benefits of variety & opportunities,</a></h4>
                            <p>Experts say some good first steps in starting business are researching</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection

@section('js')

@endsection
