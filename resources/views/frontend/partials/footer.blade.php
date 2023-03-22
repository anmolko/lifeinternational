
<!-- Footer Top Area Start -->
<div class="footer__top">
    <img class="footer__top-shape" src="{{asset('assets/frontend/img/shape/footer.png')}}" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-8 lg-mb-30">
                <div class="footer__top-title lg-t-center">
                    <h2>Your Business Can Grow faster With Our Services</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <div class="footer__top-btn t-right lg-t-center">
                    <a class="btn-two" href="{{route('contact')}}">let's Work together<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Top Area End -->
<!-- Footer One Area Start -->
<div class="footer__one">
    <img class="footer__one-shape" src="{{asset('assets/frontend/img/shape/footer-bg.png')}}" alt="">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-7 xl-mb-30">
                <div class="footer__one-widget">
                    <div class="footer__one-widget-about">
                        <a href="#"><img src="{{ (@$setting_data->logo) ? asset('/images/settings/'.@$setting_data->logo):'' }}" alt=""></a>
                        <p>{!! ucfirst(@$setting_data->website_description ?? '') !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-5 sm-mb-30">
                @if(@$footer_nav_data1 !== null)
                    <div class="footer__one-widget border-one">
                        <h4>{{@$footer_nav_title1 ?? 'Our Solution'}} </h4>
                        <div class="footer__one-widget-solution">
                            <ul>
                                @foreach($footer_nav_data1 as $nav)
                                    @if(empty($nav->children[0]))
                                        <li>
                                            <a href="{{get_menu_url($nav->type, $nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                <i class="far fa-chevron-double-right"></i>
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="footer__one-widget border-one">
                    <h4>Head Office</h4>
                    <div class="footer__one-widget-location">
                        <div class="footer__one-widget-location-item">
                            <div class="footer__one-widget-location-item-icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__one-widget-location-item-info">
                                <a>{{@$setting_data->address}}</a>
                            </div>
                        </div>
                        <h6>Our Socials</h6>
                        <div class="footer__one-widget-about-social">
                            <ul>
                                @if(@$setting_data->facebook)
                                    <li><a href="{{@$setting_data->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if(@$setting_data->youtube)
                                    <li><a href="{{@$setting_data->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                @endif
                                @if(@$setting_data->instagram)
                                    <li><a href="{{@$setting_data->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <li><a href="{{@$setting_data->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-5">
                @if($footer_jobs)
                    <div class="footer__two-widget footer-border">
                    <h4>Latest Jobs</h4>
                    @foreach(@$footer_jobs as $job)
                        <div class="post__item">
                            <div class="post__item-image">
                                <a href="{{route('job.single',@$job->slug)}}">
                                    <img src="{{ ($job->image !== null) ? asset('/images/job/'.@$job->image): asset('assets/frontend/images/win.png')}}" alt="">
                                </a>
                            </div>
                            <div class="post__item-title">
                                <span><i class="far fa-calendar-alt"></i>
                                     @if(@$job->end_date >= $today)
                                       {{date('M j, Y',strtotime(@$job->end_date))}}
                                    @else
                                        Expired
                                    @endif
                                </span>
                                <h6>
                                    <a href="{{route('job.single',@$job->slug)}}">
                                        {{ ucfirst($job->name)}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="copyright__one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p>Copyright {{date("Y")}}  <a href="/">{{$setting_data->website_name ?? 'Life international Overseas'}}</a> - Developed by <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Techonology</a>. All right reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer One Area End -->
<!-- Scroll Btn Start -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
</div>
<!-- Scroll Btn End -->
<!-- Main JS -->
<script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- Counter Up JS -->
<script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<!-- Progressbar JS -->
<script src="{{asset('assets/frontend/js/progressbar.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Swiper Bundle JS -->
<script src="{{asset('assets/frontend/js/swiper-bundle.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
<!-- Mean Menu JS -->
<script src="{{asset('assets/frontend/js/jquery.meanmenu.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>
@yield('js')
@stack('scripts')
</body>
</html>
