@extends('admin.layout.admin_master')

@push('css')
    <!-- Bootstrap Tagsinput Css -->
    <link href="{{asset('admin-frontend/plugins/jQuery-tagEditor-master/jquery.tag-editor.css')}}" rel="stylesheet">
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header" style="margin-left: -15px;">
                <h2 style="padding-left: 0px;">Danh mục sản phẩm</h2>
            </div>

            <div class="row clearfix">
                <div>
                    <div class="form-line hidden-sm hidden-xs">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right">Tìm kiếm danh mục</button>
                        <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>

                <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left: 0px;">
                    <p style="margin-bottom: 16px;"><small>Danh mục sản phẩm cho cửa hàng của bạn được quản lý ở đây. Để thay đổi thứ tự danh mục hiển thị trên trang web, bạn có thể kéo thả chúng để sắp xếp. Để xem chi tiết các danh mục, nhấp vào liên kết "Tùy chọn màn hình" ở trên cùng của trang.</small></p>

                    <p><b>Thêm danh mục mới</b></p>
                    <p><small>Tên</small></p>
                    <input type="text" class="form-control" style="margin-top: -10px; background-color: white;">
                    <p style="margin-bottom: 16px;"><small>Tên riêng sẽ hiển thị trên trang mạng của bạn.</small></p>

                    <p><small>Đường dẫn</small></p>
                    <input type="text" class="form-control" style="margin-top: -10px; background-color: white;">
                    <p><small>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn(URL).Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</small></p>

                    <p><small>Chuyên mục cha</small></p>
                    <div style="margin-top: -10px;">
                        <select class="form-control show-tick">
                            <option>Trống</option>
                            <option>Chưa được phân loại</option>
                            <option>Tin tức</option>
                        </select>
                    </div>
                    <p style="margin-bottom: 16px;"><small>Chuyên mục khác với thẻ,bạn có thể sử dụng nhiều cấp chuyên mục.Ví dụ:Trong chuyên mục nhạc,bạn có chuyên mục con là nhạc Pop,nhạc Jazz.Việc này hoàn toàn là tùy theo ý bạn.</small></p>

                    <p><small>Mô tả</small></p>
                    <div class="form-group" style="margin-top: -10px;">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;"></textarea>
                        </div>
                    </div>
                    <p style="margin-bottom: 16px; margin-top: -25px;"><small>Thông thường mô tả này không được sử dụng trong các giao diện,tuy nhiên có vài giao diện có thể hiển thị mô tả này.</small></p>

                    <p><small>Kiểu hiển thị</small></p>
                    <div style="margin-top: -10px;">
                        <select class="form-control show-tick">
                            <option>Mặc định</option>
                            <option>Sản phẩm</option>
                            <option>Danh mục con</option>
                            <option>Cả hai</option>
                        </select>
                    </div>
                    <p style="margin-bottom: 16px;"><small>Chuyên mục khác với thẻ,bạn có thể sử dụng nhiều cấp chuyên mục.Ví dụ:Trong chuyên mục nhạc,bạn có chuyên mục con là nhạc Pop,nhạc Jazz.Việc này hoàn toàn là tùy theo ý bạn.</small></p>

                    <p><small>Hình thu nhỏ</small></p>
                    <img src="https://xuepc.vn/wp-content/uploads/woocommerce-placeholder-260x260.png" width="60px" height="60px" style="margin-top: -40px">
                    <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px">Thêm chuyên mục</button>
                    <br>
                    <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px; margin-top: -16px;">Thêm chuyên mục</button>
                </div>
                <div class ="col-md-12 col-lg-12 col-md-7 col-lg-7" style="padding-left: 0px;">
                    <div style="display: inline-block;width: 180px">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Xóa</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:10px">Áp dụng</button>
                    </div>
                    <div class="card" style="margin-top: -20px;">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">

                            </ul>
                        </div>
                        <div class="body table-responsive" style="border: 1px solid #9E9E9E; margin-top: 20px ">
                            <table class="table table-bordered table-striped" style="margin-bottom: 0px;padding-top: 20px ">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Đường dẫn</th>
                                    <th>Lượt</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>none</td>
                                    <td>Máy Bơm</td>
                                    <td>none</td>
                                    <td>none</td>
                                    <td>none</td>
                                    <td>
                                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:35px">Sửa</button>
                                        <br>
                                        <button type="button" class="btn bg-red btn-lg waves-effect" style="border-radius: 5px; margin-left:35px">Xóa</button>
                                    </td>
                                </tr>
                                </tbody>
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Đường dẫn</th>
                                    <th>Lượt</th>
                                    <th></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div style="display: inline-block;width: 180px">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Xóa</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:10px">Áp dụng</button>
                    </div>
                    <p style="margin-top: 20px;"><small>Lưu ý</small></p>
                    <p><small>Xoá danh mục không xoá các sản phẩm trong danh mục. Thay vào đó, các sản phẩm sẽ được chuyển sang danh mục mặc định Màn hình HOT.</small></p>

                    <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md" style="padding-left: 0px;">
                        <div>
                            <div class="form-line">
                                <input type="text" class="form-control" style="width: 100%; background-color: white;">
                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 5px 0 10px 0px;">Tìm kiếm danh mục</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('admin-frontend/plugins/jQuery-tagEditor-master/jquery.tag-editor.min.js')}}"></script>
    <script>
        $('#tags_update').tagEditor({ initialTags: $(this).attr("data-json"),
            removeDuplicates:true,
            placeholder: 'Thêm từ khóa ...' });
    </script>

    {{-- JS Auto Slug --}}
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
@stop()
