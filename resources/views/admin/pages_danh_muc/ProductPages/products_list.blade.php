@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
    <div class="container-fluid">
                    <h1 style="text-align:center"> Danh sách Sản phẩm</h1>
                    <br> <br>

                    <div class="block-header" style="margin-left: -15px;">
                        <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm mới</a> <br>
                    </div>
                    <br>
                    <div class="row clearfix">
                        <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                            <ul class="dashboard-stat-list1">
                                <li class="all">
                                    <a href="#">Tất cả ()</a>
                                    <span>|</span>
                                </li>
                                <li class="publish">
                                    <a href="#">Sản phẩm đã đăng ()</a>
                                    <span>|</span>
                                </li>
                                <li class="publish">
                                    <a href="#">Bản nháp ()</a>
                                    <span>|</span>
                                </li>
                                <li class="publish">
                                    <a href="#"> Tình trạng sản phẩm ()</a>
                                    <span>|</span>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="row clearfix">
                        <form action="" method="GET" >
                            <div class="col-md-6 col-lg-6 hidden-xs hidden-sm nopadding-left">
                                <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                                    <select name="PrdbyCat" class="form-control show-tick">
                                        <option value="0"> --- Tất cả danh mục ---</option>
                                        @foreach($categories_prd as $val1)
                                            @if($val1 -> category_parent==0)
                                                <option {{request()->input('PrdbyCat') == $val1->id ? 'selected':''}} value="{{$val1->id}}"> {{$val1->product_categories_name}}  </option>
                                            @endif
                                            @foreach($categories_prd as $val2)
                                                @if($val2 -> category_parent == $val1 -> id )
                                                    <option {{request()->input('PrdbyCat') == $val1->id ? 'selected':''}} value="{{$val2->id}}">--- {{$val2->product_categories_name}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>

                                <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                                    <select name="PrdbyStatus" class="form-control show-tick">
                                        <option value="">--- Lọc theo trạng thái ---</option>
                                        <option {{request()->input('PrdbyStatus') == "Còn hàng" ? 'selected': ''}} value="Còn hàng">Còn hàng</option>
                                        <option {{request()->input('PrdbyStatus') == "Hết hàng" ? 'selected': ''}} value="Hết hàng">Hết hàng</option>

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
                                        <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm các sản phẩm</button>
                                        <input type="text" name="keywordprd" value="{{request()->input('keywordprd')}}" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
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
                                            <th>Tên sản phẩm</th>
                                            <th>Tình trạng</th>
                                            <th>Giá</th>
                                            <th>Danh mục sản phẩm</th>
                                            <th>Từ khóa</th>
                                            <th>Thời gian</th>
                                        </tr>
                                    </thead>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">
{{--                                                <input type="checkbox" name="check_prd" id="{{$product->id}}" class="filled-in checkbox"/>--}}
{{--                                                <label for="{{$product->id}}"></label>--}}
                                                {{$product->id}}
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 64px; height: 64px;">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="">{{$product->products_name}} </a></td>
                                            <td> {{$product->status}} </td>
                                            <td> {{$product->price}} </td>
                                            <td>
                                                @if($product->products_category)
                                                    {{$product->products_category->product_categories_name}}
                                                @endif
                                            </td>
                                            <td> {{$product->tags}} </td>
                                            <td> {{$product->created_at}} </td>
                                            <td> {{$product->updated_at}} </td>
                                            <td>
                                                <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Sửa</a>
                                                <form class="" action="{{route('products.destroy', $product->id)}}" method="POST">
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
                                <button type="button" name="keywordprd" value="{{request()->input('keywordprd')}}" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm bài viết</button>

                            </div>
                        </div>
                    </div>
    </div>
                    <div style="text-align:center">
							{{$products->appends($_GET)}}
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
