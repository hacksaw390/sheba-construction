@extends('frontend.master')

@section('title')
    ABOUT | SheBa - Construction
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
                            <a href="page-about.html" class="trail-begin">About us </a>
                            <span class="sep">|</span>
                            <span class="trail-end">About us detail</span>
                        </div>
                    </div>
                </div>
                <div class="featured-title-heading-wrap">
                    <h1 class="feautured-title-heading">
                        Who we are?
                    </h1>
                </div>
            </div><!-- /.featured-title-inner-wrap -->
        </div><!-- /#featured-title-inner -->
    </div>
    <!-- End Featured Title -->
    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap" class="container">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-2 clearfix">
                        <h2 class="heading">OUR COMPANIES</h2>
                        <div class="sep has-width w80 accent-bg clearfix"></div>
                        <p class="sub-heading line-height-24 text-777 margin-top-28 margin-right-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-row gutter-15 clearfix">
                        @foreach($bestChooseItems as $item)
                        <div class="col span_1_of_4">
                            <div class="themesflat-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                    <div class="icon-wrap">
                                        <i class="{{$item->icon}}"></i>
                                    </div>
                                    <div class="text-wrap">
                                        <h5 class="heading"><a href="#">{{$item->title}}</a></h5>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading">{{$item->des}}</p>
                                    </div>
                                </div><!-- /.themesflat-icon-box -->
                            </div><!-- /.themesflat-content-box -->
                        </div><!-- /.col -->
                            @endforeach
                    </div><!-- /.themesflat-row -->
                    <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-headings style-2 clearfix">
                        <h2 class="heading">OUR HISTORY</h2>
                        <div class="sep has-width w80 accent-bg clearfix"></div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="24" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-row separator drank clearfix">
                        <div class="span_1_of_6 separator-solid">
                            <div class="flat-content-wrap">
                                <div class="title">2000</div>
                                <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                            </div>
                            <div class="flat-content-wrap">
                                <div class="title">2010</div>
                                <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                            </div>
                        </div><!-- /.col -->
                        <div class="span_1_of_6 separator-solid">
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                            <div class="flat-content-wrap pd26">
                                <div class="title">2005</div>
                                <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                            </div>
                            <div class="flat-content-wrap pd26">
                                <div class="title">2018</div>
                                <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.themesflat-row -->
                    <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-headings style-2 clearfix">
                        <h2 class="heading">OUR CORE VALUES</h2>
                        <div class="sep has-width w80 accent-bg clearfix"></div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-content-box" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                        <div class="themesflat-accordions style-3 has-icon icon-left iconstyle-2 our-background clearfix">
                            <div class="accordion-item active">
                                <h3 class="accordion-heading"><span class="inner">our mission</span></h3>
                                <div class="accordion-content">
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                                </div>
                            </div><!-- /.accordion-item -->
                            <div class="accordion-item">
                                <h3 class="accordion-heading"><span class="inner">our vision</span></h3>
                                <div class="accordion-content">
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                                </div>
                            </div><!-- /.accordion-item -->
                            <div class="accordion-item ">
                                <h3 class="accordion-heading"><span class="inner">our technology</span></h3>
                                <div class="accordion-content">
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                                </div>
                            </div><!-- /.accordion-item -->
                        </div><!-- /.themesflat-accordion -->
                    </div><!-- /.themesflat-content-box -->
                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->
@endsection

@section('js')

@endsection
