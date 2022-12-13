@extends('client.layout.master')

@section('content')
    <div class="content" style="background-color: #F0F0E9;">
                    <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 padding-right" style="padding-right: 15px;padding-left: 40px">
                    @foreach($all_categories_prd as $category_prd)
                        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc;  margin-bottom: 20px">
                            <h2 class="title pull-left top-item">{{$category_prd->product_categories_name}}</h2>
                                @foreach($products_by_category as $product_by_category)
                                @if($product_by_category->categories_prd_id == $category_prd->id)
                                <div class="col-sm-6 col-lg-3 col-xs-6 col-md-3 change-size" style="height:fit-content; margin: 10px 10px 0 50px; border: 8px;">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{url('responsive_filemanager/source')}}/{{$product_by_category->image_product}}" style="width: 180px; height: 180px;">
                                            </div>

                                            <div class="product-overlay " style= opacity:85%;>
                                                <div class="overlay-content" style="height: fit-content">
                                                    <h4 style="color: black;"><bold>{{$product_by_category->products_name}}</bold></h4>
                                                    <p>{!! $product_by_category->products_description!!}</p>
                                                    <a href="#" class="menu-toggle">
                                                        <span class="material-icons" style="color: red">phone</span>
                                                        <span style="color: red; font-weight: bold; font-size: 14px; padding-bottom: 10px">Liên Hệ</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container1">
                                        <a href="" style="text-decoration: none; color: black; transition: .3s ease-in;" class="item-name-hover">
                                        <p style="transition: .3s ease-in; text-align: center; font-weight: bold;top: 50%; left: 50%;font-size: 18px">{{$product_by_category->products_name}}</p>
                                        </a>
                                        <br>
                                        <a style="padding-bottom: 10px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" href="{{route('detailPrdpage', $product_by_category->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Chi tiết</a>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            <br><br>
                        </div>
                        <h2 class="title text-center bottom-item" style="margin: -20px 0 20px 0;"><a href="{{route('ProductsbyCatgr', $category_prd->id)}}"><small style="color: black;">Xem tất cả</small></a></h2>
                    @endforeach
                        <div class="footer-top">
                            <div class="container" style="width: 100%;">
                                <div class="row" style="background-color: white; border: 1px solid #ccc; border-radius: 5px; margin: 20px 0 0 -15px; ">
                                    <h2 class="title pull-left top-item">Danh mục bài viết</h2>
                                    <div class="col-sm-9 col-lg-8 col-xs-12 col-md-8">
                                    @foreach($all_posts_home as $post_home)
                                        @if($post_home->id != 16)
                                        <div class="col-sm-6 col-xs-6 col-lg-3 col-md-3">
                                            <div class=" text-center">
                                                <a href="#">
                                                    <div class="">
                                                        <!--<img src="{{url('responsive_filemanager/source')}}/{{$post_home->image_post}}" style="width: 100px; height: 100px;">-->
                                                        @if($post_home->image_post)
                                                            <img src="{{url('responsive_filemanager/source')}}/{{$post_home->image_post}}" style="width: 150px; height: 150px;">

                                                        @else
                                                            <img src="/responsive_filemanager/source/imgdefault.jpg" style="width: 150px; height: 150px;">
                                                        @endif
                                                    </div>
                                                </a>
                                                <h4><bold>{{$post_home->title}}</bold></h4>
                                                <p>{!! $post_home-> description !!} </p>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    </div>
                                    <div class="col-sm-3 col-xs-12 col-lg-4 col-md-4">
                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                            <div class="video-gallery text-center">
                                                <a href="#">
                                                    <div class="iframe-img">
                                                        <img src="images/home/iframe4.png" alt="" />
                                                    </div>
                                                    <div class="overlay-icon">
                                                        <i class="fa fa-play-circle-o"></i>
                                                    </div>
                                                </a>
                                                <p>Circle of Hands</p>
                                                <h2>24 DEC 2014</h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>

@stop
