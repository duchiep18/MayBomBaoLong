@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container-fluid">
            <h1 style="text-align:center">Tạo sản phẩm mới</h1> <br><br>
                    <form action="{{route('products.storeData')}}" method="POST" role="form">
                        @csrf 
                        @method('post')
                        {{-- Left Side --}}
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <!-- CKEditor -->
                            <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0px;">
                                <input type="text" class="form-control" name="name_products" id="name" onkeyup="ChangeToSlug();" placeholder="Tên sản phẩm" style="width: 100%; height: 40px; background-color:white">
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0; padding-top:20px">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Thông số chi tiết 
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <textarea id="content_post" name="content">
                                            
                                        </textarea>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Mô tả sản phẩm
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                </div>
                                <div class="body">
                                    <textarea id="content_post" name="description" rows="20">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>  
                            <!-- #END# CKEditor --> 
                            <br>
                            {{-- Product Price --}}
                            <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5"  style="padding-left:0" >
                                <p>Giá sản phẩm:</p>
                                <input type="text" name="price" class="form-control" style="background-color: white;margin-top: -10px;">
                            </div>
                            <br>
                            <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left:50px" >
                                <p>Giá khuyến mãi:</p>
                                <input type="text" name="price_sale" class="form-control" style="background-color: white;margin-top: -10px;">
                            </div>
                            <br>
                            {{-- URL sản phẩm --}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px; padding: 0px 16px 6px 0px;">
                                <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5"  style="padding-left:0" >
                                    <p>Url sản phẩm:</p>
                                    <input type="text" name="url_prd" id="slug" class="form-control" style="background-color: white;margin-top: -10px;">
                                </div>
                            </div> 
                            <br>
                            <!--Ảnh đại diện-->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 25px; padding: 0px 16px 6px 0px;">
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            Ảnh sản phẩm
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body" style="height: 55px">
                                        <div style="margin:10px;">
                                            <a href="#"><u>Thêm ảnh thư viện sản phẩm</u></a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            Album hình ảnh sản phẩm
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body" style="height: 55px">
                                        <div style="margin:10px;">
                                            <a href="#"><u>Thêm ảnh thư viện sản phẩm</u></a>
                                        </div>
                                    </div>
                                </div>
                                <br> 
                            </div>  
                        </div>
                        {{-- End Image --}}
                        {{-- Right SIde --}}
                        {{-- <div class="col-md-4"> --}}
                         <!--#Đăng-->
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="margin-top: 40px">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -40px; padding: 0px 16px 6px 0px; float: right; height:400px;">
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px;">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            Đăng
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body" style="height:280px ">
                                        <div>
                                            <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 5px 10px 0px 0; float: right">Xem thử</button>
                                        </div>
                                        <br>
                                        <div style="margin: 40px 10px 10px 10px">
                                            <p style="margin: 25px 0 10px">Hiển thị : <strong></strong> 
                                            <p style="margin: 25px 0 10px">Đăng : <strong></strong> 
                                        </div>
                                        <div>
                                            <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top: 35px;">
                                            <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 5px 0 0px 10px; float: right">Thêm sản phẩm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Chuyên mục-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px; padding: 0px 16px 6px 0px;">
                            <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                    <h2>
                                            Danh mục sản phẩm
                                    </h2>
                                    <ul class="header-dropdown m-r--5">
                                        
                                    </ul>
                                </div>
                                <div class="body">
                                    
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-left: 3px; margin-top: -2px;">
                                        <li role="presentation" class="active"><a href="#home" data-toggle="tab">Tất cả chuyên mục</a></li>
                                    </ul>
                                    
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <div style="margin:0 10px 10px 10px;">
                                                <br>
                                                <input type="checkbox" name="categories_prd" id="basic_checkbox_3" class="filled-in" />
                                                <label for="basic_checkbox_3">#</label>
                                            </div>
                                        </div>
                                    
                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray;">
                                        <div style="margin-left: 10px; margin-top: -10px;">
                                            <a href="chuyenmuc.html"><u>+ Thêm danh mục</u></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Thẻ-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px; padding: 0px 16px 6px 0px;">
                            <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                    <h2>
                                        Từ khóa sản phẩm
                                    </h2>
                                    <ul class="header-dropdown m-r--5">
                                        
                                    </ul>
                                </div>
                            <div class="body">
                                <div style="margin: 10px">
                                    <input type="text" name="tags_prd" class="form-control">
                                    <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 7px 0 6px 0;">Thêm</button>
                                    <p>Phân cách các thẻ bằng dấu phẩy (,).</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!--Chuyên mục-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px; padding: 0px 16px 6px 0px;">
                            <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                    <h2>
                                            Trạng thái hàng
                                    </h2>
                                    <ul class="header-dropdown m-r--5">
                                    </ul>
                                </div>
                            <div class="body">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-left: 3px; margin-top: -2px;">
                                    <li role="presentation" class="active"><a href="#home" data-toggle="tab">Tất cả chuyên mục</a></li>
                                </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div style="margin:0 10px 10px 10px;">
                                        <input type="checkbox" name="status" id="basic_checkbox_2" class="filled-in"  />
                                        <label for="basic_checkbox_2">#</label>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray;">
                                <div style="margin-left: 10px; margin-top: -10px;">
                                    <a href="chuyenmuc.html"><u>+ Thêm trạng thái</u></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div>
</section>
  
@stop()

@section('js')
<script>
function ChangeToSlug()
{
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
@stop()