@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper-custom.css')}}">

    <style>
    @media only screen and (min-width:768px){
        .counter-item.style-two {
            height: 400px;
        }


        .feature-item-four {
            height: 215px;
        }
    }

    .justified{
        text-align: justify;
    }
    .author.post-category i {
        font-size: 40px;
        margin-right: 15px;
    }

    .icon-different {
        color: white;
        font-size: 65px;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        display: inline-block;
        width: 120px;
        height: 120px;
        background: #2e3192;
        line-height: 120px;
        border-radius: 50%;
        text-align: center;
    }
    .text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
        line-clamp: 2;
        -webkit-box-orient: vertical;
    }


    .recruitement-process-circle { width: 500px; height: 500px; border-radius: 100%; margin: 0 auto; position: relative; }

    span.step-by i {
        font-family: 'FontAwesome';
    }
    .step-process { width: 100%; height: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; border-radius: 100%; z-index: 25; }
    .step-process  .step-by {
        display: block;
        width: 100px;
        height: 100px;
        position: absolute;
        border-radius: 50%;
        text-align: center;
        line-height: 100px;
        font-size: 40px;
        z-index: 3;
        cursor: pointer;
        background: rgb(252 101 60);
        background: linear-gradient(to right top, #27aae1, #229ed4, #1c93c6, #1688b9, #0f7dac);;
        color: #f6fbff;


    }

    .title-box .title small{
        color: #fff;
        font-size: 16px;
        line-height: 16px;
    }
    .round2 {
        position: absolute;
        left: -50px;
        top: -50px;
        width: 630px;
        height: 630px;
        border: 1px dashed #fff;
        border-radius: 100%;
        -webkit-animation: rotation 100s infinite linear;
        opacity: .4;
    }

    .step-process  .step-by .active-only { width: 56px; height: 56px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; }
    .step-process  .step-by .active-only::after { content: ''; width: 5px; height: 5px; border: 3px solid #fff; bottom: -31px; left: -14px; filter: blur(1px); position: absolute; border-radius: 100%; }
    .step-process  .step-by .active-only::before { content: ''; width: 6px; height: 6px; filter: blur(5px); top: -15px; position: absolute; transform: rotate(-45deg); border: 6px solid #fff; right: -39px; }
    .step-process  .step-by.active .active-only { display: block; }
    .main-circle { position: absolute; left: 40px; top: 45px; width: 430px; height: 430px; border: 2px solid #6AC6EC; border-radius: 100%; -webkit-animation: rotation 100s infinite linear; }
    .step-process .step-by:hover, .step-process .step-by.active {
        background: #f6fbff ;
        border: 2px dashed #1C96C8;
        color: #bec0c4
    }

    .step-process .step-by:hover, .step-process .step-by.active > i, .step-process .step-by:hover, .step-process .step-by.active > [class*=" flaticon-"]:before, .step-process .step-by:hover, .step-process .step-by.active > [class^="flaticon-"]:after, .step-process .step-by:hover, .step-process .step-by.active > [class*=" flaticon-"]:after {
        color:#1C96C8;
    }

    .step-process .step-by { font-size: 40px; }
    .contentCircle { width: 250px; border-radius: 100%; color: #fff; position: relative; top: 150px; left: 50%; transform: translate(-50%, -50%); }
    .contentCircle .process-item { border-radius: 100%;
        color: #fff; position: absolute;
        text-align: center; bottom: 0; left: 0; opacity: 0;
        transform: scale(0); transition: 0.5s; font-size: 15px;
        width: 100%; height: 100%; top: 0; right: 0;
        margin: auto; line-height: 150px; }


    .process-item.active { z-index: 1; opacity: 1; transform: scale(1); transition: 0.5s; }
    .contentCircle .process-item i { font-size: 180px; position: absolute; top: 0; left: 50%; margin-left: -90px; color: #fff; opacity: 0.1; }
    @media only screen and (min-width:300px) and (max-width:599px) {
        .recruitement-process-circle { width: 300px; height: 300px; margin: 110px auto; }
        .recruitement-process-circle::after { width: 100%; height: 100%; }
        .step-process { width: 100%; height: 100%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; }
        .recruitement-process-circle{display:none;}

    }
    @media only screen and (min-width:600px) and (max-width:767px) {  }
    @media only screen and (min-width:768px) and (max-width:991px) {  }

    @media only screen and (min-width:1200px) and (max-width:1499px) { }
    .title-box .title { font-weight: 600; letter-spacing: 2px; position: relative; z-index: -1;margin-top: 20px;font-size: 20px;margin-bottom: 10px; }
    .title-box span { text-shadow: 0 10px 10px rgba(0, 0, 0, .15); font-weight: 800; color: #57585c; }
    .title-box p {font-size:18px; line-height: 1.2em; color:#57585c}

    .bgc-black-with-lighting:after {
        top: 14%;
    }

    .bgc-black-with-lighting:before{
        left: -26%;
        top: 26%;
        filter: blur(100px);
    }

    .project-content{
        background: #16161c;
    }
    .project-content a, .service-head{
        color: #fff;
    }

    .design-feature-shapes .shape.wave-line{
        max-width: 18%;
    }
    .design-feature-shapes .shape.dots {
        top: 11%;
        right: 1%;
    }
</style>
@endsection
@section('content')

    @if(count($sliders) > 0)
        <!-- Slider Section Start -->
        <section class="main-slider-area bgc-black-with-lighting rel z-1">
            <div class="main-slider-active">
                @foreach(@$sliders as $slider)

                    <div class="slider-item">
                        <div class="container">
                            <div class="slider-content">
                                <span class="sub-title"> {{@$slider->subheading}}</span>
                                <h1> {{@$slider->heading}}</h1>
                                <div class="slider-btns">
                                    @if(@$slider->button)
                                        <a href="{{@$slider->link}}" class="theme-btn">{{@$slider->button}} <i class="fas fa-angle-double-right"></i></a>
                                    @endif

                                    @if(@$slider->button2)
                                        <a href="{{@$slider->link2}}" class="theme-btn style-three">{{@$slider->button2}} <i class="fas fa-angle-double-right"></i></a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="slider-video" style="background-image: url({{ asset('/images/sliders/'.$slider->image) }});">
                            @if(@$slider->slider_link)
                                <a href="{{@$slider->slider_link}}" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                            @endif

                            <span class="video-title cd-headline clip">
                                <span class="cd-words-wrapper">
                                    @if(@$slider->caption1)
                                        <b class="is-visible">{{@$slider->caption1}}</b>
                                    @endif
                                    @if(@$slider->caption2)

                                        <b>{{@$slider->caption2}}</b>
                                    @endif

                                </span>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container"><div class="main-slider-dots"></div></div>
            <div class="slider-shapes">
                <img class="shape dots one" src="{{asset('assets/frontend/images/shapes/slider-dots.png')}}" alt="Shape">
                <img class="shape dots two" src="{{asset('assets/frontend/images/shapes/slider-dots.png')}}" alt="Shape">
                <img class="shape wave-line" src="{{asset('assets/frontend/images/shapes/slider-wave-line.png')}}" alt="Shape">
                <img class="shape circle" src="{{asset('assets/frontend/images/shapes/slider-circle.png')}}" alt="Shape">
            </div>
        </section>
        <!-- Slider Section End -->
    @endif

    @if(!empty($homepage_info->welcome_description))
        <!-- Welcome section -->
        <section class="about-area-one pt-130 pb-125 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    @if(@$homepage_info->welcome_side_image == "left")

                        <div class="col-lg-5">
                            <div class="about-image-one bg-squire-shape rmb-85 wow fadeInUp delay-0-2s">
                                <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="About us">
                                <img class="image-left" src="{{asset('/assets/frontend/images/shapes/image-left.png')}}" alt="shape">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="about-content-one wow fadeInUp delay-0-4s">
                                <div class="section-title mb-45">
                                    @if(@$homepage_info->welcome_subheading)
                                        <span class="sub-title mb-15">{{@$homepage_info->welcome_subheading}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2>{{@$homepage_info->welcome_heading}}</h2>
                                    @endif

                                </div>

                                <div class="content">
                                    <p class="win-justify">
                                    {{ ucfirst(@$homepage_info->welcome_description) }}
                                    </p>
                                    @if(@$homepage_info->welcome_button)

                                        <a href="{{@$homepage_info->welcome_link}}" class="theme-btn mt-15" tabindex="0">{{ucwords(@$homepage_info->welcome_button)}} <i class="fas fa-angle-double-right"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>

                    @else
                        <div class="col-xl-6 col-lg-7">
                            <div class="about-content-one wow fadeInUp delay-0-4s">
                                <div class="section-title mb-45">
                                    @if(@$homepage_info->welcome_subheading)
                                        <span class="sub-title mb-15">{{@$homepage_info->welcome_subheading}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2>{{@$homepage_info->welcome_heading}}</h2>
                                    @endif

                                </div>

                                <div class="content">
                                    <p class="win-justify">
                                    {{ ucfirst(@$homepage_info->welcome_description) }}
                                    </p>
                                    @if(@$homepage_info->welcome_button)

                                        <a href="{{@$homepage_info->welcome_link}}" class="theme-btn mt-15" tabindex="0">{{ucwords(@$homepage_info->welcome_button)}} <i class="fas fa-angle-double-right"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-image-one bg-squire-shape rmb-85 wow fadeInUp delay-0-2s">
                                <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="About us">
                                <img class="image-left" src="{{asset('/assets/frontend/images/shapes/image-left.png')}}" alt="shape">
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>
        <!-- Welcome end -->
    @endif

    @if(!empty($homepage_info->mv_heading))

        <!-- Mission Vision start -->
        <section class="statistics-area-three bgs-cover pb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7">
                        <div class="statistics-three-content rmb-65 wow fadeInRight delay-0-2s">
                            <div class="row justify-content-center justify-content-xl-start">
                                <div class="col-xl-9">
                                    <div class="section-title mb-60">
                                        @if(@$homepage_info->mv_subheading)
                                            <span class="sub-title mb-15">{{ucfirst(@$homepage_info->mv_subheading)}}</span>
                                        @endif
                                        @if(@$homepage_info->mv_heading)
                                            <h2>{{ucwords(@$homepage_info->mv_heading)}}</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-3s">
                                        <i class="flaticon-startup"></i>
                                        <span class="counter-title">Mission</span>
                                        <p class="win-justify">{{ ucfirst(@$homepage_info->mission) }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-5s">
                                        <i class="fas fa-eye"></i>

                                        <span class="counter-title">Vision</span>
                                        <p class="win-justify">{{ ucfirst(@$homepage_info->vision) }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-7s">
                                        <i class="flaticon-global"></i>

                                        <span class="counter-title">Value</span>
                                        <p class="win-justify">{{ ucfirst(@$homepage_info->value) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="statistics-three-image bg-squire-shape mb-30 wow fadeInLeft delay-0-3s">
                            <img src="<?php if(!empty(@$homepage_info->mv_image)){ echo '/images/home/welcome/'.@$homepage_info->mv_image; } ?>" alt="mission vision">
                            <img class="image-right" src="{{asset('/assets/frontend/images/shapes/image-right.png')}}" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mission Vision end -->
    @endif

    @if(!empty($homepage_info->action_heading))
        <!-- CTA Area start -->
        <section class="call-to-action-area rel z-1">
            <div class="container">
                <div class="cta-inner bgs-cover" style="background-image: url({{asset('/assets/frontend/images/background/cta-bg.jpg')}});">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="cta-item wow fadeInLeft delay-0-2s">
                                <div class="icon"><i class="flaticon-target"></i></div>
                                <h4>{{@$homepage_info->action_heading}}</h4>
                                <a href="{{@$homepage_info->action_link}}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="cta-item wow fadeInRight delay-0-2s">
                                <div class="icon"><i class="flaticon-target"></i></div>
                                <h4>{{@$homepage_info->action_heading2}}</h4>
                                <a href="{{@$homepage_info->action_link2}}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area end -->
    @endif

    @if(!empty($homepage_info->core_main_heading))
        <!-- Core value start -->
        <section class="feature-area-four pb-100 pt-200 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                    <span class="sub-title style-two mb-15">Amazing  Features</span>
                    <h2>{{ucwords(@$homepage_info->core_main_heading)}}</h2>
                    <p>{{ucfirst(@$homepage_info->core_main_description)}}</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-3s">
                            <h4><i class="fas fa-handshake"></i><a href="">{{ucwords(@$homepage_info->core_heading1)}}</a></h4>
                            <p class="win-justify">{{ucfirst(@$homepage_info->core_description1)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-5s">
                            <h4><i class="fas fa-balance-scale"></i><a href="">{{ucwords(@$homepage_info->core_heading2)}}</a></h4>
                            <p class="win-justify">{{ucfirst(@$homepage_info->core_description2)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-7s">
                            <h4><i class="far fa-heart"></i><a href="">{{ucwords(@$homepage_info->core_heading3)}}</a></h4>
                            <p class="win-justify">{{ucfirst(@$homepage_info->core_description3)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-3s">
                            <h4><i class="fas fa-handshake"></i><a href="">{{ucwords(@$homepage_info->core_heading4)}}</a></h4>
                            <p class="win-justify">{{ucfirst(@$homepage_info->core_description4)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-5s">
                            <h4><i class="fas fa-chart-network"></i><a href="">{{ucwords(@$homepage_info->core_heading5)}}</a></h4>
                            <p class="win-justify">{{ucfirst(@$homepage_info->core_description5)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-7s">
                            <h4><i class="fas fa-user-shield"></i><a href="">{{ucwords(@$homepage_info->core_heading6)}}</a></h4>
                            <p class="win-justify">{{ucfirst(@$homepage_info->core_description6)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core value end -->
    @endif

    @if(count($director) > 0)
        <section class="project-area-three pt-80 pb-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg10">
                    <div class="section-title text-center mb-100 wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <span class="sub-title mb-15">Up Close</span>
                        <h2>Message From Director</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-9 col-md-6 item ">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($director as $managing)
                                <div class="swiper-slide">
                                    <div class="img img-1" style=" background-image: url({{asset('/images/director/'.@$managing->image)}}) ">
                                    </div>
                                    <div class="name">{{ucfirst($managing->heading)}}</div>
                                    <div class="title">{{ucfirst($managing->designation)}}</div>
                                    <div class="desc">
                                        {{$managing->description}}
                                    </div>
                                    @if($managing->link !== null)
                                        <div class="director-button">
                                            <a class="link theme-btn style-three" href="{{$managing->link}}" > {{ ($managing->button !== null) ? ucfirst($managing->button):"Read More" }} <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    @endif

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(count($latestServices) > 2)
        <!-- Services start -->
        <section class="project-area-three pt-100 bgc-black-with-lighting pb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg10">
                        <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Win Services</span>
                            <h2 class="service-head">Our latest services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-three-active">
                @foreach(@$latestServices as $service)

                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-iamge">
                            <img src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="Project">
                            <div class="project-over">
                                <a class="details-btn" href="{{route('service.single',$service->slug)}}"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="design-feature-shapes">
                <img class="shape dots" src="{{asset('assets/frontend/images/shapes/slider-dots.png')}}" alt="Shape">
                <img class="shape wave-line" src="{{asset('assets/frontend//images/shapes/feature-wave-line.png')}}" alt="Shape">
            </div>
        </section>
        <!-- Services  end -->
    @endif

    @if(!empty($homepage_info->what_heading1))
        <!-- What make us different start -->
        <section class="work-process-area {{ (count($servicecategory) > 2) ? "bgc-lighter bgs-cover":""  }} pt-80 pb-95 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Our Strength</span>
                            <h2>What makes us difference?</h2>
                        </div>
                    </div>
                </div>
                <div class="work-process-wrap rel z-1">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-5 col-sm-6">
                            <div class="work-process-item mt-55 wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <span class="number">01</span>
                                    <div class="icon-different">
                                        <img src="<?php if(!empty(@$homepage_info->what_image1)){ echo '/images/home/welcome/'.@$homepage_info->what_image1; } ?>" alt="different">
                                    </div>
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading1)}}</h4>

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <span class="number">02</span>
                                    <div class="icon-different">
                                     <img src="<?php if(!empty(@$homepage_info->what_image2)){ echo '/images/home/welcome/'.@$homepage_info->what_image2; } ?>" alt="different">
                                    </div>

                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading2)}}</h4>

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item my-5 wow fadeInUp delay-0-6s">
                                <div class="icon">
                                    <span class="number">03</span>
                                    <div class="icon-different">
                                        <img src="<?php if(!empty(@$homepage_info->what_image3)){ echo '/images/home/welcome/'.@$homepage_info->what_image3; } ?>" alt="different">
                                    </div>

                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading3)}}</h4>

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item mt-80 wow fadeInUp delay-0-8s">
                                <div class="icon">
                                    <span class="number">04</span>
                                    <div class="icon-different">
                                    <img src="<?php if(!empty(@$homepage_info->what_image4)){ echo '/images/home/welcome/'.@$homepage_info->what_image4; } ?>" alt="different">
                                    </div>
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading4)}}</h4>

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item mt-45 wow fadeInUp delay-0-8s">
                                <div class="icon">
                                    <span class="number">05</span>
                                    <div class="icon-different">
                                    <img src="<?php if(!empty(@$homepage_info->what_image5)){ echo '/images/home/welcome/'.@$homepage_info->what_image5; } ?>" alt="different">
                                    </div>
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading5)}}</h4>

                            </div>
                        </div>
                    </div>
                    <div class="work-process-shape">
                        <img src="{{asset('/assets/frontend/images/shapes/worp-process-step.png')}}" alt="Shape">
                    </div>
                </div>
            </div>
        </section>
        <!-- What make us different end -->
    @endif

    @if(count($servicecategory) > 2)
    <section class="shop-page-area py-130 rel z-1">
        <div class="container">
            <div class="row justify-content-center pb-20">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-30 wow fadeInUp delay-0-2s">
                        <span class="sub-title style-two mb-15">Win Recruitment Service</span>
                        <h2>Categories We Provide</h2>
                    </div>
                </div>
            </div>
            <div class="categories-service-active wow fadeInUp delay-0-2s">
                @foreach($servicecategory as $service)
                <div class="col-xl-4 item col-md-6" style="margin-left: 20px;margin-right: 20px;">
                    <div class="product-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{asset('/images/service_categories/thumb/thumb_'.@$service->image)}}" alt="Product">
                        </div>
                        <div class="content">
                            <h5><a href="{{route('category.single',$service->slug)}}">{{$service->name}}</a></h5>
                            <div class="admin-ratting">
                                <span class="admin text">{{@$service->short_description}}</span>
                            </div>
                            <div class="price-details-btn">
                                <a href="{{route('category.single',$service->slug)}}" class="theme-btn">View Details <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    @endif

    @if(count($latestJobs) > 1)
        <!-- Blog Area start -->
        <section class="news-blog-area  pb-75 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Explore more </span>
                            <h2>Our Latest Job Demands</h2>
                        </div>
                    </div>
                </div>
                <div class="row large-gap">
                    @foreach(@$latestJobs as $job)
                        <div class="col-lg-6">
                            <div class="blog-list-item wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="image" style="height: auto;align-self: auto;width: 300px;">
                                <img src="{{ ($job->image !== null) ? asset('/images/job/'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="{{$job->name}}" style="object-fit: cover;height: 100%;">
                            </div>
                            <div class="blog-content">
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="far fa-calendar-alt"></i>
                                            <a href="{{route('job.single',@$job->slug)}}">
                                                @if(@$job->end_date >= $today)
                                                    {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                                @else
                                                    Expired
                                                @endif
                                            </a>
                                        </li>
                                    </ul>
                                    <h4><a href="{{route('job.single',@$job->slug)}}">{{ ucfirst($job->name)}}</a></h4>
                                    <a class="read-more" href="{{route('job.single',@$job->slug)}}">Read More <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    <div class="flex-wrap  wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp; text-align: center">
                        <a href="{{route('job.list')}}" class="theme-btn mt-15" tabindex="0">View all Jobs <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
    @endif

    @if(!empty($homepage_info->why_heading))
        <!-- Why US start -->
        <section class="statistics-area-two bgc-lighter bgs-cover pt-130 pb-100 rel z-1" style="background-image: url({{asset('/assets/frontend/images/features/support-features-bg.png')}});">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="statistics-two-content mb-30 rmb-35 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title style-two mb-15">{{ucwords(@$homepage_info->why_subheading)}}</span>
                                <h2>{{ucwords(@$homepage_info->why_heading)}}</h2>
                            </div>
                            <p class="win-justify">{{ucfirst(@$homepage_info->why_description)}}</p>
                            @if(@$homepage_info->why_button)

                                <a href="{{@$homepage_info->why_link}}" class="theme-btn mt-15">{{@$homepage_info->why_button}} <i class="fas fa-angle-double-right"></i></a>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="statistics-two-counters mt-30">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                    <div class="counter-item counter-text-wrap wow fadeInLeft delay-0-2s">
                                        <i class="flaticon-startup"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->project_completed}}">0</span>
                                        <span class="counter-title">Projects Completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                     <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-5s">
                                        <i class="fas fa-user-check"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->visa_approved}}">0</span>
                                        <span class="counter-title">Visa Approved</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6 offset-xl-1">
                                    <div class="counter-item counter-text-wrap wow fadeInLeft delay-0-2s">
                                        <i class="fal fa-smile"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->happy_clients}}">0</span>
                                        <span class="counter-title">Happy Clients</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                    <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-5s">
                                        <i class="fas fa-thumbs-up"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->success_stories}}">0</span>
                                        <span class="counter-title">Success Stories</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why US end -->
    @endif

    @if(count($clients) > 0)
        <!-- Features Area start -->
        <section class="features-area pt-130 pb-100 rel z-1 ">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <span class="sub-title mb-15">Win Recruitment special</span>
                    <h2><a href="/clients" >Our Valuable Clients</a></h2>
                </div>
                <div class="row client-active">
                    @foreach($clients as $client)
                        <div class="col" style="margin: 0 20px 0 20px;">
                            <div class="feature-item wow fadeInUp delay-0-2s">
                                <div class="image" style="    height: 155px;padding: 70px;">
                                    <img src="{{asset('/images/clients/'.@$client->image)}}" alt="{{$client->name}}">
                                </div>
                                <h5><a href="{{ ($client->link !== null) ? $client->link:'#' }}" style="color: white" target="{{ ($client->link !== null) ? '_blank':'' }}">{{$client->name}}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Features Area end -->
    @endif

    @if(count($testimonials) > 1)
    <!-- Testimonial Area Start -->
    <section class="testimonial-area-two rel z-1 pt-130 pb-100" >
        <div class="container for-middle-border">
            <div class="row justify-content-between align-items-center pb-90 rpb-35 wow fadeInUp delay-0-2s">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title mb-15">Win Recruit Testimonials</span>
                        <h2><a href="/testimonial">Feedback From Clients</a></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="slider-arrow-btns text-lg-end">
                        <button class="work-prev"><i class="far fa-arrow-left"></i></button>
                        <button class="work-next"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="testimonial-two-active">

                @foreach($testimonials as $testimonial)
                <div class="testimonial-item-two wow fadeInUp delay-0-2s">
                    <div class="testimonial-author">
                        <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="Author">
                    </div>
                    <div class="testimonial-content">
                        <p>{!! @$testimonial->description !!}</p>
                        <div class="author-description">
                            <span class="h5">{{ucwords($testimonial->name)}}</span>
                            <span class="designation">{{ucwords($testimonial->position)}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="wave-shapes">
            <img class="shape one" src="{{asset('assets/frontend/images/shapes/mission-v4.png')}}" alt="Wave Shape">
            <img class="shape two" src="{{asset('assets/frontend/images/shapes/mission-v5.png')}}" alt="Wave Shape">
        </div>
    </section>
    <!-- Testimonial Area End -->
    @endif

    @if(@$recruitments[0]->description)
        <!-- About Area start -->
        <section class="about-area py-130 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="reasons__left">
                            <div class="recruitement-process-circle">

                                <div class="main-circle"></div>

                                <div class="step-process" >

                                    @foreach(@$recruitments as $recruitment)
                                        <span class="step-by step-by{{@$loop->iteration}}" data-tab="{{@$loop->iteration}}" ><i class="fa fa-{{@$recruitment->icon}}"></i><span class="active-only"></span></span>
                                    @endforeach

                                </div>

                                <div class="contentCircle">
                                    @foreach(@$recruitments as $recruitment)
                                        <div class="process-item title-box process-item{{@$loop->iteration}}">
                                            <h2 class="title"><span>{{ucwords(@$recruitment->title)}}</span> </h2>
                                            <p><small>{{ucfirst(@$recruitment->icon_description)}} </small></p>
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content wow fadeInUp delay-0-4s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Win Recruitment's procedure </span>
                                <h2>{{ ucwords(@$recruitments[0]->heading)}}</h2>
                            </div>
                            <p class="justified">
                                {{ucfirst(@$recruitments[0]->description)}}
                            </p>
                            @if(@$recruitments[0]->link)
                                <a href="{{@$recruitments[0]->link}}" class="theme-btn mt-15">Learn More <i class="fas fa-angle-double-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
    @endif

    @if(count($latestPosts) > 1)
        <!-- Blog Area start -->
        <section class="news-blog-area pt-130 pb-75 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Get Every Updates</span>
                            <h2>Read Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row large-gap">
                    @foreach(@$latestPosts as $post)

                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="Blog">
                                </div>
                                <div class="content">
                                    <span class="date"><i class="far fa-calendar-alt"></i> {{date('M j, Y',strtotime(@$post->created_at))}}</span>
                                    <h4><a href="{{route('blog.single',$post->slug)}}" class="text">{{ucfirst($post->title)}}</a></h4>
                                    <div class="author post-category">
                                        <i class="fas fa-tasks-alt"></i>
                                        <div class="post-by">
                                            <span>Post Category</span>
                                            <a href="{{url('/blog/categories/'.@$post->category->slug)}}">{{ucfirst(@$post->category->name)}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex-wrap  wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp; text-align: center">
                        <a href="/blog" class="theme-btn mt-15" tabindex="0">View all Blogs <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
    @endif

    @if(@$setting_data->grievance_heading)
        <section class="about-area py-130 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-content wow fadeInUp delay-0-4s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Win Recruitment's Policy </span>
                                <h2>{{ucwords(@$setting_data->grievance_heading)}}</h2>
                            </div>
                            <p class="justified">
                                {{ ucfirst(@$setting_data->grievance_description) }}
                            </p>
                            @if(@$setting_data->whatsapp)
                                <p class="grieve-social"><i class="fab fa-fa-whatsapp fa-whatsapp"></i> {{@$setting_data->whatsapp}}</p>
                            @endif
                            @if(@$setting_data->viber)
                                <p class="grieve-social">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 35 35" version="1.1">
                                        <g id="surface1">
                                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(4,80,124);fill-opacity:1;" d="M 30.351562 3.410156 C 29.484375 2.609375 25.96875 0.0625 18.136719 0.0273438 C 18.136719 0.0273438 8.902344 -0.527344 4.402344 3.601562 C 1.898438 6.105469 1.019531 9.773438 0.921875 14.320312 C 0.828125 18.867188 0.710938 27.382812 8.921875 29.695312 L 8.929688 29.695312 L 8.921875 33.222656 C 8.921875 33.222656 8.867188 34.652344 9.808594 34.9375 C 10.945312 35.292969 11.613281 34.207031 12.703125 33.039062 C 13.296875 32.394531 14.117188 31.453125 14.738281 30.734375 C 20.359375 31.207031 24.671875 30.125 25.164062 29.96875 C 26.296875 29.601562 32.71875 28.78125 33.757812 20.261719 C 34.835938 11.472656 33.234375 5.921875 30.351562 3.410156 Z M 31.300781 19.617188 C 30.421875 26.726562 25.21875 27.179688 24.261719 27.488281 C 23.851562 27.617188 20.054688 28.5625 15.292969 28.253906 C 15.292969 28.253906 11.738281 32.539062 10.628906 33.652344 C 10.265625 34.015625 9.871094 33.980469 9.878906 33.265625 C 9.878906 32.792969 9.90625 27.40625 9.90625 27.40625 C 9.898438 27.40625 9.898438 27.40625 9.90625 27.40625 C 2.945312 25.476562 3.355469 18.226562 3.429688 14.429688 C 3.507812 10.636719 4.226562 7.527344 6.34375 5.433594 C 10.152344 1.984375 17.992188 2.496094 17.992188 2.496094 C 24.617188 2.523438 27.789062 4.519531 28.527344 5.1875 C 30.96875 7.28125 32.210938 12.285156 31.300781 19.617188 Z M 21.800781 14.09375 C 21.828125 14.683594 20.945312 14.722656 20.917969 14.136719 C 20.84375 12.632812 20.140625 11.902344 18.6875 11.820312 C 18.101562 11.785156 18.15625 10.902344 18.738281 10.9375 C 20.644531 11.039062 21.703125 12.132812 21.800781 14.09375 Z M 23.1875 14.867188 C 23.257812 11.96875 21.445312 9.699219 18.007812 9.445312 C 17.425781 9.40625 17.484375 8.523438 18.066406 8.566406 C 22.03125 8.851562 24.144531 11.578125 24.070312 14.886719 C 24.0625 15.476562 23.171875 15.449219 23.1875 14.867188 Z M 26.398438 15.785156 C 26.40625 16.371094 25.519531 16.378906 25.519531 15.789062 C 25.476562 10.21875 21.765625 7.183594 17.261719 7.148438 C 16.679688 7.144531 16.679688 6.269531 17.261719 6.269531 C 22.296875 6.300781 26.351562 9.78125 26.398438 15.785156 Z M 25.628906 22.492188 L 25.628906 22.503906 C 24.890625 23.804688 23.507812 25.238281 22.085938 24.78125 L 22.074219 24.757812 C 20.628906 24.355469 17.234375 22.605469 15.085938 20.898438 C 13.980469 20.023438 12.96875 18.992188 12.1875 18 C 11.484375 17.117188 10.773438 16.070312 10.082031 14.8125 C 8.625 12.183594 8.304688 11.007812 8.304688 11.007812 C 7.847656 9.585938 9.277344 8.203125 10.582031 7.464844 L 10.59375 7.464844 C 11.222656 7.136719 11.824219 7.246094 12.230469 7.730469 C 12.230469 7.730469 13.078125 8.742188 13.4375 9.242188 C 13.78125 9.707031 14.238281 10.453125 14.476562 10.871094 C 14.894531 11.613281 14.636719 12.375 14.226562 12.6875 L 13.40625 13.34375 C 12.988281 13.679688 13.042969 14.300781 13.042969 14.300781 C 13.042969 14.300781 14.257812 18.902344 18.804688 20.0625 C 18.804688 20.0625 19.425781 20.117188 19.761719 19.703125 L 20.417969 18.882812 C 20.734375 18.46875 21.492188 18.210938 22.238281 18.628906 C 23.242188 19.195312 24.519531 20.078125 25.367188 20.875 C 25.847656 21.265625 25.957031 21.859375 25.628906 22.492188 Z M 25.628906 22.492188 "/>
                                        </g>
                                    </svg> {{@$setting_data->viber}}</p>
                            @endif
                            @if(@$setting_data->email)
                                <p class="grieve-social"><i class="fas fa-envelope"></i> {{@$setting_data->email}}</p>
                            @endif
                            @if(@$setting_data->grievance_button)
                                <a href="{{@$setting_data->grievance_link}}" class="theme-btn mt-15">{{ucwords(@$setting_data->grievance_button)}} <i class="fas fa-angle-double-right"></i></a>
                            @endif
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="reasons__left">
                            @if(@$setting_data->google_map)
                                <iframe frameborder="0" width="100%" height="660px"scrolling="no" marginheight="0" marginwidth="0" src="{{@$setting_data->google_map}}"
                                        title="%3$s" aria-label="%3$s"></iframe>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@section('js')
    <script src="{{asset('assets/frontend/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript">
        let i=2;
        $(document).ready(function(){
            var radius = 300;
            var fields = $('.step-by');
            var container = $('.step-process');
            var width = container.width();
            radius = width/2.4;

            var height = container.height();
            var angle = 0, step = (2*Math.PI) / fields.length;
            fields.each(function() {
                var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
                var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
                if(window.console) {
                    console.log($(this).text(), x, y);
                }

                $(this).css({
                    left: x + 'px',
                    top: y + 'px'
                });
                angle += step;
            });


            $('.step-by').click(function(){

                var dataTab= $(this).data("tab");
                $('.step-by').removeClass('active');
                $(this).addClass('active');
                $('.process-item').removeClass('active');
                $( '.process-item'+ dataTab).addClass('active');
                i=dataTab;

                $('.step-process').css({
                    "transform":"rotate("+(360-(i-1)*36)+"deg)",
                    "transition":"2s"
                });
                $('.step-by').css({
                    "transform":"rotate("+((i-1)*36)+"deg)",
                    "transition":"1s"
                });


            });

            setInterval(function(){
                var dataTab= $('.step-by.active').data("tab");
                var total = "{{count(@$recruitments)}}"
                if(dataTab>total||i>total){
                    dataTab=1;
                    i=1;
                }
                $('.step-by').removeClass('active');
                $('[data-tab="'+i+'"]').addClass('active');
                $('.process-item').removeClass('active');
                $( '.process-item'+i).addClass('active');
                i++;


                $('.step-process').css({
                    "transform":"rotate("+(360-(i-2)*36)+"deg)",
                    "transition":"2s"
                });
                $('.step-by').css({
                    "transform":"rotate("+((i-2)*36)+"deg)",
                    "transition":"1s"
                });

            }, 5000);

        });

        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            waitForTransition: true,
            speed:1100,
            // autoplay: {
            //     delay: 7000,
            // },
            reverseDirection: true,
            pauseOnMouseEnter: true

        });
    </script>
@endsection
