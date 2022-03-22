@extends('frontend.master')

@section('title')
    CONTACT | SheBa - Construction
@endsection

@section('content')
    <!-- Featured Title -->
    <div id="featured-title" class="featured-title clearfix">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="home.html" class="trail-begin">Home</a>
                            <span class="sep">|</span>
                            <span class="trail-end">Contact</span>
                        </div>
                    </div>
                </div>
                <div class="featured-title-heading-wrap">
                    <h1 class="feautured-title-heading">
                        Contact Us
                    </h1>
                </div>
            </div><!-- /.featured-title-inner-wrap -->
        </div><!-- /#featured-title-inner -->
    </div>
    <!-- End Featured Title -->

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- CONTACT -->
                        <div class="row-contact">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="themesflat-headings style-2 clearfix">
                                            <h2 class="heading">CONTACT US</h2>
                                            <div class="sep has-width w80 accent-bg clearfix"></div>
                                            <p class="sub-heading">Are you interested in finding out how SheBa Construction Services can make your project. For more information on our services please contact us.</p>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                        {{--<div class="alert alert-success" role="alert">--}}
                                        {{--<h1 class="text-center text-success">{{Session::get('mail')}}</h1>--}}
                                        {{--</div>--}}
                                        @if(session()->has('mail'))
                                            <div class="alert alert-success">
                                                {{ session()->get('mail') }}
                                            </div>
                                        @endif
                                        <div class="themesflat-contact-form style-2 clearfix">

                                            <form id="" action="{{route('contact-mail')}}" method="post" accept-charset="utf-8" class="form-submit contact-form wpcf7-form">
                                                @csrf


                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text" tabindex="1" id="name" name="name" value="{{old('name')}}" class="wpcf7-form-control" placeholder="Name*" >
                                                    <div class="form-group mb-0 mt-3 text-danger">
                                                    @error('name')
                                                    <strong>{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                    </span>



                                                <span class="wpcf7-form-control-wrap your-phone">
                                                        <input type="text" tabindex="2" id="phone" name="phone"
                                                               value="{{old('phone')}}" class="wpcf7-form-control" placeholder="Phone">
                                                     <div class="form-group mb-0 mt-3 text-danger">
                                                    @error('phone')
                                                    <strong>{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                    </span>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email" tabindex="3" id="email" name="email" value="{{old('email')}}" class="wpcf7-form-control" placeholder="Your Email*" >
                                                    <div class="form-group mb-0 mt-3 text-danger">
                                                    @error('email')
                                                    <strong>{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                    </span>
                                                <span class="wpcf7-form-control-wrap your-subject">
                                                        <input type="text" tabindex="4" id="subject" name="subject" value="{{old('subject')}}" class="wpcf7-form-control" placeholder="Subject">
                                                    <div class="form-group mb-0 mt-3 text-danger">
                                                    @error('subject')
                                                    <strong>{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                    </span>
                                                <span class="wpcf7-form-control-wrap your-message">
                                                       <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message*"  >{{old('message')}}</textarea>
                                                    <div class="form-group mb-0 mt-3 text-danger">
                                                    @error('message')
                                                    <strong>{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                    </span>
                                                <span class="wrap-submit">
                                                        <input type="submit" value="SEND US" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">

                                                    </span>
                                            </form>
                                        </div><!-- /.themesflat-contact-form -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                        <div class="themesflat-headings style-2 clearfix">
                                            <h2 class="heading">INFOMATION</h2>
                                            <div class="sep has-width w80 accent-bg clearfix"></div>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                        <div class="themesflat-tabs style-1 w168 clearfix">
                                            <ul class="tab-title clearfix">
                                                <li class="item-title active">
                                                    <span class="inner">Head Office</span>
                                                </li>
                                                <li class="item-title">
                                                    <span class="inner">Bangladesh</span>
                                                </li>
                                            </ul>

                                            <div class="tab-content-wrap clearfix">
                                                <div class="tab-content">
                                                    <div class="item-content">
                                                        <ul>
                                                            <li class="clearfix">
                                                                <div class="inner">
                                                                    <span class="fa fa-map-marker"></span>
                                                                    <span class="text">1376, CHOPSEY HILL ROAD BRIDGEPORT,CT-06606, USA</span>
                                                                </div>
                                                            </li>

                                                            <li class="clearfix">
                                                                <div class="inner">
                                                                    <span class="fa fa-phone"></span>
                                                                    <span class="text">CALL US : +1-203-231-5300 (USA)</span>
                                                                </div>
                                                            </li>

                                                            <li class="clearfix">
                                                                <div class="inner">
                                                                    <span class="fa fa-envelope"></span>
                                                                    <span class="text">EMAIL : info@shebaconstruction.com</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.tab-content -->
                                                <div class="tab-content">
                                                    <div class="item-content">
                                                        <ul>
                                                            <li class="clearfix">
                                                                <div class="inner">
                                                                    <span class="fa fa-map-marker"></span>
                                                                    <span class="text">House no 951, Road no 14 Avenue no 02, Mirpur DOHS Mirpur-12, Dhaka-1216 </span>
                                                                </div>
                                                            </li>

                                                            <li class="clearfix">
                                                                <div class="inner">
                                                                    <span class="fa fa-phone"></span>
                                                                    <span class="text">CALL US : (+880)1824570690</span>
                                                                </div>
                                                            </li>

                                                            <li class="clearfix">
                                                                <div class="inner">
                                                                    <span class="fa fa-envelope"></span>
                                                                    <span class="text">EMAIL : info@shebaconstruction.com</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.tab-content -->
                                            </div>
                                        </div><!-- /.themesflat-tabs -->
                                        <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="35" data-smobile="35"></div>
                                        <div class="themesflat-map"></div>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="60" data-smobile="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- END CONTACT -->
                    </div><!-- /.page-content -->
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->
@endsection

@section('js')

@endsection
