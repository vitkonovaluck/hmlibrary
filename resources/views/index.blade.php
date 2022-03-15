@extends('layouts.app');

@section('navigator')
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
        <ul id="nav" class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>
            </li>
            <li class="nav-item">
                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                   data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                <ul class="sub-menu collapse" id="submenu-1-2">
                    <li class="nav-item"><a href="about-us.html">About Us</a></li>
                    <li class="nav-item"><a href="faq.html">Faq</a></li>
                    <li class="nav-item"><a href="login.html">Login</a></li>
                    <li class="nav-item"><a href="register.html">Register</a></li>
                    <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                    <li class="nav-item"><a href="404.html">404 Error</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                   data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                <ul class="sub-menu collapse" id="submenu-1-3">
                    <li class="nav-item"><a href="product-grids.html">Shop Grid</a></li>
                    <li class="nav-item"><a href="product-list.html">Shop List</a></li>
                    <li class="nav-item"><a href="product-details.html">shop Single</a></li>
                    <li class="nav-item"><a href="cart.html">Cart</a></li>
                    <li class="nav-item"><a href="checkout.html">Checkout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                   data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                <ul class="sub-menu collapse" id="submenu-1-4">
                    <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                    </li>
                    <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                    <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                            Sibebar</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
            </li>
        </ul>
    </div> <!-- navbar collapse -->
</nav>
@endsection

@section('slider')
    <div class="col-lg-8 col-12 custom-padding-right">
        <div class="slider-head">
            <!-- Start Hero Slider -->
            <div class="hero-slider">
                <!-- Start Single Slider -->
                <div class="single-slider"
                     style="background-image: url(assets/images/hero/slider-bg1.jpg);">
                    <div class="content">
                        <h2><span>No restocking fee ($35 savings)</span>
                            M75 Sport Watch
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <h3><span>Now Only</span> $320.99</h3>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
                <!-- Start Single Slider -->
                <div class="single-slider"
                     style="background-image: url(assets/images/hero/slider-bg2.jpg);">
                    <div class="content">
                        <h2><span>Big Sale Offer</span>
                            Get the Best Deal on CCTV Camera
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <h3><span>Combo Only:</span> $590.00</h3>
                        <div class="button">
                            <a href="product-grids.html" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
            </div>
            <!-- End Hero Slider -->
        </div>
    </div>
    <div class="col-lg-4 col-12">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                <!-- Start Small Banner -->
                <div class="hero-small-banner"
                     style="background-image: url('assets/images/hero/slider-bnr.jpg');">
                    <div class="content">
                        <h2>
                            <span>New line required</span>
                            iPhone 12 Pro Max
                        </h2>
                        <h3>$259.99</h3>
                    </div>
                </div>
                <!-- End Small Banner -->
            </div>
            <div class="col-lg-12 col-md-6 col-12">
                <!-- Start Small Banner -->
                <div class="hero-small-banner style2">
                    <div class="content">
                        <h2>Weekly Sale!</h2>
                        <p>Saving up to 50% off all online store items this week.</p>
                        <div class="button">
                            <a class="btn" href="product-grids.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- Start Small Banner -->
            </div>
        </div>
    </div>
@endsection
