@extends('client.layout.master')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="row" style="padding-bottom: 30px; padding-left: 60px;padding-right: 20px">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;">
                    <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
                        <h2 class="title text-center">Tất cả bài viết</h2>
                        @foreach($all_posts_home as $all_post)
                        <div style="margin-bottom: 30px;">
                            <h2 class="title pull-left top-item"><a href="exampleNews.html" class="papa" style="color: white">{{$all_post->title}}</a></h2>
                            <div >
                                <div class="container">
                                    <a href="" class="">
                                        <div class="col-md-12 col-lg-2 col-xs-4 col-sm-4 ">
                                            <img src="{{url('responsive_filemanager/source')}}/{{$all_post->image_post}}" style="width: 180px; height: 180px;">
                                        </div>
                                        <div class="col-md-10 col-lg-10 col-xs-8 col-sm-8" style="padding: 0px 10px 10px 100px" >
                                            <p><h5 style="color: black"><bold>Nội dung:</bold></h5>{!! $all_post->content !!}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div><!--Giới thiệu-->
                </div>

            </div>
        </div>
    </section>
    </div>

@stop
