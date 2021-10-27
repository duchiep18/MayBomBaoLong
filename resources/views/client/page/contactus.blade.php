@extends('client.layout.master')

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;">
        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
            <h2 class="title text-center">Liên hệ</h2>
            <br>
            <br>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div style="margin-bottom: 30px;">
                    <div style="margin-left:15px; margin-right: 15px;">
                        <p><strong>Địa chỉ:</strong> Lô M8, cụm công nghiệp địa phương số 2, Xã Hợp Thành, Huyện Cao Lộc, Tỉnh Lạng Sơn</p>
                        <p><strong>ĐT:</strong> 02053.876.755</p>
                        <p><strong>Email:</strong> ...</p>
                    </div>
                </div>

                <div style="margin-bottom: 30px;">
                    <div style="margin-left:15px; margin-right: 15px;">
                        <p><strong>Họ và tên *</strong></p>
                        <input type="text" id="Uname" name="Uname" placeholder="Vui lòng nhập tên của bạn" style="width: 100%;">
                        <p style="margin-top: 15px;"><strong>Email *</strong></p>
                        <input type="text" id="Umail" name="Umail" placeholder="Vui lòng nhập email" style="width: 100%;">
                        <p style="margin-top: 15px;"><strong>Số điện thoại *</strong></p>
                        <input type="text" id="phone" name="phone" placeholder="Cung cấp SĐT để được hỗ trợ" style="width: 100%;">
                        <p style="margin-top: 15px;"><strong>Nội dung</strong></p>
                        <textarea id="comment" name="comment" rows="4" cols="50" style="background:white; border:1px solid #9E9E9E; border-radius: 5px;"></textarea>
                        <button  class ="send" type="button" style="border-radius: 5px; background:#fe960fcc; color: white; display: inline-block; border: 2px solid #FE980F; margin-top: 15px; padding: 5px 0 5px 0; width: 20%;"><a style="color: white;" href="pay.html">Gửi</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ha Noi&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">FNF Online Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
            </div>
        </div><!--Giới thiệu-->
    </div>
@stop
