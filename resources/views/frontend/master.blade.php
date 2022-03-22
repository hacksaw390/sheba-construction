<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    {{--title--}}
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/animsition.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/woocommerce.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/font-etline.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/autora-icons.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/shortcodes.css">
    {{--includes--}}
    <link rel="stylesheet" type="text/css" href="/frontend/includes/rev-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/frontend/includes/rev-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/frontend/includes/rev-slider/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/frontend/assets/style.css">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/colors/color5.css" id="colors">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="/frontend/assets/img/demo/logo2.png">
    <link rel="apple-touch-icon-precomposed" href="/frontend/assets/icon/apple-touch-icon-158-precomposed.png">

    <script src="javascript/html5shiv.js"></script>
    <script src="javascript/respond.min.js"></script>
</head>


<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->
            <div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner">
                                <span class="address content">1376, CHOPSEY HILL ROAD BRIDGEPORT,CT-06606, USA</span>
                                <span class="phone content">+1-203-231-5300 (USA)</span>
                                {{--<span class="time content">{{$topHeader->working_days}}</span>--}}
                            </div>
                        </div><!-- /.top-bar-content -->

                        <div class="top-bar-socials">
                            <div class="inner">
                                <span class="text">Follow us:</span>
                                <span class="icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </span>
                            </div>
                        </div>
                        <!-- /.top-bar-socials -->
                    </div>
                </div>
            </div><!-- /#top-bar -->

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="container">
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <a href="{{route('/')}}" rel="home" class="main-logo">
                                    {{-- <img src="{{url($logo->logo)}}" alt="SheBA" width="186" height="39" data-retina="{{url($logo->logo)}}" data-width="186" data-height="39"> --}}
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item menu-item-has-children {{Request::path()==='/'?'current-menu-item': ''}}">
                                    <a href="{{route('/')}}">HOME</a>
                                </li>
                                <li class="menu-item menu-item-has-children {{Request::path()==='about'?'current-menu-item': ''}}">
                                    <a href="{{route('about')}}">ABOUT US </a>
                                </li>
                                <li class="menu-item menu-item-has-children {{Request::path()==='services'?'current-menu-item': ''}}">
                                    <a href="{{route('services')}}">SERVICES</a>
                                </li>
                                <li class="menu-item menu-item-has-children {{Request::path()==='project'?'current-menu-item': ''}}">
                                    <a href="{{route('project')}}">PROJECTS</a>
                                </li>
                                <li class="menu-item menu-item-has-children {{Request::path()==='contact'?'current-menu-item': ''}}">
                                    <a href="{{route('contact')}}">CONTACT</a>
                                </li>
                            </ul>
                        </nav><!-- /#main-nav -->
                    </div><!-- /.wrap-inner -->
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Main Content -->
        @yield('content')
        <!-- /#main-content -->


        <!-- Footer -->
        <footer id="footer" class="clearfix" style="background-image: url('/frontend/assets/img/demo/f1.jpg');">
            <div id="footer-widgets" class="container">
                <div class="themesflat-row gutter-30">
                    <div class="col span_1_of_3">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <p>
                                    {{-- <img src="{{url($logo->logo)}}" alt="Image" width="170" height="34"> --}}
                                </p>

                                <p class="margin-bottom-15">Continal is a clean PSD theme suitable for corporate, construction. You can customize it very easy to fit your needs, semper suscipit metus accumsan at. Vestibulum et lacus urna.</p>
                            </div>
                        </div><!-- /.widget_text -->
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    </div><!-- /.col -->
                    <div class="col span_1_of_3">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <h2 class="widget-title"><span>CONTACT WITH HEAD OFFICE</span></h2>

                                <ul>
                                    <li>
                                        <div class="inner">
                                            <span class="fa fa-map-marker"></span>
                                            <span class="text">1376, CHOPSEY HILL ROAD BRIDGEPORT,CT-06606, USA </span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <span class="fa fa-phone"></span>
                                            <span class="text">CALL US : +1-203-231-5300 (USA)</span>
                                        </div>
                                    </li>

                                    <li class="margin-top-7">
                                        <div class="inner">
                                            <span class=" font-size-14 fa fa-envelope"></span>
                                            <span class="text">info@shebaconstruction</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.widget_text -->
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    </div><!-- /.col -->
                    <div class="col span_1_of_3">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <h2 class="widget-title"><span>CONTACT WITH BANGLADESH</span></h2>

                                <ul>
                                    <li>
                                        <div class="inner">
                                            <span class="fa fa-map-marker"></span>
                                            <span class="text">House-951, Road-14 Avenue-02, Mirpur DOHS Mirpur-12, Dhaka-1216</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <span class="fa fa-phone"></span>
                                            <span class="text">CALL US : (+880)1824570690</span>
                                        </div>
                                    </li>

                                    <li class="margin-top-7">
                                        <div class="inner">
                                            <span class=" font-size-14 fa fa-envelope"></span>
                                            <span class="text">info@shebaconstruction</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.widget_text -->
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    </div><!-- /.col -->

                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

						<div class="widget widget_tags">
                            <h2 class="widget-title margin-bottom-30"><span>OUR OTHER ORGANISATION</span></h2>
                            <div class="tags-list">
                                <a href="#">WASTE TECHNOLOGIES LLC</a>
                                <a href="#">NK WEB TECHNOLOGY</a>
                                <a href="#">TAZABAZAR</a>
                                <a href="#">SheBa WEB TECHNOLOGY LLC</a>
                                <a href="#">SheBaPubs</a>
                            </div>
                        </div>
                       <!-- <div class="widget widget_tags">
                            <h2 class="widget-title margin-bottom-30"><span>TAGS</span></h2>
                            <div class="tags-list">
                                @foreach($projects as $item)
                                <a href="{{route('project_details',$item->id)}}">{{$item->project_type}}</a>
                                    @endforeach
                            </div>
                        </div>/.col -->
                    </div><!-- /.col -->

                    {{--<div class="col span_1_of_3">--}}
                        {{--<div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>--}}

                        {{--<div class="widget widget_instagram">--}}
                            {{--<h2 class="widget-title margin-bottom-30"><span>PROJECT PHOTOS</span></h2>--}}
                            {{--<div class="instagram-wrap data-effect clearfix col3 g10">--}}
                                {{--@foreach($projectImages as $item)--}}
                                {{--<div class="instagram_badge_image has-effect-icon">--}}
                                    {{--<a href="#" target="_blank" class="data-effect-item">--}}
                                        {{--<span class="item"><img src="{{url($item->project_image)}}" alt="Image" ></span>--}}
                                        {{--<div class="overlay-effect bg-color-2"></div>--}}
                                        {{--<div class="elm-link">--}}
                                            {{--<span class="icon-3"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                    {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div><!-- /.themesflat-row -->
            </div><!-- /#footer-widgets -->
        </footer><!-- /#footer -->

        <!-- Bottom -->
        <div id="bottom" class="clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">© <span class="text">SheBa Web Technology LLC Develop <a href="https://shebawebtech.com" target="_blank" class="text-accent">by @SheBa Web Technology</a></span>
                        </div>
                    </div><!-- /.bottom-bar-content -->
                </div><!-- /.bottom-bar-inner-wrap -->
            </div><!-- /#bottom-bar-inner -->
        </div><!-- /#bottom -->

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>


<!-- Javascript -->
<script src="/frontend/assets/js/jquery.min.js"></script>
<script src="/frontend/assets/js/plugins.js"></script>
<script src="/frontend/assets/js/tether.min.js"></script>
<script src="/frontend/assets/js/bootstrap.min.js"></script>
<script src="/frontend/assets/js/animsition.js"></script>
<script src="/frontend/assets/js/owl.carousel.min.js"></script>
<script src="/frontend/assets/js/countto.js"></script>
<script src="/frontend/assets/js/equalize.min.js"></script>
<script src="/frontend/assets/js/jquery.isotope.min.js"></script>
<script src="/frontend/assets/js/owl.carousel2.thumbs.js"></script>

<script src="/frontend/assets/js/jquery.cookie.js"></script>
{{--<script src="/frontend/assets/js/gmap3.min.js"></script>--}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="/frontend/assets/js/shortcodes.js"></script>
<script src="/frontend/assets/js/main.js"></script>

<!-- Revolution Slider -->
<script src="/frontend/includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/frontend/includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="/frontend/assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/frontend/includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>
<script>
    @yield ('js')
</script>

</body>
</html>

