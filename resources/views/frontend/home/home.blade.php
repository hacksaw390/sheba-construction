@extends('frontend.master')

@section('title')
    HOME | SheBa - Construction
@endsection

@section('content')
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- SLIDER -->
                    @include('frontend.home.slider')
                        <!-- END SLIDER -->

                        <!-- ICONBOX -->
                    @include('frontend.home.best-choose')
                        <!-- END ICONBOX -->

                        <!-- ABOUT -->
                    @include('frontend.home.welcome')
                        <!-- END ABOUT -->
                        <!-- PROJECT -->
                    @include('frontend.home.project')
                        <!-- END PROJECT -->

                        <!-- ICONBOX -->
                    @include('frontend.home.service')
                        <!-- END ICONBOX -->

                        <!-- TESTIMONIALS -->
                    @include('frontend.home.testimonial')
                        <!-- END TESTIMONIALS -->

                        <!-- QUOTE -->
                        <div class="row-quote bg-row-1" style="background-image: url(/frontend/assets/img/demo/b7.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="60" data-smobile="60"></div>
                                        <div class="themesflat-quote style-1 clearfix">
                                            <div class="quote-item">
                                                <div class="inner">
                                                    <div class="heading-wrap">
                                                        <h3 class="heading">START EXECUTING YOUR PROJECT</h3>
                                                    </div>
                                                    <div class="button-wrap has-icon icon-left">
                                                        <a href="#" class="themesflat-button bg-white small"><span>+1-203-231-5300 (USA) <span class="icon"><i class="autora-icon-phone-contact"></i></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="60" data-smobile="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                        <!-- END QUOTE -->

                        <!-- TABS -->
                       @include('frontend.home.overview')
                        <!-- END TABS -->

                        <!-- PARTNER -->
                        @include('frontend.home.heppy-client')
                        <!-- END PARTNER -->
                    </div><!-- /.page-content -->
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div>
@endsection

@section('js')

@endsection
