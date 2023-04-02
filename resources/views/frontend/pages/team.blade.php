@extends('frontend.layouts.master')
@section('title') Team @endsection
@section('css')
    <style>
        .team-member:after{
            height: 340px;
        }
    </style>
@endsection
@section('content')
    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Tean=m</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>List</li>
                        </ul>
                        <h1>Teams</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team__area section-padding dark__image">
        <div class="container">
            @if(count($teams) > 0)
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="team__area-item">
                            <div class="team__area-item-image">
                                <img src="{{ ($team->image!==null) ? asset('/images/teams/'.$team->image): asset('assets/backend/images/users/user-dummy-img.jpg')}}">
                                <div class="team__area-item-image-icon page">
                                    <div class="team__area-item-image-social">
                                        <ul>
                                            @if(!empty(@$team->fb))
                                                <li><a href="{{$team->fb}}"><i class="fab fa-facebook-f"></i></a></li>
                                            @endif
                                            @if(!empty(@$team->twitter))
                                                <li><a href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                            @endif
                                            @if(!empty(@$team->linkedin))
                                                <li><a href="{{$team->twitter}}"><i class="fab fa-linkedin"></i></a></li>
                                            @endif
                                            @if(!empty(@$team->insta))
                                                <li><a href="{{$team->twitter}}"><i class="fab fa-instagram"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <span><i class="fas fa-share-alt"></i></span>
                                </div>
                            </div>
                            <div class="team__area-item-content page">
                                <h5><a>{{ucfirst(@$team->name)}}</a></h5>
                                <span class="text-eight">{{ucfirst(@$team->post)}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-70">
                    <div class="col-xl-12 t-center">
                        <h6>Consulting With our Expert Team Members <a href="{{route('contact')}}">schedule meeting</a></h6>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
@section('js')
@endsection
