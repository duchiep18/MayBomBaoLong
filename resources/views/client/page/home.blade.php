@extends('client.layout.master')

@section('content')

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

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3" style="padding-left: 40px">
                        <div class="left-sidebar">
                            <div class="leftbox" style="background-color: #FE980F;">
                                <h2 class="title">Danh mục</h2>
                                <div class="panel-group category-products" id="cat_prd"><!--category-productsr-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                        @foreach($categories_prd as $category_prd)
                                            <h3 class="panel-title cat" style="margin: 20px 0px 20px 0px;font-weight: bold;">
                                                <a data-toggle="collapse"  href="#" style="font-size:18px;">
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
                                            @foreach($products as $product)
                                            <li style="padding: 20px 0px 0px 0px">
                                                <div class="container">
                                                <a class="media-left" href="#">
                                                    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 ">
                                                    <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 100px; height: 100px;">
                                                    </div>
                                                    <div class="col-md-10 col-lg-10 col-xs-10 col-sm-10 media-body"  >
                                                        <h5 style="margin: 25px 0px 0px 0px; font-weight: bold">{{$product -> products_name}}</h5>
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

                    <div class="col-sm-9 padding-right" style="padding-right: 15px;">
                        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc;"><!--Sản phẩm nổi bật-->
                            @foreach($products as $product)
                            <h2 class="title pull-left top-item">Sản phẩm nổi bật</h2>
                            <div class="col-sm-6 col-lg-3 col-xs-6 col-md-3 piki">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 100px; height: 100px;">
                                        </div>

                                        <div class="product-overlay " style= opacity:70%;>
                                            <div class="overlay-content">
                                                <h2 style="color: black"><bold>$56</bold></h2>
                                                <p style="color: black">Easy Polo Black Edition</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container1" style="relative;">
                                    <p style="padding-bottom: 20px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Easy Polo Black Edition</p>
                                    <br>
                                    <a  style="padding-bottom: 10px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Chi tiết</a>
                                </div>
                            </div>
                                <div style="text-align:center ">
                                    {{$products->appends($_GET)}}
                                </div>
                            <h2 class="title pull-left top-item">Máy bơm nước</h2>
                                        <div class="col-sm-6 col-lg-3 col-xs-6 col-md-3 piki">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 100px; height: 100px;">
                                                    </div>

                                                    <div class="product-overlay " style= opacity:70%;>
                                                        <div class="overlay-content">
                                                            <h2 style="color: black"><bold>$56</bold></h2>
                                                            <p style="color: black">Easy Polo Black Edition</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container1" style="relative;">
                                                <p style="padding-bottom: 20px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Easy Polo Black Edition</p>
                                                <br>
                                                <a  style="padding-bottom: 10px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Chi tiết</a>
                                            </div>
                                        </div>
                                        <div style="text-align:center ">
                                             {{$products->appends($_GET)}}
                                        </div>

                        </div>
                        <h2 class="title text-center bottom-item"><a href="#"><small style="color: black;">Xem tất cả</small></a></h2>

                        <br>

                        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc;"><!--Sản phẩm nổi bật-->
                            <h2 class="title pull-left top-item">Động cơ điện</h2>

                                <div class="col-sm-6 col-lg-3 col-xs-6 col-md-3 piki">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 100px; height: 100px;">
                                            </div>

                                            <div class="product-overlay " style= opacity:70%;>
                                                <div class="overlay-content">
                                                    <h2 style="color: black"><bold>$56</bold></h2>
                                                    <p style="color: black">Easy Polo Black Edition</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container1" style="relative;">
                                        <p style="padding-bottom: 20px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Easy Polo Black Edition</p>
                                        <br>
                                        <a  style="padding-bottom: 10px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" href="#" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Chi tiết</a>
                                    </div>
                                </div>
                            @endforeach
                            <div style="text-align:center ">
                                {{$products->appends($_GET)}}
                            </div>


                        </div>

                        <h2 class="title text-center bottom-item" style="margin-bottom: 0px;"><a href="#"><small style="color: black;">Xem tất cả</small></a></h2>
                    </div><!--Sản phẩm nổi bật-->


                    </div>
                </div>
            </div>
        </section>

@stop
