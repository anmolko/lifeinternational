@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
    .single-post  .elementor-top-section {
        padding: 0;
    }
    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Life International Overseas @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleBlog->updated_at !=''){?>{{@$singleBlog->updated_at}} <?php }else {?> {{@$singleBlog->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @elseLife International Overseas @endif" />
    <meta property="og:image" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

    <div class="page__banner" data-background="{{asset('assets/frontend/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Blog</span>
                        <ul>
                            <li><a href="/">Home</a><span>|</span></li>
                            <li>{{ @$singleBlog->title }}</li>
                        </ul>
                        <h1>Blog detail</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    <div class="news__details-left">
                        <div class="news__details-left-meta">
                            <h3 class="">{{ ucwords(@$singleBlog->title) }}</h3>
                        </div>
                        <div class="dark__image">
                            <img class="img__full mb-30" src="{{ asset('/images/blog/'.@$singleBlog->image) }}" alt="">
                        </div>
                        <div class="content-area">
                            {!! $singleBlog->description !!}
                        </div>

                        <div class="row mt-45">
                            <div class="col-md-8 md-mb-15">
                                <div class="news__details-left-tag">
                                    <h6>Category:</h6>
                                    <ul>
                                        <li><a href="#">{{@$singleBlog->category->name }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news__details-left-share">
                                    <h6>Share:</h6>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f" onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")'></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    @include('frontend.pages.blogs.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
function fbShare(url) {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function twitShare(url, title) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, title) {
    message = title + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}
</script>
@endsection
