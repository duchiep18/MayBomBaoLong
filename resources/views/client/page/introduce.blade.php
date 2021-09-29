@extends('client.layout.master')

@section('content')
    <div class="content" style="background-color: #F0F0E9;">
        <section style="padding-top: 30px;">
            <div class="container">
                <div class="row" style="padding-bottom: 30px;">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <div class="left-sidebar">
                            <div class="leftbox" style="background-color: #FE980F;">
                                <h2 class="title">Danh mục</h2>
                                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Máy bơm nước
                                                </a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Động cơ điện
                                                </a>
                                            </h4>
                                        </div>

                                    </div>
                                </div><!--/category-products-->
                            </div>


                            <div class="leftbox" style="background-color: #FE980F;">
                                <div class="brands_products"><!--brands_products-->
                                    <h2 class="title">Sản phẩm mới</h2>
                                    <div class="brands-name">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                            <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>

                                        </ul>
                                    </div>
                                </div><!--/brands_products-->
                            </div>

                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;">
                        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
                            <h2 class="title ">Giới thiệu</h2>
                            <h2 class="title pull-left top-item">Tổng quan</h2>
                            <p style="margin-left: 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p>
                        </div><!--Giới thiệu-->
                    </div>

                    <div class="col-sm-12 col-xs-12 hidden-lg hidden-md" style="margin-top: 15px;">
                        <div class="left-sidebar">
                            <div class="leftbox" style="background-color: #FE980F;">
                                <h2 class="title">Danh mục</h2>
                                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Máy bơm nước
                                                </a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Động cơ điện
                                                </a>
                                            </h4>
                                        </div>

                                    </div>
                                </div><!--/category-products-->
                            </div>


                            <div class="leftbox" style="background-color: #FE980F;">
                                <div class="brands_products"><!--brands_products-->
                                    <h2 class="title">Sản phẩm mới</h2>
                                    <div class="brands-name">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                            <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>

                                        </ul>
                                    </div>
                                </div><!--/brands_products-->
                            </div>



                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
