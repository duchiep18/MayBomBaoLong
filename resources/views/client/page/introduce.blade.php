@extends('client.layout.master')

@section('content')
    <div class="content" style="background-color: #F0F0E9;">
                    @foreach($posts as $introduce_post)
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-right" style="padding-right: 15px;padding-left: 40px;">
                        <div class="features_items" style="background-color: white; border-radius: 5px; border: 1px solid #ccc; padding-bottom: 15px;"><!--Sản phẩm nổi bật-->
                            <h2 class="title ">Giới thiệu</h2>
                            <h2 class="title pull-left top-item" style="text-align: center;">{{$introduce_post->title}}</h2>
                            <p style="margin-left: 15px;">
                                {!! $introduce_post->content !!}
                            </p>
                        </div><!--Giới thiệu-->
                    </div>
                    @endforeach



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
