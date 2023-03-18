<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conbix - Business Consulting HTML5 Template">
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template">
    <meta name="author" content="ThemeOri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>Conbix - Business Consulting HTML5 Template</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/img/favicon-1.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/swiper-bundle.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/meanmenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/sass/style.css')}}">
</head>

<body>
<!-- Dark Light Start -->
<div class="switch__tab">
    <span class="switch__tab-btn active light-mode-title">Light</span>
    <span class="mode__switch" onclick="darkLight()"><span></span></span>
    <span class="switch__tab-btn dark-mode-title">Dark</span>
</div>
<!-- Dark Light End -->
<!-- Top Bar Start -->
<div class="top__bar">
    <div class="container custom__container">
        <div class="row">
            <div class="col-xl-5 col-md-6">
                <div class="top__bar-left">
                    <a href="#"><i class="far fa-map-marker-alt"></i>8502 Preston Rd. Inglewood, Maine 98380</a>
                </div>
            </div>
            <div class="col-xl-7 col-md-6">
                <div class="top__bar-right">
                    <a href="mailto:conbix@gmail.com"><i class="fas fa-envelope"></i>conbix@gmail.com</a>
                    <div class="top__bar-right-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->
<!-- Header Area Start -->
<div class="header__area header__sticky">
    <div class="container custom__container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="index.html"><img class="dark-n" src="{{asset('assets/frontend/img/logo-1.png')}}" alt=""><img class="light-n" src="{{asset('assets/frontend//img/logo-2.png')}}" alt=""></a>
                </div>
            </div>
            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu menu-responsive">
                    <ul id="mobilemenu">
                        <li class="menu-item-has-children"><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-two.html">Home 02</a></li>
                                <li><a href="index-three.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li class="menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Services 01</a></li>
                                        <li><a href="services-two.html">Services 02</a></li>
                                        <li><a href="services-right-sidebar.html">Single Right Sidebar</a></li>
                                        <li><a href="services-left-sidebar.html">Single Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing.html">Price Plans</a></li>
                                <li><a href="faq.html">FAQ's</a></li>
                                <li><a href="testimonial.html">Testimonials</a></li>
                                <li class="menu-item-has-children"><a href="#">Teams</a>
                                    <ul class="sub-menu">
                                        <li><a href="team-filter.html">Team Filter</a></li>
                                        <li><a href="team.html">Team 01</a></li>
                                        <li><a href="team-two.html">Team 02</a></li>
                                        <li><a href="team-three.html">Team 03</a></li>
                                        <li><a href="team-single.html">Team Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="request-quote.html">Request Quote</a></li>
                                <li><a href="404-error.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Project</a>
                            <ul class="sub-menu">
                                <li><a href="project-filter.html">Project Filter</a></li>
                                <li class="menu-item-has-children"><a href="#">Project Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-two.html">2 Columns</a></li>
                                        <li><a href="project-three.html">3 Columns</a></li>
                                        <li><a href="project-four.html">4 Columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="project-single.html">Project Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-two.html">2 Columns</a></li>
                                        <li><a href="blog-grid-three.html">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog Standard</a>
                                    <ul class="sub-menu">
                                        <li><a href="standard-left-sidebar.html">Left SideBar</a></li>
                                        <li><a href="standard-full-width.html">Full Width</a></li>
                                        <li><a href="standard-right-sidebar.html">Right SideBar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-left-sidebar.html">Left SideBar</a></li>
                                        <li><a href="single-full-width.html">Full Width</a></li>
                                        <li><a href="single-right-sidebar.html">Right SideBar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Contact</a>
                            <ul class="sub-menu">
                                <li><a href="contact.html">Contact Style 01</a></li>
                                <li><a href="contact-two.html">Contact Style 02</a></li>
                                <li><a href="contact-three.html">Contact Style 03</a></li>
                                <li><a href="contact-four.html">Contact Style 04</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-box-search">
                        <div class="search">
                            <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                        </div>
                        <div class="header__area-menubar-right-box-search-box">
                            <form>
                                <input type="search" placeholder="Search Here.....">
                                <button type="submit"><i class="fal fa-search"></i>
                                </button>
                            </form> <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-sidebar">
                        <div class="header__area-menubar-right-sidebar-popup-icon"><img src="{{asset('assets/frontend/img/icon/menu.png')}}" alt=""></div>
                    </div>
                    <div class="header__area-menubar-right-box-btn">
                        <a class="btn-one" href="request-quote.html">Request quote<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- sidebar Menu Start -->
                    <div class="header__area-menubar-right-sidebar-popup">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo">
                            <a href="index.html"> <img src="{{asset('assets/frontend/img/logo-2.png')}}" alt=""> </a>
                        </div>
                        <p>Morbi et tellus imperdiet, aliquam nulla sed, dapibus erat. Aenean dapibus sem non purus venenatis vulputate. Donec accumsan eleifend blandit. Nullam auctor ligula</p>
                        <div class="header__area-menubar-right-box-sidebar-popup-contact">
                            <h4 class="mb-30">Get In Touch</h4>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt icon-animation"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Call Now</span>
                                    <h6><a href="tel:+125(895)658568">+125 (895) 658 568</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Quick Email</span>
                                    <h6><a href="mailto:info.help@gmail.com">info.help@gmail.com</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Office Address</span>
                                    <h6><a href="#">PV3M+X68 Welshpool United Kingdom</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- sidebar Menu Start -->
                </div>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->
<!-- Banner Area Start -->
