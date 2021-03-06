@extends('admin.layout.admin_master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header" style="margin-left: -15px;">
                <h1 style="padding-left: 0; display: inline-block">Quản lý bình luận</h1>
            </div>
            <div id="notify_comment" style="color: green; font-weight: bold; font-size: 18"></div>
            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                    <ul class="dashboard-stat-list1">
                        <li class="all">
                            <a href="#">Tất cả</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Của tôi</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Đang chờ</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Được phê duyệt</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Spam</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Thùng rác</a>
                        </li>
                    </ul>
                </div>
                <div class ="col-md-6 col-lg-6 hidden-xs hidden-sm">
                    <div class="form-line">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm kiếm phản hồi</button>
                        <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12 hidden-xs hidden-sm nopadding-left">
                    <div style="display: inline-block;max-width: fit-content">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Phản đối</option>
                            <option>Chấp nhận</option>
                            <option>Đánh dấu là spam</option>
                            <option>Bỏ vào thùng rác</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>
                    </div>
                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select class="form-control show-tick">
                            <option>Toàn bộ kiểu bình luận</option>
                            <option>Bình luận</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Lọc</button>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="card" style="margin-top: 20px;">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">

                        </ul>
                    </div>
                    <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                        <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Người bình luận</th>
                                    <th>Bình luận</th>
                                    <th>Thuộc sản phẩm</th>
                                    <th>Trạng thái</th>
                                    <th>Đã đăng vào</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <form action="" method="POST">

                            <tbody>
                                @foreach($allcomments as $comment)
                                <tr>
                                    @if($comment->comment_parent_id == 0 )
                                        <td>
                                        @if($comment-> comment_status == 1)
                                            <input type="button" data-comment_status="0" data-comment_id="{{$comment->id}}" id="{{$comment->cmt_product_id}}" class="btn btn-success btn-xs comment_duyet_btn" value="Duyệt">
                                        @else
                                            <input type="button" data-comment_status="1" data-comment_id="{{$comment->id}}" id="{{$comment->cmt_product_id}}" class="btn btn-danger btn-xs comment_duyet_btn" value="Bỏ Duyệt">
                                        @endif
                                        </td>
                                        <td style="color: goldenrod">{{'@'.$comment->comment_name}}</td>

                                        <td>
                                            <p>{{$comment->comment}}</p>

                                            <p style="font-weight: bold;padding-left: 10px;color: green">Bình luận đã trả lời:</p>
                                            <ul>
                                                @foreach($allcomments as $comment_reply)
                                                    @if($comment_reply->comment_parent_id == $comment->id)
                                                        <li>{{$comment_reply->comment}}</li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                            @if($comment->comment_status == 0)
                                            <br><textarea class="form-control reply_comment_{{$comment->id}}" name="reply_comment" id="" rows="5" cols="3" style="resize: none"></textarea>
                                            <br> <button class="btn btn-default btn-xs btn-reply-comment" data-product_id="{{$comment->cmt_product_id}}" data-comment_id="{{$comment->id}}"> Trả lời bình luận</button>
                                            @endif
                                        </td>
                                        <td><a href="">{{$comment->cmt_product_id}}</a></td>
                                        @if($comment->comment_status == 1)
                                            <td style="color: red">Bình luận chờ duyệt</td>
                                        @else
                                            <td style="color:green">Đã duyệt</td>
                                        @endif
                                        <td>{{$comment->created_at}}</td>
                                        <td>
                                            <form action="{{route('delete_cmt',$comment->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                    <button type="submit" class="btn bg-red btn-sm waves-effect btn-delete-cmt" style="border-radius: 5px; margin-left:35px">Xóa</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding-left">
                    <div style="display: inline-block;max-width: fit-content">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Phản đối</option>
                            <option>Chấp nhận</option>
                            <option>Đánh dấu là spam</option>
                            <option>Bỏ vào thùng rác</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                    <div class="form-line">
                        <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm phản hồi</button>

                    </div>
                </div>
            </div>

            <div style="text-align:center">
				 {{$allcomments->appends($_GET)}}
             </div>
        </div>

    </section>
        <!-- Latest compiled and minified CSS & JS -->
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        {{-- // Bootstrap 3 --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $('.btn-delete-cmt').click(function (e) {
                    e.preventDefault();
                    let isDelete = confirm('Sếp có muốn xóa bài viết này hay không?');
                    if (isDelete) {
                        $(this).parents('form').submit();
                    }
                });
            })
        </script>


@stop
