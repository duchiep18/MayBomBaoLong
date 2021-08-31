@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container-fluild">
            <div class="row">
                <h2 style="text-align:center">Thêm chuyên mục tin tức - bài viết</h1>
                <div class="col-md-4" style="float: left">
                 <form action="{{route('news.storeCategories')}}" method="POST" role="form">
                        @csrf  
                        @method('post')
                            
                        <br><br>
                        <div class="form-group">
                            <label for="">Tên chuyên mục: </label>
                            <input type="text" name="tendanhmuc" class="form-control" id="" placeholder="">
                        </div>
                        <br>


                        <div class="form-group">
                          <label for="">Loại danh mục:</label>
                          <select class="form-control" name="" id="">
                            <option value="1">Danh mục cha</option>
                            <option value="2">Danh mục con</option>
                          </select>
                        </div>
                        <br>


                        <br>
                        <div class="form-group">
                            <label for=""> Mô tả loại tin:</label>
                            <textarea name="motadanhmuc" id="" class="form-control" rows="4" required="required"></textarea>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Tạo danh mục</button>
                    </form>
                 
                </div>
            
            </div>
        
        </div>
    </section>


@stop