<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CityFast Courier | @yield('title')</title>

    <link rel="icon" href="{{asset('adminDash')}}/images/favicon.png" type="image/png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CityFast Courier" />
    <meta property="og:description" content="Delivery within 8 hours" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />

    <link rel="preload" as="style" href="{{asset('frontend')}}/assets/css/app-041e359a.css" />
    <link rel="preload" as="style" href="{{asset('frontend')}}/assets/css/app-05cbb568.css" />
    <link rel="modulepreload" href="{{asset('frontend')}}/assets/js/app-410ec29d.js" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/app-041e359a.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/app-05cbb568.css"/>
    <script type="module" src="{{asset('frontend')}}/assets/js/app-410ec29d.js"></script>
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/cloudflare/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/master.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/override.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body class="body-class">
    <div class="app" id="app">
        <div class="navbar-wrapper d-flex align-items-center">
            <div class="container-fluid">
                <nav class="navbar">
                    <div class="d-flex gap-3 align-items-center">
                        <div class="mobile-nav-toggler">
                            <img src="{{asset('frontend')}}/assets/images/fa_bar.svg" alt="">
                        </div>
                        <div class="brand-logo">
                            <a href="{{url('/')}}"><img src="{{asset('adminDash')}}/images/logo.png" alt="" class="web_logo" style="height: 70px"></a>
                        </div>
                    </div>
                    <div class="navbar-menu">
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{route('frontend.coverage')}}">Coverage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{route('frontend.pricing')}}">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{route('frontend.about')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{route('frontend.contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-action d-flex align-items-center">
                        <a href="{{route('frontend.tracking')}}" class=" d-none d-sm-inline-block txt-primary me-4"><i class="fa-solid fa-location-crosshairs parcel_tarck_icon"></i>
                            Track Parcel </a>
                        <div class="d-flex align-items-center gap-3">
                            <a href="{{route('frontend.login')}}" class="btn btn-primary">Login</a>
                        </div>
                        {{-- <button class="btn-outline btn-md d-none d-sm-inline-block">EN</button> --}}

                    </div>
                </nav>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <nav class="menu-box">
                <div class="menubtn d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.html"> <img src="{{asset('frontend')}}/assets/images/logo/logo.svg" class="img-fluid" /></a>
                    </div>
                    <div class="close-btn ">
                        <img src="{{asset('frontend')}}/assets/images/close.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="divider"></div>
                <div class="menu-outer">
                    <a href="tracking.html" class="tracking_tab"><img
                            src="{{asset('frontend')}}/assets/images/parcel_tarck_icon.svg" alt="" class="w-auto me-2">
                        Track
                        Parcel
                    </a>
                    <div class="nav_link d-flex flex-column gap-2 mt-2">

                    </div>
                </div>
            </nav>
        </div>


    @yield('content')


        <div class="footer-wrapper">
    <div class="container-fluid">
        <div class="footer">
            <div class="top d-flex justify-content-between">
                <div class="short-info d-flex gap-2 flex-column">
                    <a href=""><img src="{{asset('adminDash')}}/images/logo.png" alt="" class=" footer-logo" style="height: 60px"></a>
                    <p> House# 26, Rd No. 5/A, Mirpur 6, <br> Dhaka 1216</p>
                    <p>E-mail: info@cityfast.com</p>
                    <p>Hotline: 01614-694415</p>
                </div>
                <div class="impt-link">
                    <h6>Company</h6>
                    <ul class="links-list d-flex flex-column">
                        <li>
                            <a href="{{route('frontend.contact')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('frontend.returnpolicy')}}">Return Policy</a>
                        </li>
                        <li>
                            <a href="{{route('frontend.tramsandcondition')}}">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="sister-concern">
                    <h6>Sister Concern</h6>
                    <ul class="links-list d-flex flex-column">
                        <li>
                            <a href=""> </a>
                        </li>


                        <li>
                            <a href=""></a>
                        </li>
                    </ul>
                </div> --}}
                <div class="social-media">
                    <h6>Follow Us</h6>
                    <div class="d-flex gap-2">
                        <a href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a href=""><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href=""><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="app-store d-flex gap-3 mt-5">
                        <a href="">
                            <img src="{{asset('frontend')}}/assets/images/app_store.png" alt=""
                                class="w-auto h-auto">

                        </a>
                        <a
                            href=""><img
                                src="{{asset('frontend')}}/assets/images/google_play.png" alt=""
                                class="w-auto h-auto"></a>
                    </div>
                </div>

            </div>
            <div class="bottom d-flex justify-content-center align-items-center">
                <p class="d-flex align-items-center gap-2"> &copy 2024 CityFast Courier Ltd. All rights reserved.</p>
                <p class="d-flex align-items-center gap-2"> Developed by<a href="">SABALON Technologies.</a></p>
            </div>

        </div>
    </div>
</div>
    </div>



    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('frontend')}}/assets/cloudflare/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
    <script src="{{asset('frontend')}}/assets/cloudflare/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" defer></script>
    <script src="{{asset('frontend')}}/assets/cloudflare/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" defer></script>






    <script src="{{asset('frontend')}}/assets/js/custom.js" defer></script>



<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8d5f901af925bc25',t:'MTcyOTQ5NjA0NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/62ec4f065604/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>

</body>
</html>
