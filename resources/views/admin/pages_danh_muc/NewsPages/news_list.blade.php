@extends('admin.layout.admin_master')
 <!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <h1 style="text-align:center"> Danh sách tin tức - bài viết</h1>
            <br>
            <div class="block-header" style="margin-left: -15px;">
                <a href="{{route('news.create')}}" class="btn btn-primary">Thêm bài viết mới</a> <br>
            </div>

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                    <ul class="dashboard-stat-list1">
                        <li class="all">
                            <a href="#">Tất cả ()</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Đã xuất bản ()</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Bản nháp ()</a>
                            <span>|</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row clearfix">
                <form action="" method="GET" >
                <div class="col-md-6 col-lg-6 hidden-xs hidden-sm nopadding-left">
                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select name="postbyCategories_id" class="form-control show-tick">
                            <option value="">--------- Tất cả bài viết ---------</option>
                            @foreach($categories as $val1)
                                @if($val1 -> category_parent==0)
                                    <option  {{request()->input('postbyCategories_id') == $val1->id ? 'selected':''}} value="{{$val1->id}}">{{$val1->news_categories_name}}  </option>
                                @endif
                                @foreach($categories as $val2)
                                    @if($val2 -> category_parent == $val1 -> id )
                                        <option {{request()->input('postbyCategories_id') == $val2->id ? 'selected': ''}} value="{{$val2->id}}">--- {{$val2->news_categories_name}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select name="postbyStatus" class="form-control show-tick">
                            <option value="">--- Lọc theo trạng thái ---</option>
                            <option {{request()->input('postbyStatus') == "Đăng ngay" ? 'selected': ''}} value="Đăng ngay">Đăng ngay</option>
                            <option {{request()->input('postbyStatus') == "Chờ duyệt" ? 'selected': ''}} value="Chờ duyệt">Chờ duyệt</option>

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
                                <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm các bài viết</button>
                                <input type="text" name="keywordnews" value="{{request()->input('keywordnews')}}" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
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
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Chuyên mục</th>
                                    <th>Mô tả bài viết</th>
                                    <th>Thẻ</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Cập nhật</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($news as $addnew)

                                <tr>
                                    <td> {{$addnew->id}} </td>
                                    <td><a href=""> {{$addnew->title}} </a></td>
                                    <td>
                                        @if($addnew->news_category)
                                            {{$addnew->news_category->news_categories_name}}
                                        @endif
                                    </td>
                                    <td> {!! $addnew->description!!} </td>
                                    <td>{{$addnew->tags_post}}</td>
                                    <td> {{$addnew->status}} </td>
                                    <td> {{$addnew->created_at->format('d-m-Y')}} </td>
                                    <td> {{$addnew->updated_at->format('d-m-Y')}} </td>

                                    <td>
                                        <a href="{{route('news.edit', $addnew->id)}}" class="btn btn-primary">Sửa</a>
                                        <form class="" action="{{route('news.destroy', $addnew->id)}}" method="POST">
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

{{--            <div class="row clearfix">--}}
{{--                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding-left">--}}
{{--                    <div style="display: inline-block;max-width: fit-content">--}}
{{--                        <select class="form-control show-tick">--}}
{{--                            <option>Hành động</option>--}}
{{--                            <option>Bỏ vào thùng rác</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div style="display: inline-block;">--}}
{{--                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                    <div class="form-line">
                        <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                        <button type="button" name="keywordnews" value="{{request()->input('keywordnews')}}" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm bài viết</button>

                    </div>
                </div>
            </div>

            <div style="text-align:center">
				{{$news->appends($_GET)}}
             </div>

        </div>
    </section>
    <!-- JS Delete button-->
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
@stop


