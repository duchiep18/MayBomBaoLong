@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
    <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="container-fluild">
            <h1 style="text-align:center">Sửa đổi danh mục sản phẩm</h1>
            <form action="{{route('products.catgr.update', $prd_cat ->id)}}" method="POST" role="form">
                @csrf
                @method('put')
                <div class="row clearfix" style="margin: 0 0 0 20px ">
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class ="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="padding-left: 0px;">
                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">
                                <p><small>Tên</small></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin-bottom: 15px;padding-left: 0px;">
                                <input type="text" name="prd_cat_name" value="{{  $prd_cat ->product_categories_name}}" class="form-control" id="name" onkeyup="ChangeToSlug()" style="background-color: white;margin-top: -10px;">
                                <p style="margin-bottom: 16px;"><small>Tên riêng sẽ hiển thị trên trang mạng của bạn.</small></p>
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">
                                <p><small>Đường dẫn</small></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin-bottom: 15px; padding-left: 0px;">
                                <input type="text" name="url_prd_cat" value="{{  $prd_cat ->url_prd_cat}}" id="slug" class="form-control" style="background-color: white;margin-top: -10px;">
                                <p style="margin-bottom: 16px;"><small>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn (URL). Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</small></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">
                                <p><small>Danh mục cha</small></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin-bottom: 15px; padding-left: 0px;">
                                <div style="margin-top: -10px;">
                                    <select class="form-control show-tick" name="prd_cat_parent">
                                        <option value="0"> --------- Danh mục cha ---------</option>
                                        @foreach($categories_prd as $val1)
                                            @if($val1 -> category_parent==0)
                                                <option {{$val1->id == $prd_cat->id ? 'selected' : ''}} value="{{$val1->id}}"> {{$val1->product_categories_name}}  </option>
                                            @endif
                                            @foreach($categories_prd as $val2)
                                                @if($val2 -> category_parent == $val1 -> id )
                                                    <option {{$val2->id == $prd_cat->id ? 'selected' : ''}} value="{{$val2->id}}">--- {{$val2->product_categories_name}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">
                                <p><small>Mô tả</small></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin-bottom: 15px; padding-left: 0px;">
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <div class="form-line">
                                        <textarea rows="4" name="prd_cat_desc" class="form-control no-resize" style="background-color: white;">
                                            {{$prd_cat->product_categories_desc}}
                                        </textarea>
                                    </div>
                                </div>
                                <p style="margin-bottom: 16px;"><small>Thông thường mô tả này không được sử dụng trong các giao diện, tuy nhiên có vài giao diện có thể hiển thị mô tả này.</small></p>
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">
                                <p><small>Kiểu hiển thị</small></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin-bottom: 50px; padding-left: 0px;">
                                <div style="margin-top: -10px;">
                                    <select class="form-control show-tick" name="prd_cat_type">
                                        <option value="Hiển thị">Hiển thị</option>
                                        <option value="Ẩn">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        {{--                        <div>--}}
                        {{--                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">--}}
                        {{--                                <p><small>Kiểu hiển thị</small></p>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin-bottom: 15px; padding-left: 0px; margin-top: 15px;">--}}
                        {{--                                <img src="https://xuepc.vn/wp-content/uploads/woocommerce-placeholder-260x260.png" width="60px" height="60px" style="margin-top: -40px">--}}
                        {{--                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px">Tải lên/Thêm ảnh</button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px; margin-top: -16px;">Cập nhật</button>

                    </div>
            </form>
        </div>
    </section>
@stop
@section('js')

    <script>
        function ChangeToSlug() {
            var name, slug;

            //Lấy text từ thẻ input title
            name = document.getElementById("name").value;

            //Đổi chữ hoa thành chữ thường
            slug = name.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, " - ");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
        }
    </script>

@stop
