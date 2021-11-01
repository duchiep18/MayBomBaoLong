@extends('client.layout.master')

@section('content')

    <div class="content" style="background-color: #F0F0E9;">
        <section style="padding-top: 0px;">
            <div class="container">
                <div class="row" style="padding-bottom: 30px;">
                    <div class="col-sm-12 col-xs-12 col-lg-9 col-md-9 padding-right" style="padding-right: 15px;">
                        <div class="container">
                            <div class="row" style="padding-bottom: 30px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;">
                                    <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
                                        <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 change-size" style="padding: 20px 0 0 20px">
                                            <img class="image responsive" src="{{url('responsive_filemanager/source')}}/{{$prdDetail->image_product}}" style="width: 500px; height: 500px;">
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding: 50px 0 0 100px">
                                            <h2 class="title" style="margin-bottom: unset;font-size: 25px;">{{$prdDetail->products_name}}</h2>

                                            <div style="margin: 30px 0 0 15px;">
                                                <p><strong>{!!  $prdDetail->products_description!!}</strong> </p>

                                                <br>
                                                <div>
                                                    <span class="material-icons" style="color: red; padding: 10px 0 0 0px" >phone</span>
                                                    <span style="color: red; font-weight: bold; font-size: 18px; padding-bottom: 10px">Liên Hệ</span>
                                                </div>
                                                <hr>

                                                <div style="margin-bottom: 15px;">

                                                    <button class="tada" type="button" style="margin-left: 15px; border-radius: 5px; background:#fe960fcc; color: white; display: inline-block; border: 2px solid #FE980F;">Thêm vào giỏ hàng</button>
                                                </div>
                                                <div style="color: #FE980F">
                                                    <p>Cam kết chất lượng</p>
                                                    <p>Giao hàng nhanh chóng</p>
                                                    <p>Thanh toán tại nhà</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--Giới thiệu-->
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px; margin-top: 30px;">
                                    <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc;"><!--Sản phẩm nổi bật-->
                                        <div class="tab">
                                            <button class="tablinks" onclick="openCity(event, 'thongsokythuat')" id="defaultOpen">Mô tả</button>
                                            <button class="tablinks" onclick="openCity(event, 'comments')">Đánh giá</button>
                                        </div>

                                        <!-- Tab content -->
                                        <div id="thongsokythuat" class="tabcontent">
                                            <h3 style="color:#FE980F">Thông số kỹ thuật</h3>
                                            <p>
                                                {!! $prdDetail->products_content !!}
                                            </p>
                                        </div>

                                        <div id="comments" class="tabcontent">
                                            <h3 style="color:#FE980F">Đánh giá</h3>
                                            <div class="col-sm-12">
                                                <ul>
                                                    <li style="padding-left: 0;">
                                                        <a style="padding-right: 80px;" href=""><i class="fa fa-user">Admin</i></a>
                                                        <a style="padding-right: 80px;" href=""><i class="fa fa-clock-o">12:00 AM</i></a>
                                                        <a style="padding-right: 80px;" href=""><i class="fa fa-calendar-o">27-10-2021</i></a>
                                                    </li>
                                                </ul>
                                                <style type="text/css">
                                                    .style-comment{
                                                        border: 1px solid #0D0A0A;
                                                        border-radius: 5px;
                                                        background: #8ba7ba;
                                                    }
                                                </style>
                                                <div class="row style-comment">
                                                    <div class="col-md-2" style="padding-top: 5px; padding-left: 50px;">
                                                        <img class="img img-responsive img-thumbnail" width="50px" height="50px" src="{{url('responsive_filemanager/source/ava comment.jpg')}}" alt="">
                                                    </div>
                                                    <div class="col-md-10" style="padding-top: 5px;padding-left: 0px;">
                                                        <p style="color: green">'.$comment_prd->comment_name.'</p>
                                                        <p>
                                                            '.$comment_prd->comment.'
                                                        </p>
                                                    </div>
                                                </div>
                                                <p></p>

                                            </div>
                                            <p>Hãy viết đánh giá của bạn
                                            <p>Thư điện tử của bạn sẽ không được hiển thị công khai. Các trường bắt buộc được đánh dấu *</p>
                                            <p><strong>Nhận xét của bạn: </strong></p>
                                            <form action="{{route('cmtbyProduct',$prdDetail->id)}}" method="POST">
                                                @csrf
                                                @method('post')
                                                <div style="margin-top: 15px;"></div>
                                                <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6" style="padding-left: 0px;">
                                                    <p><strong>Tên *</strong></p>
                                                    <textarea id="nameU" name="comment_name" rows="1" cols="50" style="border:1px solid #9E9E9E; border-radius: 5px;"></textarea>
                                                @error('comment_name')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                </div>

                                                <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="padding-left: 0px;margin-top: 15px;">
                                                    <p><strong>Bình luận</strong></p>
                                                    <textarea id="comment" name="comment" rows="4" cols="50" style="border:1px solid #9E9E9E; border-radius: 5px;"></textarea>
                                                @error('comment')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                </div>

                                                <input type="hidden" name="cmt_status" id="comment_stt" value="1">
                                                <input type="hidden" name="cmt_product_id" id="comment_prd_id" value="{{$prdDetail->id}}">
                                                <br>
                                                <button class="btn btn-rounded btn-sm my-0 ml-sm-2" type="submit" style="background-color: #FE980F; margin: 15px 15px 15px 0px;">Gửi bình luận</button>
                                            </form>
                                        </div>
                                    </div><!--Giới thiệu-->
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px; margin-top: 30px;">
                                    <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
                                        <h2 class="title pull-left top-item">Sản phẩm tương tự</h2>

                                        <div class="item" style="padding-left: unset;">
                                            @foreach($products as $product)
                                                @if($product->categories_prd_id == $prdDetail->categories_prd_id)
                                                <div class="col-sm-6 col-lg-3 col-xs-6 col-md-3 change-size" style="height:fit-content; margin: 10px 10px 0 50px; border: 8px;">
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
                                                @endif
                                            @endforeach

                                        </div>
                                    </div><!--Giới thiệu-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@stop
