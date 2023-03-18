@extends('frontend.layouts.master')
@section('title') Job List @endsection
@section('css')
    <style>
        .text-flow {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
@endsection
@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">Jobs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item active">Jobs </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="banner-shapes">
            <div class="circle wow zoomInLeft delay-0-2s" data-wow-duration="2s"></div>
            <img class="shape-one" src="{{asset('assets/frontend/images/shapes/hero-shape1.png')}}" alt="Shape">
            <img class="shape-two" src="{{asset('assets/frontend/images/shapes/hero-shape2.png')}}" alt="Shape">
        </div>
    </section>
    <!-- Page Banner End -->
    <section class="blog-list-area py-130 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(count(@$alljobs) > 0)
                        @foreach($alljobs as $job)
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
{{--                                        <div class="text-flow">{!! $job->description !!}</div>--}}
                                        <a class="read-more" href="{{route('job.single',@$job->slug)}}">Read More <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $alljobs->links('vendor.pagination.default') }}
                    @else
                        <section class="no-results not-found">
                            <header class="page-header">
                                <h2 class="page-title">Nothing Found</h2>
                            </header>
                            <div class="page-content">
                                <p>Currently there are no active job posts available. Check again later !</p>

                            </div>
                        </section>
                    @endif
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.jobs.index_sidebar')
                </div>
            </div>

        </div>
    </section>




@endsection
@section('js')
    <!-- For Contact Form -->
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/contact-form-script.js')}}"></script>
@endsection
