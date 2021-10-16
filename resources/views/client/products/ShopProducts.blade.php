@extends('client.layout.master')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="row" style="padding-bottom: 30px; padding-left: 60px;padding-right: 20px">
                <div class="col-sm-12 col-xs-12 col-lg-9 col-md-9 padding-right" style="padding-right: 15px;">
                    <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc;  margin-bottom: 20px">
                        <h2 class="title pull-left top-item" style="text-align: center">Tất cả sản phẩm</h2>
                        @foreach($products as $product)
                            <div class="col-sm-6 col-lg-2 col-xs-6 col-md-2 change-size" style="height:fit-content; margin: 10px 10px 0 50px; border: 8px;">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 180px; height: 180px;">
                                        </div>

                                        <div class="product-overlay " style= opacity:85%;>
                                            <div class="overlay-content" style="height: fit-content">
                                                <h4 style="color: black;"><bold>{{$product->products_name}}</bold></h4>
                                                <p>{!! $product->products_description!!}</p>
                                                <a href="#" class="menu-toggle">
                                                    <span class="material-icons" style="color: red">phone</span>
                                                    <span style="color: red; font-weight: bold; font-size: 14px; padding-bottom: 10px">Liên Hệ</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container1">
                                    <a href="">
                                        <p style="text-align: center; font-weight: bold;top: 50%; left: 50%;font-size: 18px">{{$product->products_name}}</p>
                                    </a>
                                    <br>
                                    <a style="padding-bottom: 10px; font-weight: bold; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" href="{{route('detailPrdpage', $product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Chi tiết</a>
                                </div>
                            </div>
                        @endforeach
                        <br><br>
                    </div>
                    <h2 class="title text-center bottom-item" style="margin: -20px 0 20px 0;"><a href="#"><small style="color: black;">Xem tất cả</small></a></h2>
                </div>
            </div>
        </div>
    </section>
    </div>

@stop
