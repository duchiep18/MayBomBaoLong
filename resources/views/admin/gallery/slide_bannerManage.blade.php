@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
    <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <h1 style="text-align:center"> Danh sách Slide-banner</h1>
            <br> <br>

            <div class="block-header" style="margin-left: -15px;">
                <a href="{{route('getImgMng')}}" class="btn btn-primary">Thêm slide-banner</a> <br>
            </div>
            <br>
            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                    <ul class="dashboard-stat-list1">
                        <li class="all">
                            <a href="#">Tất cả ()</a>
                            <span>|</span>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="row clearfix">
                <form action="" method="GET" >
                    <div class="col-md-6 col-lg-6 hidden-xs hidden-sm nopadding-left">
                        <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                            <select name="Imgbytype" class="form-control show-tick">
                                <option value=""> --- Tất cả ảnh ---</option>
                                <option {{request()->input('Imgbytype') == "0" ? 'selected': ''}} value="0">Ảnh Slider</option>
                                <option {{request()->input('Imgbytype') == "1" ? 'selected': ''}} value="1">Ảnh Banner</option>
                            </select>
                        </div>


                        {{--                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">--}}
                        {{--                        <select name="postbyDate" class="form-control show-tick">--}}
                        {{--                            <option value="">--- Tất cả các ngày ---</option>--}}
                        {{--                            @foreach($allselectDate as $allDate)--}}
                        {{--                            <option value="">{{$allDate -> created_at}}</option>--}}
                        {{--                            @endforeach--}}
                        {{--                        </select>--}}
                        {{--                    </div>--}}

                    </div>

                    <div class="row">
                        <div class ="col-md-6 col-lg-6 hidden-xs hidden-sm">
                            <div class="form-line">
                                <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm kiếm ảnh</button>
                                <input type="text" name="keywordImg" value="{{request()->input('keywordImg')}}" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <br><br>
            <div class="row clearfix">
                <div class="card" style="margin-top: -20px;">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">

                        </ul>
                    </div>
                    <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                        <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                            <thead>
                            <tr>
                                <th>
                                    {{--                                                <input type="checkbox" name="all_check" id="all_check" class="filled-in checkbox"/>--}}
                                    {{--                                                <label for="all_check" class="select"></label>--}}
                                    {{--                                                <label for="all_check" class="unselect" ></label>--}}
                                    ID
                                </th>
                                <th> <i class="material-icons col-amber">image</i> </th>
                                <th>Tên ảnh</th>
                                <th>Url</th>
                                <th>Loại ảnh</th>
                                <th>Thời gian</th>
                            </tr>
                            </thead>
                            @foreach ($imgsSL_BN as $imgSL_BN)
                                <tr>
                                    <td>{{$imgSL_BN->id}}</td>
                                    <td>
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="{{$imgSL_BN->url}}" style="width: 64px; height: 64px;">
                                            </a>
                                        </div>
                                    </td>
                                    <td><a href="">{{$imgSL_BN->name_img}} </a></td>
                                    <td> {!!$imgSL_BN->url !!}} </td>

                                    <td>
                                        @if($imgSL_BN->type == 0)
                                            <span style="color:red">Ảnh Slider</span>
                                        @else
                                            <span style="color:red">Ảnh Banner</span>
                                        @endif
                                    </td>

                                    <td> {{$imgSL_BN->created_at}} </td>

                                    <td>
                                        <a href="{{route('edit_slide_banner', $imgSL_BN->id)}}" class="btn btn-primary">Sửa</a>
                                        <form class="" action="{{route('delete_slide_banner', $imgSL_BN->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--                    <div class="row clearfix">--}}
            {{--                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding-left">--}}
            {{--                            <div style="display: inline-block;max-width: fit-content">--}}
            {{--                                <select class="form-control show-tick">--}}
            {{--                                    <option>Hành động</option>--}}
            {{--                                    <option value="1">Bỏ vào thùng rác</option>--}}
            {{--                                </select>--}}
            {{--                            </div>--}}
            {{--                            <div style="display: inline-block;">--}}
            {{--                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                    <div class="form-line">
                        <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                        <button type="button" name="keywordprd" value="{{request()->input('keywordimg')}}" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm bài viết</button>

                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center">
            {{$imgsSL_BN->appends($_GET)}}
        </div>
        </div>
        </div>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $('.btn-delete').click(function() {
                    event.preventDefault();
                    let isDelete = confirm('Sếp có muốn xóa sản phẩm này hay không?');
                    if (isDelete) {
                        $(this).parents('form').submit();
                    }
                });
            })
        </script>
        {{--        All checkbox--}}
        {{--        <script type="text/javascript">--}}
        {{--            var checkAll = document.querySelector('#all_check')--}}
        {{--            var checkBoxes = document.querySelectorAll('.checkbox')--}}
        {{--            var selected = document.querySelector('.select')--}}
        {{--            var unselected = document.querySelector('.unselect')--}}

        {{--            checkAll.onclick = () => {--}}
        {{--                checkBoxes.forEach(checkBox =>{--}}
        {{--                    if(checkAll.checked == true){--}}
        {{--                        checkBox.checked = true--}}
        {{--                        selected.style.display = 'block'--}}
        {{--                        unselected.style.display = 'block'--}}
        {{--                    }else {--}}
        {{--                        checkBox.checked = false--}}
        {{--                        selected.style.display = 'block'--}}
        {{--                        unselected.style.display = 'block'--}}
        {{--                    }--}}
        {{--                })--}}
        {{--            }--}}
        {{--        </script>--}}

    </section>


@stop
