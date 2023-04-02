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

    <div class="team__two section-padding">
        <div class="container">
            @if(count($teams) > 0)
            <div class="row">
                @foreach($teams as $team)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team__two-item">
                        <div class="team__two-item-image">
                            <img src="{{ ($team->image!==null) ? asset('/images/teams/'.$team->image): asset('assets/backend/images/users/user-dummy-img.jpg')}}" alt="">
                        </div>
                        <div class="team__two-item-content">
                            <h4><a href="#">{{ucfirst(@$team->name)}}</a></h4>
                            <span class="text-eight">{{ucfirst(@$team->post)}}</span>
                            <div class="team__two-item-content-social">
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection
@section('js')
@endsection
