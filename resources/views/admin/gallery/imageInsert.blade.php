@extends('admin.layout.admin_master')

@section('content')

<section class="content">
    <div class="box-body">
        @csrf
        <h2 style="text-align: center">Thêm ảnh slide-banner</h2>
        <br>
        <br>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 25px; padding: 0px 16px 6px 20px;">
                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                        <h2>
                            Chọn ảnh
                        </h2>
                    </div>
                    <form action="{{route('insertImg')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="body" style="height:fit-content">
                            <div style="">
                                <span> Tên ảnh: </span>
                                <input type="text" class="form-control" name="img_name" id="name">
                                <br>
                                <span> Url: </span>
                                <input type="text" class="form-control" name="img_url" id="image">

                                <br>
                                <span> Kiểu ảnh: </span>
                                <select name="img_type" id="">
                                    <option value="0">Ảnh Slider</option>
                                    <option value="1">Ảnh Banner</option>
                                </select>
                                <br>
                                <br>
                                <span>
                                    <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
                                </span>
                                <br>
                                <br>
                                <img src="" alt="" id="show_image" style="height:250px; width:250px; margin-bottom: 10px">
                                <br>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" style="float: left"> Thêm ảnh </button>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</section>

@stop
@section('js')

    <!-- Modal IMG -->
    <div class="modal fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" style="width:80%" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thư viện ảnh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="http://localhost:8000/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=&field_id=image"
                        frameborder="18" style="width:100%; height:900px; ">
                    </iframe>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#modal-file').on('hide.bs.modal', function () {
            var _img = $('input#image').val();
            $('img#show_image').attr('src', _img);
        });
    </script>

{{--    <script>--}}
{{--        function ChangeToSlug()--}}
{{--        {--}}
{{--            var img_name, slug;--}}

{{--            //Lấy text từ thẻ input title--}}
{{--            img_name = document.getElementById("image").value;--}}

{{--            //Đổi chữ hoa thành chữ thường--}}
{{--            slug = img_name.toLowerCase();--}}

{{--            //Đổi ký tự có dấu thành không dấu--}}
{{--            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');--}}
{{--            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');--}}
{{--            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');--}}
{{--            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');--}}
{{--            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');--}}
{{--            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');--}}
{{--            slug = slug.replace(/đ/gi, 'd');--}}
{{--            //Xóa các ký tự đặt biệt--}}
{{--            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');--}}
{{--            //Đổi khoảng trắng thành ký tự gạch ngang--}}
{{--            slug = slug.replace(/ /gi, " - ");--}}
{{--            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang--}}
{{--            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng--}}
{{--            slug = slug.replace(/\-\-\-\-\-/gi, '-');--}}
{{--            slug = slug.replace(/\-\-\-\-/gi, '-');--}}
{{--            slug = slug.replace(/\-\-\-/gi, '-');--}}
{{--            slug = slug.replace(/\-\-/gi, '-');--}}
{{--            //Xóa các ký tự gạch ngang ở đầu và cuối--}}
{{--            slug = '@' + slug + '@';--}}
{{--            slug = slug.replace(/\@\-|\-\@|\@/gi, '');--}}
{{--            //In slug ra textbox có id “slug”--}}
{{--            document.getElementById('slug').value = slug;--}}
{{--        }--}}
{{--    </script>--}}
@stop()
