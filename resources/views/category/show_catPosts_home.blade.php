@extends('client.layout.master')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="row" style="padding-bottom: 30px; padding-left: 60px;padding-right: 20px">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;">
                    <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
                        <h2 class="title text-center">Chuyên mục {{$category_posts->news_categories_name}}</h2>
                        @foreach($posts_by_catgr as $post_by_catgr)
                            @if($post_by_catgr->category_news_id == $category_posts->id)
                            <div style="margin-bottom: 30px;">
                                <h2 class="title pull-left top-item"><a href="exampleNews.html" class="papa" style="color: white">{{$post_by_catgr->title}}</a></h2>
                                    <div class="container">
                                        <a href="" class="">
                                            <div class="col-md-12 col-lg-2 col-xs-4 col-sm-4 ">
                                                <img src="{{url('responsive_filemanager/source')}}/{{$post_by_catgr->image_post}}" style="width: 180px; height: 180px;">
                                            </div>
                                            <div class="col-md-10 col-lg-10 col-xs-8 col-sm-8" style="padding: 0px 10px 10px 100px" >
                                                <p><h5 style="color: black"><bold>Nội dung:</bold></h5>{!! $post_by_catgr->content !!}</p>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                            @endif
                        @endforeach

                    </div><!--Giới thiệu-->
                </div>

            </div>
        </div>
    </section>
    </div>

@stop
