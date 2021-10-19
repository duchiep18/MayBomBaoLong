@extends('client.layout.master')

@section('content')

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;">
        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
            <div style="margin-bottom: 30px;">
                <h2 class="title pull-left top-item">{{$postDetail->title}}</h2>
                <div style="margin-left:15px; margin-right: 15px;">
                    <p>{!! $postDetail -> content !!}</p>
                </div>
            </div>

            <div style="margin-bottom: 30px;">
                <h2 class="title pull-left bottom-item">Ý KIẾN BÌNH LUẬN</h2>
                <div style="margin: 15px 15px 0 15px;">
                    <p>Trả lời</p>
                    <p>Thư điện tử của bạn sẽ không được hiển thị công khai. Các trường bắt buộc được đánh dấu *</p>
                    <p><strong>Bình luận</strong></p>
                    <textarea id="comment" name="comment" rows="4" cols="50" style="border:1px solid #9E9E9E; border-radius: 5px;">
                                    </textarea>
                </div>
                <br>
                <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4">
                    <p><strong>Tên *</strong></p>
                    <textarea id="nameU" name="nameU" rows="1" cols="50" style="border:1px solid #9E9E9E; border-radius: 5px;"></textarea>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4">
                    <p><strong>Thư điện tử *</strong></p>
                    <textarea id="mail" name="mail" rows="1" cols="50" style="border:1px solid #9E9E9E; border-radius: 5px;"></textarea>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4">
                    <p><strong>Trang web *</strong></p>
                    <textarea id="web" name="web" rows="1" cols="50" style="border:1px solid #9E9E9E; border-radius: 5px;"></textarea>
                </div>
                <br>
                <button class="btn btn-rounded btn-sm my-0 ml-sm-2" type="submit" style="background-color: #FE980F; margin: 15px 15px -20px 15px;">Phản hổi</button>
            </div>
        </div><!--Giới thiệu-->
    </div>

@stop
