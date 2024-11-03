
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>City Fast | @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adminDash')}}/images/favicon.png">
    <link rel="stylesheet" href="{{asset('adminDash')}}/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('adminDash')}}/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{asset('adminDash')}}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{asset('adminDash')}}/css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('home')}}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('adminDash')}}/images/favicon.png" alt="">
                {{-- <img class="logo-compact" src="{{asset('adminDash')}}/images/1.jpg" alt="img">
                <img class="brand-title" src="./images/logo.png" alt=""> --}}
                <span class="brand-title">City Fast</span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <span>{{Auth::user()->name}} </span>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span class="ml-2">Logout </span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Operation</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('order.process')}}">Order Process</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-label">Apps</li> --}}
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Reports</span></a>
                        <ul aria-expanded="false">
                            <li><a href="">Daily Order Shipment</a></li>
                            <li><a href="">Order Details Report</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-world-2"></i><span class="nav-text">Return</span></a>
                        <ul aria-expanded="false">
                            <li><a href="">Return Process</a></li>
                            <li><a href="">Get Return OTP</a></li>
                        </ul>
                    </li>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Manage</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('show.marchant_info')}}">Marchant Information</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Admin</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('add.admin')}}">Add Admin</a></li>
                                    <li><a href="{{route('show.admin')}}">Show Admin</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">HUB</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('add.hub')}}">Add HUB</a></li>
                                    <li><a href="{{route('show.hub')}}">Show HUB</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Delivery man</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('add.deliveryMan')}}">Add Delivery man</a></li>
                                    <li><a href="{{route('show.deliveryMan')}}">Show Delivery man</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>


    </div>
    <script src="{{asset('adminDash')}}/vendor/global/global.min.js"></script>
    <script src="{{asset('adminDash')}}/js/quixnav-init.js"></script>
    <script src="{{asset('adminDash')}}/js/custom.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/morris/morris.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/gaugeJS/dist/gauge.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/flot/jquery.flot.js"></script>
    <script src="{{asset('adminDash')}}/vendor/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('adminDash')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{asset('adminDash')}}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{asset('adminDash')}}/vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('adminDash')}}/js/dashboard/dashboard-1.js"></script>
    @yield('script')

</body>

</html>
