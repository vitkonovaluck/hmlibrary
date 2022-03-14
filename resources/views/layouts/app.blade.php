
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

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
                        <img src="assets/images/logo/logo.png" alt="Logo">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-6 col-md-6 d-xs-none">
                    <!-- Start Main Menu Search -->
                    <div class="main-menu-search">
                        <!-- navbar search start -->
                        <img src="assets/images/header/header_name.png" alt="КЗ Бібліотека для доросдих ХМР">
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
                    @yield('navbar');
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

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="container">
        <div class="row">
        @yield('slider')
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Trending Product Area -->
<section class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Product</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-1.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Watches</span>
                        <h4 class="title">
                            <a href="product-grids.html">Xiaomi Mi Band 5</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$199.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-2.jpg" alt="#">
                        <span class="sale-tag">-25%</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Speaker</span>
                        <h4 class="title">
                            <a href="product-grids.html">Big Power Sound Speaker</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$275.00</span>
                            <span class="discount-price">$300.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-3.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Camera</span>
                        <h4 class="title">
                            <a href="product-grids.html">WiFi Security Camera</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$399.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-4.jpg" alt="#">
                        <span class="new-tag">New</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Phones</span>
                        <h4 class="title">
                            <a href="product-grids.html">iphone 6x plus</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$400.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-5.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Headphones</span>
                        <h4 class="title">
                            <a href="product-grids.html">Wireless Headphones</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$350.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-6.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Speaker</span>
                        <h4 class="title">
                            <a href="product-grids.html">Mini Bluetooth Speaker</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$70.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-7.jpg" alt="#">
                        <span class="sale-tag">-50%</span>
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Headphones</span>
                        <h4 class="title">
                            <a href="product-grids.html">PX7 Wireless Headphones</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$100.00</span>
                            <span class="discount-price">$200.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="assets/images/products/product-8.jpg" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category">Laptop</span>
                        <h4 class="title">
                            <a href="product-grids.html">Apple MacBook Air</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$899.00</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
        </div>
    </div>
</section>
<!-- End Trending Product Area -->

<!-- Start Call Action Area -->
<section class="call-action section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Currently You are using free<br>
                            Lite version of ShopGrids</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Please, purchase full version of the template
                            to get all pages,<br> features and commercial license.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

<!-- Start Banner Area -->
<section class="banner section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner" style="background-image:url('assets/images/banner/banner-1-bg.jpg')">
                    <div class="content">
                        <h2>Smart Watch 2.0</h2>
                        <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                        <div class="button">
                            <a href="product-grids.html" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner custom-responsive-margin"
                     style="background-image:url('assets/images/banner/banner-2-bg.jpg')">
                    <div class="content">
                        <h2>Smart Headphone</h2>
                        <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                            incididunt ut labore.</p>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Shipping Info -->
<section class="shipping-info">
    <div class="container">
        <ul>
            <!-- Free Shipping -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="media-body">
                    <h5>Free Shipping</h5>
                    <span>On order over $99</span>
                </div>
            </li>
            <!-- Money Return -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-support"></i>
                </div>
                <div class="media-body">
                    <h5>24/7 Support.</h5>
                    <span>Live Chat Or Call.</span>
                </div>
            </li>
            <!-- Support 24/7 -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="media-body">
                    <h5>Online Payment.</h5>
                    <span>Secure Payment Services.</span>
                </div>
            </li>
            <!-- Safe Payment -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-reload"></i>
                </div>
                <div class="media-body">
                    <h5>Easy Return.</h5>
                    <span>Hassle Free Shopping.</span>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End Shipping Info -->

<!-- Start Footer Area -->
<footer class="footer">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="assets/images/logo/white-logo.svg" alt="#">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="footer-newsletter">
                            <h4 class="title">
                                Subscribe to our Newsletter
                                <span>Get all the latest information, Sales and Offers.</span>
                            </h4>
                            <div class="newsletter-form-head">
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="Email address here..." type="email">
                                    <div class="button">
                                        <button class="btn">Subscribe<span class="dir-part"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <!-- Start Footer Middle -->
    <div class="footer-middle">
        <div class="container">
            <div class="bottom-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-contact">
                            <h3>Get In Touch With Us</h3>
                            <p class="phone">Phone: +1 (900) 33 169 7720</p>
                            <ul>
                                <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                            </ul>
                            <p class="mail">
                                <a href="mailto:support@shopgrids.com">support@shopgrids.com</a>
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer our-app">
                            <h3>Our Mobile App</h3>
                            <ul class="app-btn">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-apple"></i>
                                        <span class="small-title">Download on the</span>
                                        <span class="big-title">App Store</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-play-store"></i>
                                        <span class="small-title">Download on the</span>
                                        <span class="big-title">Google Play</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                <li><a href="javascript:void(0)">Downloads</a></li>
                                <li><a href="javascript:void(0)">Sitemap</a></li>
                                <li><a href="javascript:void(0)">FAQs Page</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Shop Departments</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Computers & Accessories</a></li>
                                <li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
                                <li><a href="javascript:void(0)">TV, Video & Audio</a></li>
                                <li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
                                <li><a href="javascript:void(0)">Headphones</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Middle -->
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12">
                        <div class="payment-gateway">
                            <span>We Accept:</span>
                            <img src="assets/images/footer/credit-cards-footer.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="copyright">
                            <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow"
                                                           target="_blank">GrayGrids</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="socila">
                            <li>
                                <span>Follow Us On:</span>
                            </li>
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!--/ End Footer Area -->

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- ========================= JS here ========================= -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/main.js"></script>
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
