<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Hải An PC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="keywords" content="PC, Laptop, Ram, phụ kiện máy tính" />
    <!-- Mobile specific metas
 ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Google Fonts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/images/ico/apple-touch-icon-72-precomposed.')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}')}}"> --}}

    <!-- Favicon
 ============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png')}}">

    <!-- Google web fonts
 ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet'
        type='text/css'>

    <!-- Libs CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/haian/css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('frontend/haian/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- Theme CSS
 ============================================ -->
    <link href="{{ asset('frontend/haian/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/css/themecss/so-categories.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/css/themecss/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/css/themecss/so-super-category.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('frontend/haian/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/haian/css/responsive.css') }}" rel="stylesheet">
</head>
<!--/head-->

<body class="common-home res layout-home1">
    <div id="wrapper" class="wrapper-full banners-effect-7">
        <header id="header" class=" variantleft type_1">
            <!-- Header Top -->
            <div class="header-top compact-hidden">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
                            <ul class="list-inlines">
                                <li class="hidden-xs">
                                    <div class="welcome-msg">
                                        <ul class="list-msg">
                                            <li><label class="label-msg">This week</label> <a href="#">Sale
                                                    special too
                                                    good to miss in every gear</a></li>
                                            <li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum
                                                    dolor
                                                    sit amet. In gravida pellen</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
                            <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i
                                        class="fa fa-angle-down"></i></a></h5>
                            <div class="tabBlock" id="TabBlock-1">
                                <ul class="top-link list-inline">
                                    <li class="account" id="my_account">
                                        <a href="#" title="My Account" class="btn btn-xs dropdown-toggle"
                                            data-toggle="dropdown"> <span>My Account</span> <span
                                                class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu ">
                                            <li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
                                            <li><a href="login.html"><i class="fa fa-pencil-square-o"></i> Login</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="wishlist "><a href="wishlist.html" id="wishlist-total"
                                            class="top-link-wishlist" title="Wish List (2)"><span>Wish List
                                                (2)</span></a></li>
                                    <li class="checkout hidden"><a href="checkout.html" class="top-link-checkout"
                                            title="Checkout"><span>Checkout</span></a></li>
                                    <li class="login hidden"><a href="cart.html" title="Shopping Cart"><span>Shopping
                                                Cart</span></a></li>
                                    <li class="form-group currency currencies-block">
                                        <form action="index.html" method="post" enctype="multipart/form-data"
                                            id="currency">
                                            <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <span class="icon icon-credit "></span> US Dollar <span
                                                    class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu btn-xs">
                                                <li> <a href="#">(€)&nbsp;Euro</a></li>
                                                <li> <a href="#">(£)&nbsp;Pounds </a></li>
                                                <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                            </ul>
                                        </form>
                                    </li>
                                    <li class="form-group languages-block ">
                                        <form action="index.html" method="post" enctype="multipart/form-data"
                                            id="bt-language">
                                            <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <img class="lazyload" data-sizes="auto"
                                                    src="{{ asset('frontend/haian/image/demo/flags/gb.png') }}"
                                                    alt="English" title="English">
                                                <span class="">English</span>
                                                <span class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html"><img class="image_flag lazyload"
                                                            data-sizes="auto"
                                                            src="{{ asset('frontend/haian/image/demo/flags/gb.png') }}"
                                                            alt="English" title="English" /> English </a></li>
                                                <li> <a href="index.html"> <img class="image_flag lazyload"
                                                            data-sizes="auto"
                                                            src="{{ asset('frontend/haian/image/demo/flags/lb.png') }}"
                                                            alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                            </ul>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header Top -->
            <!-- Header center -->
            <div class="header-center">
                <div class="container">
                    <div class="row">
                        <!-- LOGO -->
                        <div class="navbar-logo col-md-3 col-sm-4 col-xs-10">
                            <a href="index.html"><img class="lazyload" data-sizes="auto"
                                    src="{{ asset('frontend/haian/image/demo/logos/theme_logo.png') }}"
                                    title="Your Store" alt="Your Store" /></a>
                        </div>
                        <div class="header-center-right col-md-9 col-sm-8 col-xs-2">
                            <div class="responsive so-megamenu  megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <div class="megamenu-wrapper ">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu " data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="index.html">Home <b class="caret"></b></a>
                                                            <div class="sub-menu" style="width:100%;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="index.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-1.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    (Default)</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home2.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-2.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 2</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home3.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-3.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 3</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home4.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border  lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-4.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 4</h3>
                                                                            </a>

                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <a href="home5.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-5.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 5</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home6.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-6.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 6</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home7.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-7.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 7</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home8.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-8.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 8</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home9.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-9.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 9</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home10.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-10.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 10</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-11.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 11</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border lazyload"
                                                                                        data-sizes="auto"
                                                                                        src="{{ asset('frontend/haian/image/demo/menu/home-12.jpg') }}"
                                                                                        alt="">
                                                                                    <span class="btn btn-default">Read
                                                                                        More</span>
                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 12</h3>
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>

                                                                    Features
                                                                </strong>

                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Listing
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">Category
                                                                                                Page 1 </a></li>
                                                                                        <li><a href="category-v2.html">Category
                                                                                                Page 2</a></li>
                                                                                        <li><a href="category-v3.html">Category
                                                                                                Page 3</a></li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Product
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="product.html">Product
                                                                                                Page 1</a></li>
                                                                                        <li><a href="product-v2.html">Product
                                                                                                Page 2</a></li>
                                                                                        <li><a href="product-v3.html">Product
                                                                                                Page 3</a></li>
                                                                                        <li><a href="product-v4.html">Product
                                                                                                Page 4</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Shopping
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="cart.html">Shopping
                                                                                                Cart Page</a></li>
                                                                                        <li><a href="checkout.html">Checkout
                                                                                                Page</a></li>
                                                                                        <li><a href="compare.html">Compare
                                                                                                Page</a></li>
                                                                                        <li><a href="wishlist.html">Wishlist
                                                                                                Page</a></li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">My
                                                                                    Account pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.html">Login
                                                                                                Page</a></li>
                                                                                        <li><a href="register.html">Register
                                                                                                Page</a></li>
                                                                                        <li><a href="my-account.html">My
                                                                                                Account</a></li>
                                                                                        <li><a
                                                                                                href="order-history.html">Order
                                                                                                History</a></li>
                                                                                        <li><a
                                                                                                href="order-information.html">Order
                                                                                                Information</a></li>
                                                                                        <li><a href="return.html">Product
                                                                                                Returns</a></li>
                                                                                        <li><a
                                                                                                href="gift-voucher.html">Gift
                                                                                                Voucher</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong><img class="lazyload" data-sizes="auto"
                                                                        src="{{ asset('frontend/haian/image/demo/menu/hot-icon.png') }}"
                                                                        alt="">Pages</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 40%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item"
                                                                                        href="faq.html">FAQ</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="typography.html">Typography</a>
                                                                                </li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="sitemap.html">Site
                                                                                        Map</a>
                                                                                </li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="contact.html">Contact
                                                                                        us</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="banner-effect.html">Banner
                                                                                        Effect</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us.html">About Us
                                                                                        1</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us-2.html">About Us
                                                                                        2</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us-3.html">About Us
                                                                                        3</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="about-us-4.html">About Us
                                                                                        4</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong><img class="lazyload" data-sizes="auto"
                                                                        src="{{ asset('frontend/haian/image/demo/menu/new-icon.png') }}"
                                                                        alt="">Categories</strong>
                                                                <span class="label"></span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="#"><img
                                                                                            class="lazyload"
                                                                                            data-sizes="auto"
                                                                                            src="{{ asset('frontend/haian/image/demo/cms/img1.jpg') }}"
                                                                                            alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img
                                                                                            class="lazyload"
                                                                                            data-sizes="auto"
                                                                                            src="{{ asset('frontend/haian/image/demo/cms/img2.jpg') }}"
                                                                                            alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img
                                                                                            class="lazyload"
                                                                                            data-sizes="auto"
                                                                                            src="{{ asset('frontend/haian/image/demo/cms/img3.jpg') }}"
                                                                                            alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img
                                                                                            class="lazyload"
                                                                                            data-sizes="auto"
                                                                                            src="{{ asset('frontend/haian/image/demo/cms/img4.jpg') }}"
                                                                                            alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Automotive</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Car
                                                                                                    Alarms and
                                                                                                    Security</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Car
                                                                                                    Audio &amp;
                                                                                                    Speakers</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Gadgets
                                                                                                    &amp; Auto Parts</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">More
                                                                                                    Car Accessories</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Electronics</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Battereries
                                                                                                    &amp; Chargers</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Headphones,
                                                                                                    Headsets</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Home
                                                                                                    Audio</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Mp3
                                                                                                    Players &amp;
                                                                                                    Accessories</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Jewelry
                                                                                &amp; Watches</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Earings</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Wedding
                                                                                                    Rings</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Men
                                                                                                    Watches</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Women
                                                                                                    Watches</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Bags,
                                                                                Holiday Supplies</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Gift
                                                                                                    &amp; Lifestyle
                                                                                                    Gadgets</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Gift
                                                                                                    for Man</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Gift
                                                                                                    for Woman</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Lighter
                                                                                                    &amp; Cigar
                                                                                                    Supplies</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Accessories</strong>

                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <div class="row">
                                                                                <div class="col-md-6 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">Automotive</a>
                                                                                                <ul>
                                                                                                    <li><a
                                                                                                            href="#">Car
                                                                                                            Alarms and
                                                                                                            Security</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Car
                                                                                                            Audio &amp;
                                                                                                            Speakers</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="3#">Gadgets
                                                                                                            &amp; Auto
                                                                                                            Parts</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">Smartphone
                                                                                                    &amp; Tablets</a>
                                                                                                <ul>
                                                                                                    <li><a
                                                                                                            href="#">Accessories
                                                                                                            for i
                                                                                                            Pad</a></li>
                                                                                                    <li><a
                                                                                                            href="#">Apparel</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Accessories
                                                                                                            for
                                                                                                            iPhone</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">Sports
                                                                                                    &amp; Outdoors</a>
                                                                                                <ul>
                                                                                                    <li><a
                                                                                                            href="#">Camping
                                                                                                            &amp;
                                                                                                            Hiking</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Cameras
                                                                                                            &amp;
                                                                                                            Photo</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Cables
                                                                                                            &amp;
                                                                                                            Connectors</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">Electronics</a>
                                                                                                <ul>
                                                                                                    <li><a
                                                                                                            href="#">Battereries
                                                                                                            &amp;
                                                                                                            Chargers</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Bath
                                                                                                            &amp;
                                                                                                            Body</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Outdoor
                                                                                                            &amp;
                                                                                                            Traveling</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <span
                                                                                class="title-submenu">Bestseller</span>
                                                                            <div class="col-sm-12 list-product">
                                                                                <div class="product-thumb">
                                                                                    <div class="image pull-left">
                                                                                        <a href="#"><img
                                                                                                class="lazyload img-responsive"
                                                                                                data-sizes="auto"
                                                                                                src="{{ asset('frontend/haian/image/demo/shop/product/35.jpg') }}"
                                                                                                width="80"
                                                                                                alt="Filet Mign"
                                                                                                title="Filet Mign"></a>
                                                                                    </div>
                                                                                    <div class="caption">
                                                                                        <h4><a href="#">Filet
                                                                                                Mign</a>
                                                                                        </h4>
                                                                                        <div class="ratings">
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        </div>
                                                                                        <p class="price">$88.00</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 list-product">
                                                                                <div class="product-thumb">
                                                                                    <div class="image pull-left">
                                                                                        <a href="#"><img
                                                                                                class="lazyload img-responsive"
                                                                                                data-sizes="auto"
                                                                                                src="{{ asset('frontend/haian/image/demo/shop/product/W1.jpg') }}"
                                                                                                width="80"
                                                                                                alt="Dail Lulpa"
                                                                                                title="Dail Lulpa"></a>
                                                                                    </div>
                                                                                    <div class="caption">
                                                                                        <h4><a href="#">Dail
                                                                                                Lulpa</a>
                                                                                        </h4>
                                                                                        <div class="ratings">
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star fa-stack-1x"></i><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        </div>
                                                                                        <p class="price">$78.00</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 list-product">
                                                                                <div class="product-thumb">
                                                                                    <div class="image pull-left">
                                                                                        <a href="#"><img
                                                                                                class="lazyload img-responsive"
                                                                                                data-sizes="auto"
                                                                                                src="{{ asset('frontend/haian/image/demo/shop/product/141.jpg') }}"
                                                                                                width="80"
                                                                                                alt="Canon EOS 5D"
                                                                                                title="Canon EOS 5D"></a>
                                                                                    </div>
                                                                                    <div class="caption">
                                                                                        <h4><a href="#">Canon EOS
                                                                                                5D</a>
                                                                                        </h4>

                                                                                        <div class="ratings">
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                            <span
                                                                                                class="fa fa-stack"><i
                                                                                                    class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        </div>
                                                                                        <p class="price">
                                                                                            <span
                                                                                                class="price-new">$60.00</span>
                                                                                            <span
                                                                                                class="price-old">$145.00</span>

                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="blog-page.html" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>

                                                        <li class="hidden-md color-buy">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Buy Theme!</strong>

                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header center -->
            <!-- Header Bottom -->
            <div class="header-bottom compact-hidden">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row">
                            <div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
                                <div class="responsive so-megamenu megamenu-style-dev">
                                    <div class="so-vertical-menu no-gutter compact-hidden">
                                        <nav class="navbar-default">
                                            <div class="container-megamenu vertical open">
                                                <div id="menuHeading">
                                                    <div class="megamenuToogle-wrapper">
                                                        <div class="megamenuToogle-pattern">
                                                            <div class="container">
                                                                <div>
                                                                    <span></span>
                                                                    <span></span>
                                                                    <span></span>
                                                                </div>
                                                                Categories
                                                                <i
                                                                    class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-header">
                                                    <button type="button" id="show-verticalmenu"
                                                        data-toggle="collapse" class="navbar-toggle">
                                                        <span class="icon-bar" style="width: 12px;"></span>
                                                        <span class="icon-bar" style="width: 16px;"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>
                                                <div class="vertical-wrapper">
                                                    <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                    <div class="megamenu-pattern">
                                                        <div class="container">
                                                            <ul class="megamenu">
                                                                <li class="item-vertical style1 with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Automotive &amp; Motocrycle</span>
                                                                            <b class="fa fa-angle-right"></b>
                                                                        </strong>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="100">
                                                                        <div class="content">
                                                                            <div class="row">
                                                                                <div class="col-sm-8">
                                                                                    <div class="categories ">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-sm-6 static-menu">
                                                                                                <div class="menu">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#"
                                                                                                                class="main-menu">Automotive</a>
                                                                                                            <ul>
                                                                                                                <li> <a
                                                                                                                        href="#">Car
                                                                                                                        Alarms
                                                                                                                        and
                                                                                                                        Security</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Car
                                                                                                                        Audio
                                                                                                                        &amp;
                                                                                                                        Speakers</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Gadgets
                                                                                                                        &amp;
                                                                                                                        Auto
                                                                                                                        Parts</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">More
                                                                                                                        Car
                                                                                                                        Accessories</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#"
                                                                                                                class="main-menu">Computer</a>
                                                                                                            <ul>
                                                                                                                <li> <a
                                                                                                                        href="#">Camping
                                                                                                                        &amp;
                                                                                                                        Hiking</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Cusen
                                                                                                                        mariot</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Denta
                                                                                                                        magela</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Engite
                                                                                                                        nanet</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-6 static-menu">
                                                                                                <div class="menu">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#"
                                                                                                                class="main-menu">Electronics
                                                                                                            </a>
                                                                                                            <ul>
                                                                                                                <li> <a
                                                                                                                        href="#">Angene
                                                                                                                        mafin</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Egante
                                                                                                                        mangetes</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Gante
                                                                                                                        extensg</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Guntes
                                                                                                                        magesg</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#"
                                                                                                                class="main-menu">Mobile
                                                                                                                &amp;
                                                                                                                Tablet
                                                                                                            </a>
                                                                                                            <ul>
                                                                                                                <li> <a
                                                                                                                        href="#">Hanet
                                                                                                                        magente</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Knage
                                                                                                                        unget</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Latenge
                                                                                                                        mange</a>
                                                                                                                </li>
                                                                                                                <li> <a
                                                                                                                        href="#">Punge
                                                                                                                        nenune</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="row img-banner">
                                                                                        <a href="#"><img
                                                                                                class="lazyload img-responsive"
                                                                                                data-sizes="auto"
                                                                                                src="{{ asset('frontend/haian/image/demo/cms/img-static-megamenu-h.png') }}"
                                                                                                alt="banner"></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Electronic</span>
                                                                        </strong>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <span class="label"></span>
                                                                        <strong>
                                                                            <span>Sports &amp; Outdoors</span>
                                                                            <b class="fa fa-angle-right"></b>
                                                                        </strong>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="60">
                                                                        <div class="content">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-md-12 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            onclick="window.location = '81';"
                                                                                                            class="main-menu">Mobile
                                                                                                            Accessories</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '33_63';">Gadgets
                                                                                                                    &amp;
                                                                                                                    Auto
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '24_64';">Bath
                                                                                                                    &amp;
                                                                                                                    Body</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '17';">Bags,
                                                                                                                    Holiday
                                                                                                                    Supplies</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            onclick="window.location = '18_46';"
                                                                                                            class="main-menu">Battereries
                                                                                                            &amp;
                                                                                                            Chargers</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '25_28';">Outdoor
                                                                                                                    &amp;
                                                                                                                    Traveling</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '80';">Flashlights
                                                                                                                    &amp;
                                                                                                                    Lamps</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '24_66';">Fragrances</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            onclick="window.location = '25_31';"
                                                                                                            class="main-menu">Fishing</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '57_73';">FPV
                                                                                                                    System
                                                                                                                    &amp;
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '18';">Electronics</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '20_76';">Earings</a>
                                                                                                            </li>
                                                                                                            <li><a href="#"
                                                                                                                    onclick="window.location = '33_60';">More
                                                                                                                    Car
                                                                                                                    Accessories</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row banner">
                                                                                        <a href="#">
                                                                                            <img class="lazyload img-responsive"
                                                                                                data-sizes="auto"
                                                                                                src="{{ asset('frontend/haian/image/demo/cms/menu_bg2.jpg') }}"
                                                                                                alt="banner1">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item-vertical with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Health &amp; Beauty</span>
                                                                            <b class="fa fa-angle-right"></b>
                                                                        </strong>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="100">
                                                                        <div class="content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">Car
                                                                                                            Alarms and
                                                                                                            Security</a>
                                                                                                        <ul>
                                                                                                            <li><a
                                                                                                                    href="#">Car
                                                                                                                    Audio
                                                                                                                    &amp;
                                                                                                                    Speakers</a>
                                                                                                            </li>
                                                                                                            <li><a
                                                                                                                    href="#">Gadgets
                                                                                                                    &amp;
                                                                                                                    Auto
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                            <li><a
                                                                                                                    href="#">Gadgets
                                                                                                                    &amp;
                                                                                                                    Auto
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                            <li><a
                                                                                                                    href="#">Headphones,
                                                                                                                    Headsets</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="24"
                                                                                                            onclick="window.location = '24';"
                                                                                                            class="main-menu">Health
                                                                                                            &amp;
                                                                                                            Beauty</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Home
                                                                                                                    Audio</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Helicopters
                                                                                                                    &amp;
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Outdoor
                                                                                                                    &amp;
                                                                                                                    Traveling</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Toys
                                                                                                                    &amp;
                                                                                                                    Hobbies</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">Electronics</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Earings</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Salon
                                                                                                                    &amp;
                                                                                                                    Spa
                                                                                                                    Equipment</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Shaving
                                                                                                                    &amp;
                                                                                                                    Hair
                                                                                                                    Removal</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Smartphone
                                                                                                                    &amp;
                                                                                                                    Tablets</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">Sports
                                                                                                            &amp;
                                                                                                            Outdoors</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Flashlights
                                                                                                                    &amp;
                                                                                                                    Lamps</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Fragrances</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Fishing</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">FPV
                                                                                                                    System
                                                                                                                    &amp;
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">More
                                                                                                            Car
                                                                                                            Accessories</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Lighter
                                                                                                                    &amp;
                                                                                                                    Cigar
                                                                                                                    Supplies</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Mp3
                                                                                                                    Players
                                                                                                                    &amp;
                                                                                                                    Accessories</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Men
                                                                                                                    Watches</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Mobile
                                                                                                                    Accessories</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">Gadgets
                                                                                                            &amp; Auto
                                                                                                            Parts</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Gift
                                                                                                                    &amp;
                                                                                                                    Lifestyle
                                                                                                                    Gadgets</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Gift
                                                                                                                    for
                                                                                                                    Man</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Gift
                                                                                                                    for
                                                                                                                    Woman</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Gift
                                                                                                                    for
                                                                                                                    Woman</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item-vertical css-menu with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">

                                                                        <strong>
                                                                            <span>Smartphone &amp; Tablets</span>
                                                                            <b class="fa fa-angle-right"></b>
                                                                        </strong>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="30"
                                                                        style="width: 270px; display: none; right: 0px;">
                                                                        <div class="content" style="display: none;">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="categories ">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-sm-12 hover-menu">
                                                                                                <div class="menu">
                                                                                                    <ul>
                                                                                                        <li><a href="#"
                                                                                                                class="main-menu">Headphones,
                                                                                                                Headsets
                                                                                                                <b
                                                                                                                    class="fa fa-angle-right"></b></a>
                                                                                                            <ul>
                                                                                                                <li><a
                                                                                                                        href="#">Head
                                                                                                                        Magente</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Head
                                                                                                                        Unget</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Latenge
                                                                                                                        mange</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Car
                                                                                                                        Alarms
                                                                                                                        and
                                                                                                                        Security</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                class="main-menu">Home
                                                                                                                Audio</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                class="main-menu">Health
                                                                                                                &amp;
                                                                                                                Beauty<b
                                                                                                                    class="fa fa-angle-right"></b></a>
                                                                                                            <ul>
                                                                                                                <li><a
                                                                                                                        href="#">Rengae
                                                                                                                        manges</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Mobiles</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Macs</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Punge
                                                                                                                        nenune</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                class="main-menu">Helicopters
                                                                                                                &amp;
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                class="main-menu">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers<b
                                                                                                                    class="fa fa-angle-right"></b></a>
                                                                                                            <ul>
                                                                                                                <li><a
                                                                                                                        href="#">Qunge
                                                                                                                        genga</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Accessories</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Laptops
                                                                                                                        &amp;
                                                                                                                        Notebooks</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Flashlights &amp; Lamps</span>
                                                                        </strong>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Camera &amp; Photo</span>
                                                                        </strong>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Smartphone &amp; Tablets</span>
                                                                        </strong>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Outdoor &amp; Traveling
                                                                                Supplies</span>
                                                                        </strong>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" style="display: none;">
                                                                    <p class="close-menu"></p>

                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Health &amp; Beauty</span>
                                                                        </strong>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                        <strong>
                                                                            <span>Toys &amp; Hobbies </span>
                                                                        </strong>
                                                                    </a>
                                                                </li>

                                                                <li class="loadmore">
                                                                    <i class="fa fa-plus-square-o"></i>
                                                                    <span class="more-view">More Categories</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Main menu -->
                            <div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">
                                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-9 header_search">
                                    <!-- Search -->
                                    <div id="sosearchpro" class="search-pro">
                                        <form method="GET" action="index.html">
                                            <div id="search0" class="search input-group">
                                                <div class="select_category filter_type  icon-select">
                                                    <select class="no-border" name="category_id">
                                                        <option value="0">All Category</option>
                                                        <option value="20">Desktops</option>
                                                        <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home
                                                            9
                                                        </option>

                                                        <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home
                                                            8
                                                        </option>

                                                        <option value="18">Laptops &amp; Notebooks</option>
                                                        <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs
                                                        </option>

                                                        <option value="45">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows
                                                        </option>

                                                        <option value="25">Automotive</option>
                                                        <option value="35">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadgets
                                                            &amp; Auto Parts</option>

                                                        <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More
                                                            Car
                                                            Accessories</option>

                                                        <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car
                                                            Alarms and Security</option>

                                                        <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car
                                                            Audio
                                                            &amp; Speakers</option>

                                                        <option value="30">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers
                                                        </option>

                                                        <option value="31">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners
                                                        </option>

                                                        <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web
                                                            Cameras</option>
                                                        <option value="57">Mobile &amp; Tablet </option>
                                                        <option value="68">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hanet
                                                            magente</option>

                                                        <option value="69">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knage
                                                            unget</option>

                                                        <option value="70">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latenge
                                                            mange</option>

                                                        <option value="67">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punge
                                                            nenune</option>

                                                        <option value="71">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qunge
                                                            genga</option>

                                                        <option value="65">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tange
                                                            manue</option>

                                                        <option value="17">Electronics </option>
                                                        <option value="64">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angene
                                                            mafin</option>

                                                        <option value="60">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Egante
                                                            mangetes</option>

                                                        <option value="62">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gante
                                                            extensg</option>

                                                        <option value="61">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guntes
                                                            magesg</option>

                                                        <option value="66">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rengae
                                                            manges</option>

                                                        <option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sine
                                                            engain</option>

                                                        <option value="33">Apparel</option>
                                                        <option value="76">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>

                                                        <option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bags
                                                        </option>

                                                        <option value="74">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computers
                                                        </option>

                                                        <option value="72">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option>

                                                        <option value="79">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion
                                                        </option>

                                                        <option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men
                                                        </option>

                                                        <option value="73">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobiles
                                                        </option>

                                                        <option value="75">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports
                                                        </option>

                                                        <option value="81">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watches
                                                        </option>

                                                        <option value="78">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women
                                                        </option>

                                                        <option value="34">Computer</option>
                                                        <option value="43">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camping
                                                            &amp; Hiking</option>

                                                        <option value="47">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cusen
                                                            mariot</option>

                                                        <option value="48">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denta
                                                            magela</option>

                                                        <option value="55">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engite
                                                            nanet</option>

                                                        <option value="44">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theid
                                                            cupensg</option>

                                                        <option value="59">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verture
                                                            agoent</option>
                                                    </select>
                                                </div>

                                                <input class="autosearch-input form-control" type="text"
                                                    value="" size="50" autocomplete="off"
                                                    placeholder="Search" name="search">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="button-search btn btn-primary"
                                                        name="submit_search"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="route" value="product/search" />
                                        </form>
                                    </div>
                                    <!-- //end Search -->
                                </div>
                                <div class="block-cart">
                                    <!--cart-->
                                    <div class="shopping_cart pull-right">
                                        <div id="cart" class=" btn-group btn-shopping-cart">
                                            <a data-loading-text="Loading..."
                                                class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                                                <div class="shopcart">
                                                    <span class="handle pull-left"></span>
                                                    <span class="text-shopping-cart hidden-xs"> My cart </span>
                                                    <span
                                                        class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
                                                        <i class="fa fa-cart-plus"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <ul class="tab-content content dropdown-menu pull-right shoppingcart-box"
                                                role="menu">
                                                <li>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center" style="width:70px">
                                                                    <a href="product.html"> <img
                                                                            class="lazyload preview" data-sizes="auto"
                                                                            src="{{ asset('frontend/haian/image/demo/shop/product/35.jpg') }}"
                                                                            style="width:70px" alt="Filet Mign"
                                                                            title="Filet Mign"> </a>
                                                                </td>
                                                                <td class="text-left"> <a class="cart_product_name"
                                                                        href="product.html">Filet Mign</a> </td>
                                                                <td class="text-center"> x1 </td>
                                                                <td class="text-center"> $1,202.00 </td>
                                                                <td class="text-right">
                                                                    <a href="product.html" class="fa fa-edit"></a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a onclick="cart.remove('2');"
                                                                        class="fa fa-times fa-delete"></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center" style="width:70px">
                                                                    <a href="product.html"> <img
                                                                            class="lazyload preview" data-sizes="auto"
                                                                            src="{{ asset('frontend/haian/image/demo/shop/product/141.jpg') }}"
                                                                            style="width:70px" alt="Canon EOS 5D"
                                                                            title="Canon EOS 5D"> </a>
                                                                </td>
                                                                <td class="text-left"> <a class="cart_product_name"
                                                                        href="product.html">Canon EOS 5D</a> </td>
                                                                <td class="text-center"> x1 </td>
                                                                <td class="text-center"> $60.00 </td>
                                                                <td class="text-right">
                                                                    <a href="product.html" class="fa fa-edit"></a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a onclick="cart.remove('1');"
                                                                        class="fa fa-times fa-delete"></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                                <li>
                                                    <div>
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                                    </td>
                                                                    <td class="text-right">$1,060.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><strong>Eco Tax
                                                                            (-2.00)</strong>
                                                                    </td>
                                                                    <td class="text-right">$2.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><strong>VAT (20%)</strong>
                                                                    </td>
                                                                    <td class="text-right">$200.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left"><strong>Total</strong>
                                                                    </td>
                                                                    <td class="text-right">$1,262.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p class="text-center"> <a class="btn view-cart"
                                                                href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i>View
                                                                Cart</a>&nbsp;&nbsp;&nbsp; <a
                                                                class="btn btn-mega checkout-cart"
                                                                href="checkout.html"><i
                                                                    class="fa fa-share"></i>Checkout</a> </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--//cart-->
                                </div>
                                <div class="header_custom_link hidden-xs">
                                    <ul>
                                        <li><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- //end Main menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- //Header Container  -->
        <div class="content" style="background-color: #F0F0E9;">
            <section id="slider" style="padding-top: 30px;">
                <!--slider-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-carousel" data-slide-to="1"></li>
                                    <li data-target="#slider-carousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($all_SL_BN_home as $slider)
                                        @php
                                            $i++;
                                        @endphp
                                        @if ($slider->type == 0)
                                            <div class="item {{ $i == 1 ? 'active' : '' }}">
                                                <div class="col-sm-12">
                                                    <img src="{{ $slider->url }}"
                                                        style="width: 100%; height:400px;"
                                                        class="img img-responsive">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <a href="#slider-carousel" class="left control-carousel hidden-xs"
                                    data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a href="#slider-carousel" class="right control-carousel hidden-xs"
                                    data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--/slider-->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3" style="padding-left: 40px">
                        <div class="left-sidebar">
                            <div class="leftbox" style="background-color: #FE980F;">
                                <h2 class="title">Danh mục sản phẩm</h2>
                                <div class="panel-group category-products" id="cat_prd">
                                    <!--category-productsr-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            @foreach ($all_categories_prd as $category_prd)
                                                <h3 class="panel-title cat"
                                                    style="margin: 20px 0px 20px 0px;font-weight: bold;">
                                                    <a href="{{ route('ProductsbyCatgr', $category_prd->id) }}"
                                                        style="font-size:18px;">
                                                        {{ $category_prd->product_categories_name }}
                                                    </a>
                                                </h3>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!--/category-products-->
                            </div>

                            <div class="leftbox" style="background-color: #FE980F;">
                                <div class="brands_products">
                                    <!--brands_products-->
                                    <h2 class="title">Sản phẩm mới</h2>
                                    <div class="brands-name">
                                        <ul class="nav nav-pills nav-stacked">
                                            @foreach ($products_new as $product_new)
                                                <li
                                                    style="padding: 15px 0px 15px 0px; border-bottom: 1px solid #ccc;">
                                                    <div class="container">
                                                        <a class="media-left"
                                                            href="{{ route('detailPrdpage', $product_new->id) }}">
                                                            <div class="col-md-12 col-lg-2 col-xs-4 col-sm-4 ">
                                                                <img src="{{ url('responsive_filemanager/source') }}/{{ $product_new->image_product }}"
                                                                    style="width: 100px; height: 100px;">
                                                            </div>
                                                            <div
                                                                class="col-md-12 col-lg-10 col-xs-8 col-sm-8 media-body">
                                                                <h5
                                                                    style="margin: 35px 0px 0px 0px; font-weight: bold; transition: .3s ease-in;">
                                                                    {{ $product_new->products_name }}</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--/brands_products-->
                            </div>

                            @foreach ($all_SL_BN_home as $banner)
                                @if ($banner->type == 1)
                                    <div class="shipping text-center">
                                        <!--shipping-->
                                        <img src="{{ $banner->url }}" style="width: 100%; height: 300px;">
                                    </div>
                                    <!--/shipping-->
                                @endif
                            @endforeach
                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div>
        <script type="text/javascript">
            var $typeheader = 'header-home1';
        </script>
        <!-- Footer Container -->
        <footer class="footer-container typefooter-1">
            <!-- FOOTER TOP -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="module social_block col-md-3 col-sm-12 col-xs-12">
                                <ul class="social-block ">
                                    <li class="facebook"><a class="_blank"
                                            href="https://www.facebook.com/MagenTech" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons"
                                            target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="rss"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-rss"></i></a></li>
                                    <li class="google_plus"><a class="_blank"
                                            href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i
                                                class="fa  fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a class="_blank"
                                            href="https://www.pinterest.com/smartaddons/" target="_blank"><i
                                                class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="module news-letter col-md-9 col-sm-12 col-xs-12">
                                <div class="newsletter">
                                    <div class="title-block">
                                        <div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
                                        <div class="pre-text">
                                            Duis at ante non massa consectetur iaculis id non tellus
                                        </div>
                                    </div>
                                    <div class="block_content">
                                        <form method="post" name="signup" id="signup"
                                            class="btn-group form-inline signup">
                                            <div class="form-group required send-mail">
                                                <div class="input-box">
                                                    <input type="email" placeholder="Your email address..."
                                                        value="" class="form-control" id="txtemail"
                                                        name="txtemail" size="55">
                                                </div>
                                                <div class="subcribe">
                                                    <button class="btn btn-default btn-lg" type="submit"
                                                        onclick="return subscribe_newsletter();" name="submit">
                                                        Subscribe </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER CENTER -->
            <div class="footer-center">
                <div class="container content">
                    <div class="row">
                        <!-- BOX INFO -->
                        <div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
                            <div class="module ">
                                <div class="content-block-footer">
                                    <div class="footer-logo">
                                        <a href="index.html"><img class="lazyload img-responsive"
                                                data-sizes="auto"
                                                src="{{ asset('frontend/haian/image/demo/logos/theme_logo.png') }}"
                                                title="Your Store" alt="Your Store" /></a>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <!-- BOX ACCOUT -->
                        <div class="col-md-3 col-sm-6 box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">My Account</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BOX INFOMATION -->
                        <div class="col-md-3 col-sm-6 box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Information</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Pricing Tables</a></li>
                                        <li><a href="#">Terms And Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BOX ABOUT -->
                        <div class="col-md-3  col-sm-6 collapsed-block box-footer">
                            <div class="module ">
                                <h3 class="modtitle">About Us</h3>
                                <div class="modcontent">
                                    <ul class="contact-address">
                                        <li><span class="fa fa-home"></span> My Company, 42 avenue des Champs</li>
                                        <li><span class="fa fa-envelope"></span> Email: <a href="#">
                                                sales@yourcompany.com</a></li>
                                        <li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>
                                    </ul>
                                    <ul class="payment-method">
                                        <li><a title="Payment Method" href="#"><img
                                                    class="lazyload img-responsive" data-sizes="auto"
                                                    src="{{ asset('frontend/haian/image/demo/cms/payment/payment-1.png') }}"
                                                    alt="Payment"></a>
                                        </li>
                                        <li><a title="Payment Method" href="#"><img
                                                    class="lazyload img-responsive" data-sizes="auto"
                                                    src="{{ asset('frontend/haian/image/demo/cms/payment/payment-2.png') }}"
                                                    alt="Payment"></a>
                                        </li>
                                        <li><a title="Payment Method" href="#"><img
                                                    class="lazyload img-responsive" data-sizes="auto"
                                                    src="{{ asset('frontend/haian/image/demo/cms/payment/payment-3.png') }}"
                                                    alt="Payment"></a>
                                        </li>
                                        <li><a title="Payment Method" href="#"><img
                                                    class="lazyload img-responsive" data-sizes="auto"
                                                    src="{{ asset('frontend/haian/image/demo/cms/payment/payment-4.png') }}"
                                                    alt="Payment"></a>
                                        </li>
                                        <li><a title="Payment Method" href="#"><img
                                                    class="lazyload img-responsive" data-sizes="auto"
                                                    src="{{ asset('frontend/haian/image/demo/cms/payment/payment-5.png') }}"
                                                    alt="Payment"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER BOTTOM -->
            <div class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            Maxshop © 2018 - 2019. MAGENTECH Store. All Rights Reserved.
                        </div>
                        <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- //end Footer Container -->

    </div>
    <!-- Social widgets -->
    <section class="social-widgets visible-lg">
        <ul class="items">
            <li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span
                        class="fa fa-facebook"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>FACEBOOK</h5>
                    </div>
                    <div class="loading">
                        <img class="lazyload ajaxloader" data-sizes="auto"
                            src="{{ asset('frontend/haian/image/theme/lazy-loader.gif') }}" alt="loader">
                    </div>
                </div>
            </li>
            <li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato"
                    class="tab-icon"><span class="fa fa-twitter"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>TWITTER FEEDS</h5>
                    </div>
                    <div class="loading">
                        <img class="lazyload ajaxloader" data-sizes="auto"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            src="{{ asset('frontend/haian/image/theme/lazy-loader.gif') }}" alt="loader">
                    </div>
                </div>
            </li>
            <li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY"
                    class="tab-icon"><span class="fa fa-youtube"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>YouTube</h5>
                    </div>
                    <div class="loading"> <img class="lazyload ajaxloader" data-sizes="auto"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            src="{{ asset('frontend/haian/image/theme/lazy-loader.gif') }}" alt="loader"></div>
                </div>
            </li>
        </ul>
    </section> <!-- End Social widgets -->
    </div>
    <!-- Include Libs & Plugins
 ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('frontend/haian/js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/unveil/jquery.unveil.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/datetimepicker/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/datetimepicker/bootstrap-datetimepicker.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/jquery-ui/jquery-ui.min.js') }}"></script>


    <!-- Theme files
 ============================================ -->
    <script type="text/javascript" src="{{ asset('frontend/haian/js/themejs/application.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/themejs/toppanel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/haian/js/themejs/cpanel.js') }}"></script>

    {{--
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/stickjs.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('frontend/js/html5shiv.js')}}"></script>
<script src="{{asset('frontend/js/respond.min.js')}}"></script>
<script src="{{asset('frontend/tab.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function (){

        load_comment();

        function load_comment(){
            var product_id = $('.comment_prd_id').val();
            var _token = $('input[name = "_token"]').val();
            $.ajax({
                url:"{{url('/load-comment')}}",
                method:"POST",
                data:{product_id:product_id, _token:_token},
                success:function (data){
                    $('#comment_show').html(data);
                }
            });
        }
    });
</script> --}}
</body>

</html>
