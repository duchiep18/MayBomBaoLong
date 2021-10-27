@extends('admin.layout.admin_master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <h2 style="text-align:center">Thêm chuyên mục bài viết</h2>
                {{-- Left Side --}}
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11" style="float:left; margin-top:50px;">
                            <div class="form-line hidden-sm hidden-xs" style="padding-left: 50px;">
                                <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right">Tìm kiếm danh mục</button>
                                <input type="text" name="keywordNewsCat" value="{{request()->input('keywordNewsCat')}}" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row clearfix">
                    <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <form action="{{route('news.storeCategories')}}" method="POST" role="form">
                            @csrf
                            @method('post')
                            <br><br><br>
                             <p><b>Thêm chuyên mục</b></p>
                             <p><small>Tên</small></p>
                             <input type="text" name="name_categories" class="form-control" id="name" onkeyup="ChangeToSlug()" style="background-color: white;margin-top: -10px;">
                             <p style="margin-bottom: 16px;"><small>Tên riêng sẽ hiển thị trên trang mạng của bạn.</small></p>

                             <p><small>Đường dẫn</small></p>
                             <input type="text" name="url_cat" id="slug" class="form-control" style="background-color: white;margin-top: -10px;">
                             <p><small>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn(URL).Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</small></p>

                             <p><small>Chuyên mục cha</small></p>
                             <div style="margin-top: -10px;">
                                 <select class="form-control show-tick" name="cat_parent">
                                     <option value="0"> --------- Danh mục cha ---------</option>
                                     @foreach($categories as $val1)
                                         @if($val1 -> category_parent==0)
                                             <option value="{{$val1->id}}">{{$val1->news_categories_name}} </option>
                                         @endif

                                         @foreach($categories as $val2)
                                            @if($val2 -> category_parent == $val1 -> id )
                                              <option value="{{$val2->id}}">--- {{$val2->news_categories_name}}</option>
                                            @endif
                                         @endforeach
                                     @endforeach
                                 </select>
                             </div>
                             <p style="margin-bottom: 16px;"><small>Chuyên mục khác với thẻ,bạn có thể sử dụng nhiều cấp chuyên mục.Ví dụ:Trong chuyên mục nhạc,bạn có chuyên mục con là nhạc Pop,nhạc Jazz.Việc này hoàn toàn là tùy theo ý bạn.</small></p>

                             <p><small>Mô tả</small></p>
                             <div class="form-group" style="margin-top: -10px;">
                                 <div class="form-line">
                                     <textarea rows="4" name="desc_cat" class="form-control no-resize" style="background-color: white;"></textarea>
                                 </div>
                             </div>
                             <p style="margin-bottom: 16px; margin-top: -25px;"><small>Thông thường mô tả này không được sử dụng trong các giao diện,tuy nhiên có vài giao diện có thể hiển thị mô tả này.</small></p>

                            <p><small>Kiểu hiển thị</small></p>
                            <div style="margin-top: -10px;">
                                <select class="form-control show-tick" name="type_cat">
                                    <option value="0">Hiển thị</option>
                                    <option value="1">Ẩn</option>

                                </select>
                            </div>
                            <p style="margin-bottom: 16px;"><small>Chuyên mục khác với thẻ,bạn có thể sử dụng nhiều cấp chuyên mục.Ví dụ:Trong chuyên mục nhạc,bạn có chuyên mục con là nhạc Pop,nhạc Jazz.Việc này hoàn toàn là tùy theo ý bạn.</small></p>
                            <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px">Thêm chuyên mục</button>
                        </form>
                    </div>

                    {{-- Right Side --}}
                    <div class ="col-xs-12 col-sm-12 col-md-7 col-lg-7">

                        <div class="card" style="margin-top: 110px;">
                            <div class="header" style="margin-left: 0px">
                                <ul class="header-dropdown m-r--5">

                                </ul>
                            </div>
                            <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                                <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Thuộc danh mục</th>
                                        <th>Mô tả</th>
                                        <th>Đường dẫn</th>
                                        <th>Ngày tạo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td> {{$category->id}} </td>
                                            <td><a href="">{{$category->news_categories_name}}</a></td>
                                            <td>
                                                @if($category->category_parent==0)
                                                    <span style="color: red"> Danh mục cha </span>
                                                @else
                                                    @foreach($new_catgr as $new_catgr_parent)
                                                        @if($new_catgr_parent->id == $category->category_parent)
                                                            <span style="color: green">{{$new_catgr_parent->news_categories_name}}</span>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td> {{$category->news_categories_desc}} </td>
                                            <td>
                                                {{$category->url_cat}}
                                            </td>
                                            <td> {{$category->created_at}} </td>

                                            <td>
                                                <a href="{{route('news.catgr.edit', $category->id)}}" class="btn btn-primary">Sửa</a>
                                                <form class="" action="{{route('news.catgr.destroy', $category->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <br><br>
                                <div style="text-align:center">
                                    {{$categories->appends($_GET)}}
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 20px;"><small>Xóa chuyên mục sẽ không xóa bài viết trong chuyên mục đó. Thay vì thế, bài viết sẽ được chuyển đến chuyên mục mặc định Chưa được phân loại. Chuyên mục mặc định không thể xóa.</small></p>
                        <p><small>Nhóm phân loại có thể được lựa chọn chuyển đổi thành thẻ đánh dấu với <a href="#"><u>công cụ chuyển đổi nhóm phân loại và thẻ đánh dấu.</u></a></small></p>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                        <div class="form-line">
                            <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                            <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm chuyên mục</button>
                        </div>
                    </div>
                </div>

        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script>
            $(document).ready(function () {
                $('.btn-delete').click(function () {
                    event.preventDefault();
                    let isDelete = confirm('Sếp có muốn xóa bài viết này hay không?');
                    if (isDelete) {
                        $(this).parents('form').submit();
                    }
                });
            })
        </script>
    </section>

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
@stop
