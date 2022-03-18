<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ShopGrids - Bootstrap 5 eCommerce HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/LineIcons.3.0.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/tiny-slider.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/glightbox.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/main.css")}}" />

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- /End Preloader -->

<!-- Start Header Area -->
<header class="header navbar-area">
    <!-- Start Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">
                    <!-- Start Header Logo -->
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset("assets/images/logo/logo.png")}}" alt="Logo">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-6 col-md-6 d-xs-none">
                    <!-- Start Main Menu Search -->
                    <div class="main-menu-search">
                        <!-- navbar search start -->
                        <img src="{{asset("assets/images/header/header_name.png")}}" alt="КЗ Бібліотека для доросдих ХМР">
                        <!-- navbar search Ends -->
                    </div>
                    <!-- End Main Menu Search -->
                </div>
                <div class="col-lg-3 col-md-3 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-home"></i>
                            <h3>Адреса:
                                <span>м. Хмільник</span>
                                <span>просп. Свободи, б. 12</span>
                            </h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Middle -->
    <!-- Start Header Bottom -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">
                    <!-- Start Mega Category Menu -->
                    <div class="mega-category-menu">
                        <span class="cat-button"><i class="lni lni-menu"></i>Меню</span>
                        <ul class="sub-category">
                            @include('menu.navig')
                        </ul>
                    </div>
                    <!-- End Mega Category Menu -->
                    <!-- Start Navbar -->
                    @include('menu.navbar');
                    <!-- End Navbar -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Nav Social -->
                <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav Social -->
            </div>
        </div>
    </div>
    <!-- End Header Bottom -->
</header>
<!-- End Header Area -->
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                @yield('content')
            </div>
            <div class="col-12 col-lg-3 custom-padding-right">
                @include('rigth_bar.news')
            </div>
        </div>
    </div>

</main>

<!-- Start Footer Area -->
<footer class="footer">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div align="center">Весь контент доступний за ліцензією Creative Commons Attribution 4.0 International License  <br>
                        КЗ 'Бібліотека для дорослих' Хмільницької міської ради&nbsp;© hm-library.com.ua 2011 - 2022  <div><strong>E-mail:
                            </strong> Biblioteka-Hmilnuk@i.ua</div>	</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->

</footer>
<!--/ End Footer Area -->

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- ========================= JS here ========================= -->
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/tiny-slider.js")}}"></script>
<script src="{{asset("assets/js/glightbox.min.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
<script type="text/javascript">
    //========= Hero Slider
    tns({
        container: '.hero-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });

    //======== Brand Slider
    tns({
        container: '.brands-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 5,
            },
            992: {
                items: 6,
            }
        }
    });
</script>
</body>

</html>
