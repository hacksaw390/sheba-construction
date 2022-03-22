<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="/admin/css/mdb.min.css">
    <link href="/admin/css/datatables.min.css" rel="stylesheet">
    <link href="/admin/css/datatables-select.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/admin/demo/logo2.png">

    <!-- Your custom styles (optional) -->
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        }
        .imgPreview{
            display: inline-block;
        }
    </style>
</head>

<body class="fixed-sn white-skin">



<!-- Main Navigation -->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">

            <!-- Logo -->
            <li class="logo-sn waves-effect py-3">
                <div class="text-center">
                    <a href="#" class="pl-0"><img width="150" src="/frontend/assets/img/demo/logo4.png"></a>
                </div>
            </li>
            <hr>
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">

                    <li>
                        <a href="{{route('home')}}" class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-tachometer-alt"></i>Dashboards
                        </a>
                    </li>
                    <li>
                        <a href="{{route('top-header')}}" class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-image"></i>Top Header
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logo')}}" class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-image"></i>Logo Info
                        </a>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa far fa-bell"></i>Slider Info<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('add-slider')}}" class="waves-effect">Add Slider</a>
                                </li>
                                <li>
                                    <a href="{{route('manege-slider')}}" class="waves-effect">Manege Slider</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-user"></i>Titles Info<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('choose')}}" class="waves-effect">Choose</a>
                                </li>
                                <li>
                                    <a href="{{route('best-service')}}" class="waves-effect">Best Service</a>
                                </li>
                                <li>
                                    <a href="{{route('all-service')}}" class="waves-effect">All Service</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-bolt"></i>Best Choose<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('add-best-choose')}}" class="waves-effect">Add Best Choose</a>
                                </li>
                                <li>
                                    <a href="{{route('manege-best-choose')}}" class="waves-effect">Manege Best Choose</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('welcome')}}" class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-table"></i></i>Welcome
                        </a>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-user"></i>Project Info<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('add-project')}}" class="waves-effect">Add Project</a>
                                </li>
                                <li>
                                    <a href="{{route('manege-project')}}" class="waves-effect">Manege Project</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-map"></i></i>Service Info<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('add-service')}}" class="waves-effect">Add Service</a>
                                </li>
                                <li>
                                    <a href="{{route('manege-service')}}" class="waves-effect">Manege Service</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-chart-pie"></i>Testimonial<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('create-testi')}}" class="waves-effect">Add Testimonial</a>
                                </li>
                                <li>
                                    <a href="{{route('manege-testi')}}" class="waves-effect">Manege Testimonial</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa far fa-calendar-check"></i></i>Overview<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('focus')}}" class="waves-effect">Focus</a>
                                </li>
                                <li>
                                    <a href="{{route('dedicated')}}" class="waves-effect">Dedicated</a>
                                </li>
                                <li>
                                    <a href="{{route('committed')}}" class="waves-effect">Committed</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-th"></i>FAQs<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('create-faq')}}" class="waves-effect">Add FAQ</a>
                                </li>
                                <li>
                                    <a href="{{route('show-faq')}}" class="waves-effect">Manege FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="w-fa fas fa-th-large"></i>Happy Client<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('create-happy')}}">Add Happy Client</a>
                                </li>
                                <li>
                                    <a href="{{route('show-happy')}}">Manege Happy Client</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Simple link -->

                </ul>
            </li>
            <!-- Side navigation links -->

        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb-dn mr-auto">
            <p>Dashboard</p>
        </div>

        <div class="d-flex change-mode">
            <!-- Navbar links -->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">



                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

    </nav>
    <!-- Navbar -->
    </div>

</header>
<!-- Main Navigation -->

</div>

<!-- Main layout -->
<main>

@yield('content')

</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer pt-0 mt-5 mdb-color lighten-4">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2020 Copyright: <a href="https://shamimdewan.xyz" target="_blank"> SheBa Group USA, Develop By Shamim Dewan </a>

        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="/admin/js/jquery-3.3.1.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/admin/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/admin/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/admin/js/mdb.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>

<script type="text/javascript" src="/admin/js/datatables-select.min.js"></script>
<script src="/admin/js/sweetalert2.js"></script>
<script src="/admin/js/custom.js"></script>
<!-- Initializations -->
<script>
    $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
    });
</script>
<script>
    @if (session('success'))

    Swal.fire(
        'Good job!',
        'Data Insert Successfully!',
        'success'
    )
    @endif
    @if (session('update'))

    Swal.fire(
        'Good job!',
        'Data Updated Successfully!',
        'success'
    )
    @endif
    @if (session('delete'))

    Swal.fire(
        'Good job!',
        'Data Deleted Successfully!',
        'success'
    )
    @endif
</script>

<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>

<!-- Charts -->
<script>
    // Small chart
    $(function () {
        $('.min-chart#chart-sales').easyPieChart({
            barColor: "#4285F4",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    });



    //bar
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
            labels: ["January", "Febuary", "March", "April", "May"],
            datasets: [{
                label: '# of Votes',
                data: [13, 19, 8, 11, 5],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.3)',
                    'rgba(41, 182, 246, 0.3)',
                    'rgba(255, 187, 51, 0.3)',
                    'rgba(66, 133, 244, 0.3)',
                    'rgba(153, 102, 255, 0.3)',

                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(41, 182, 246, 1)',
                    'rgba(255, 187, 51, 1)',
                    'rgba(66, 133, 244, 1)',
                    'rgba(153, 102, 255, 1)',

                ],
                borderWidth: 2
            }]
        },
        optionss: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $('#dark-mode').on('click', function (e) {

        e.preventDefault();
        $('footer').toggleClass('mdb-color lighten-4 dark-card-admin');
        $('body, .navbar').toggleClass('white-skin navy-blue-skin');
        $(this).toggleClass('white text-dark btn-outline-black');
        $('body').toggleClass('dark-bg-admin');
        $('.card').toggleClass('dark-card-admin');
        $('h6, .card, p, td, th, i, li a, h4, input, label').not(
            '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
        $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
        $('.gradient-card-header').toggleClass('white dark-card-admin');

        if ($('.navbar').hasClass('navy-blue-skin')) {
            for (let i = 0; i <= 5; i++) {
                myBarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
            }

            Chart.defaults.global.defaultFontColor = '#fff';
        } else {

            for (let i = 0; i <= 5; i++) {
                myBarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
            }

            Chart.defaults.global.defaultFontColor = '#666';
        }

        myBarChart.update();

    });



    // Material Design example
    $(document).ready(function () {
        $('#dtMaterialDesignExample').DataTable();
        $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
            $(this).parent().append($(this).children());
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
            const $this = $(this);
            $this.attr("placeholder", "Search");
            $this.removeClass('form-control-sm');
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
        $('#dtMaterialDesignExample_wrapper select').removeClass(
            'custom-select custom-select-sm form-control form-control-sm');
        $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
        $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
    });

</script>
<script>
    @yield ('js')
</script>
</body>
</html>
