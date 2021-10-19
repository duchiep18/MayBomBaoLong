<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang chủ | Bảo Long</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>

    <![endif]-->
    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/images/ico/apple-touch-icon-72-precomposed.')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <style>
        .contactinfo ul li a {
            color: white;
        }

        .mainmenu ul li a {
            font-size: 20px;
        }
        .social-icons ul li a {
            color: white;
        }

        .search1 {
            border: 1px solid #ccc;
            border-left: none;
            height: 34px;
            margin-left: -10px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }

        h2.title {
            padding-top: 20px;
            color: #FE980F;
            margin-bottom: 15px;
        }

        h2.title:before {
            background-color: #FE980F;
        }

        .leftbox {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .mainmenu ul li a:hover, .mainmenu ul li a.active, .shop-menu ul li a.active {
            color: #FE980F;
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 10px;
        }

        .navbar-toggle {
            margin: 0px 0px 8px 0px;
        }

        .left-sidebar h2, .brands_products h2 {
            color: white;
            margin-bottom: 15px;
            padding-top: 15px;
        }

        .shop-menu ul li a {
            color: #FE980F;
            font-size: 18px;
        }

        .productinfo h2 {
            color: #CD5C5C;
        }

        .recommended-item-control i {
            background: black;
        }

        .contactinfo ul li a {
            font-size: 14px;
        }
        .add-to-cart {
            background: #CD5C5C;
            color: white;
        }
        .add-to-cart:hover {
            background: #FE980F;
        }


        .category-products {
            background-color: white;
            margin-bottom: unset;
            border-radius: 4px;
        }

        .well {
            width: 100%;
            margin-bottom: unset;
        }
        .brands-name {
            background-color: white;
            border-radius: 4px;
        }

        .top-item {
            background-color: #FE980F;

        }

        h2.top-item {
            width: 100%;
            color: white;
            margin-left: unset;
            margin-right: unset;
            padding: 15px 0 15px 15px;
        }

        .bottom-item {
            background-color: #ccc;
        }

        h2.bottom-item {
            width: 100%;
            color: black;
            margin-left: unset;
            margin-right: unset;
            margin-top: -20px;
            padding: 15px 0 15px 15px;
        }

        a.bottom-item {
            text-decoration: none;
        }

        .left-sidebar h2:after, h2.title:after {
            content: unset;
        }

        h2.title:before {
            width: unset;
            margin-left: unset;
        }

        .slider.slider-horizontal {
            max-width: 100%;
        }

        .footer-widget .container {
            border-top: unset;
            background: #ccc;
        }

        .footer-widget {
            background: #ccc;
            margin-bottom: unset;
            padding-bottom: 68px;
        }

        .bottom-item:hover {
            background: #999!important;
        }
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }


        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #FE980F;
        }
    </style>
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top" style="background: #FE980F;"><!--header_top-->
        <div class="container" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                    <a href="{{route('homepage')}}"><img src="/frontend/baolong_logo.jpg" class="center" alt="" /></a>
                </div>
                <div class="col-sm-8 searchbar">
                    <div class="shop-menu">
                        <ul class="nav navbar-nav col-lg-12 hidden-sm hidden-xs" style="margin-bottom: 15px;">
                            <li><a href="#"><i class="fa fa-thumbs-up"></i> Hàng chính hãng</a></li>
                            <li><a href="#"><i class="fa fa-recycle"></i> Đổi trả dễ dàng</a></li>
                            <li><a href="#"><i class="fa fa-shipping-fast"></i> Giao hàng tận nơi</a></li>
                            <li><a href="#"><i class="fa fa-dol"></i> Nhận hàng trả tiền</a></li>
                        </ul>
                    </div>
                    <div class="shop-menu">
                        <ul class="nav navbar-nav hidden-lg hidden-md col-sm-12 col-xs-12" style="margin-bottom: 15px;">
                            <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <select class="form-control" style="max-width: fit-content; display: inline-block;">
                            <option>Chọn danh mục</option>
                        </select>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="display:inline-block; width: 50%;">
                        <button class="search1 btn btn-rounded btn-sm my-0 ml-sm-2" type="submit" style="background-color: #FE980F">Tìm kiếm</button>
                    </div>
                    <div class="shop-menu">
                        <ul class="nav navbar-nav col-lg-12 hidden-xs hidden-sm" style="margin-bottom: 15px;">
                            <li><a href="#" style="font-size: 16px;"><i class="fa fa-star"></i> Yêu thích</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div id="navbar1" class="header-bottom" style="padding-bottom: 5px; z-index: 1000; background-color: #ccc; padding-top: 15px;"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-12 col-md-12 col-xs-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left ">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('homepage')}}">Trang chủ</a></li>
                            <li><a href="{{route('introducepage')}}">Giới thiệu</a></li>
                            <li><a href="{{route('storepage')}}">Cửa hàng</a></li>
                            <li class="dropdown"><a href="{{route('newspage')}}">Tin tức<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($all_categories_post as $val2)
                                        @if($val2 -> category_parent == 11)
                                            <li><a href="{{route('PostsbyCatgr',$val2->id)}}">{{$val2->news_categories_name}}</a>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('homepage')}}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
{{--Left Side--}}
<div class="content" style="background-color: #F0F0E9;">
    <section id="slider" style="padding-top: 30px;"><!--slider-->
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
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="frontend/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="frontend/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3" style="padding-left: 40px">
                <div class="left-sidebar">
                    <div class="leftbox" style="background-color: #FE980F;">
                        <h2 class="title">Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="cat_prd"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    @foreach($all_categories_prd as $category_prd)
                                        <h3 class="panel-title cat" style="margin: 20px 0px 20px 0px;font-weight: bold;">
                                            <a href="{{route('ProductsbyCatgr', $category_prd->id)}}" style="font-size:18px;">
                                                {{$category_prd -> product_categories_name}}
                                            </a>
                                        </h3>
                                    @endforeach
                                </div>

                            </div>

                        </div><!--/category-products-->
                    </div>

                    <div class="leftbox" style="background-color: #FE980F;">
                        <div class="brands_products"><!--brands_products-->
                            <h2 class="title">Sản phẩm mới</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($products_new as $product_new)
                                        <li style="padding: 15px 0px 15px 0px; border-bottom: 1px solid #ccc;">
                                            <div class="container">
                                                <a class="media-left" href="{{route('detailPrdpage', $product_new->id)}}">
                                                    <div class="col-md-12 col-lg-2 col-xs-4 col-sm-4 ">
                                                        <img src="{{url('responsive_filemanager/source')}}/{{$product_new->image_product}}" style="width: 100px; height: 100px;">
                                                    </div>
                                                    <div class="col-md-12 col-lg-10 col-xs-8 col-sm-8 media-body"  >
                                                        <h5 style="margin: 35px 0px 0px 0px; font-weight: bold; transition: .3s ease-in;">{{$product_new -> products_name}}</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                    </div>


                    <div class="shipping text-center"><!--shipping-->
                        <img src="frontend/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->
                </div>
            </div>

            @yield('content')

        </div>
    </div>
</div>

<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-3 col-md-3 col-xs-12">
                    <div class="single-widget">
                        <h2>CÔNG TY BẢO LONG</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><small><b>Địa chỉ:</b></small> ...</li>
                            <li><small><b>Điện thoại:</b></small> ...</li>
                            <li><small><b>Email:</b></small> ...</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-3 col-xs-12">
                    <div class="single-widget">
                        <h2>HƯỚNG DẪN</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Hướng Dẫn Mua Hàng</a></li>
                            <li><a href="#">Hướng Dẫn Thanh Toán</a></li>
                            <li><a href="#">Hướng Dẫn BảoHhành</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-3 col-xs-12">
                    <div class="single-widget">
                        <h2>CHÍNH SÁCH</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Chính Sách Bảo Hành</a></li>
                            <li><a href="#">Chính Sách Đổi Trả</a></li>
                            <li><a href="#">Chính Sách Vận Chuyển</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 col-md-3 col-xs-12">
                    <div class="single-widget">
                        <h2>HỖ TRỢ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Hỗ Trợ</a></li>
                            <li><a href="#">Hỏi Đáp</a></li>
                            <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



</footer><!--/Footer-->

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
</body>

</html>

