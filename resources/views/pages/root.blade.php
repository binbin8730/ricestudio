@extends('layouts.app')
@section('title' , '首页')

@section('style')
    <link href="{{ asset('plugins/flexslider/flexslider.css') }}" rel="stylesheet">
@stop

@section('content')
<!-- ******PROMO****** -->
<section id="promo" class="promo section">
    <div class="container intro">
        <h2 class="title animated fadeInLeft delayp1">你需要的一切<br>让你的创业想法上线</h2>
        <p class="summary animated fadeInRight delayp3">
            水稻是一个后台基于Laravel的框架 ，前端基于Bootstrap的HTML5模板，专门用于帮助初创公司宣传他们的产品或服务.
        </p>
        <a class="btn btn-cta btn-cta-secondary" href="tour.html">了解更多</a>
    </div><!--//intro-->

    <div class="fixed-container">
        <div class="signup">
            <div class="container text-center">
                <h3 class="title">Try Tempo Free</h3>
                <p class="summary">Sign up to try Tempo FREE for 30 days! No credit card needed.</p>
                <form class="signup-form">
                    <div class="form-group">
                        <label class="sr-only" for="semail1">Your email</label>
                        <input type="email" id="semail1" name="semail1" class="form-control" placeholder="Enter your email address">
                    </div>
                    <button type="submit" class="btn btn-cta btn-cta-primary">SIGN UP</button>
                </form><!--//signup-form-->
            </div><!--//contianer-->
        </div><!--//signup-->
        <div class="social text-center">
            <div class="container">
                <span class="line">Love Tempo? Spread the word:</span>

                <!--//twitter tweet button code starts -->
                <div class="twitter-tweet">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_media" data-hashtags="bootstrap">Tweet</a>
                </div>
                <!--//twitter tweet button code ends -->

                <!--//facebook like button code starts-->
                <div class="fb-like" data-href="tempo/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                <!--//facebook like button code ends-->
            </div>
        </div><!--//social-->
    </div>
    <div class="bg-slider-wrapper">
        <div id="bg-slider" class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1 flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"></li>
                <li class="slide slide-2" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></li>
                <li class="slide slide-3" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->
</section>

<h1>这里是首页</h1>
<!--//promo-->
@stop

@section('script')
    <script src="{{ asset('plugins/flexslider/jquery.flexslider-min.js') }}"></script>
@stop
