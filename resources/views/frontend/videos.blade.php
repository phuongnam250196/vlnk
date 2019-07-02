@extends('frontend.layout')
@if(Request::is('videos/category') || Request::is('videos/category/*'))
    @section('title', 'Videos theo mục: '.$cate->cate_name)
@elseif(Request::is('videos/search') || Request::is('videos/search/*'))
    @section('title', 'Videos tìm kiếm: '.$_GET['word'])
@else
    @section('title', 'Videos')
@endif
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-md-9 col-sm-9 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        @if(Request::is('videos/category') || Request::is('videos/category/*'))
                            <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <a href="{{url('/videos')}}"><span class="breadcrumb_last" aria-current="page">Videos</span></a> / <span class="breadcrumb_last" aria-current="page">{{$cate->cate_name}}</span></span></span></div>
                        @elseif(Request::is('videos/search') || Request::is('videos/search/*'))
                            <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <a href="{{url('/videos')}}"><span class="breadcrumb_last" aria-current="page">Videos</span></a> / <span class="breadcrumb_last" aria-current="page">Tìm kiếm {{$_GET['word']}}</span></span></span></div>
                        @else
                            <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <span class="breadcrumb_last" aria-current="page">Videos</span></span></span></div>
                        @endif
                        <div class="page_content">
                            <header>
                                @if(Request::is('videos/category') || Request::is('videos/category/*'))
                                    <h1 class="title-page">Videos theo mục: {{$cate->cate_name}}</h1>
                                @elseif(Request::is('videos/search') || Request::is('videos/search/*'))
                                    <h1 class="title-page">Videos tìm kiếm: {{$_GET['word']}}</h1>
                                @else
                                    <h1 class="title-page">Videos</h1>
                                @endif
                            </header><!-- .page-header -->
                            <section id="latest-posts" class="row row-padding-15 clearfix">
                                @foreach($videos as $key=>$video)
                                    <article class="videos-box col-sm-4 col-xs-6 has_thumbnail">
                                        <a href="{{url('/videos/'.$video->video_slug)}}" title="{{$video->video_name}}">
                                            <div class="video-thumb" style="background: url({{url('/'.$video->video_img)}}) no-repeat center center;">
                                                <img width="300" height="274" src="{{url(''.$video->video_img)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="sjcam sj4000 air">
                                            </div>
                                            <h2 class="title post-title">{{$video->video_name}}</h2>
                                        </a>
                                        <div class="post-info">
                                            <span class="thetime updated"><i class="fa fa-clock-o"></i> <span>{{date_format($video->created_at, 'd/m/Y')}}</span></span>
                                        </div>
                                    </article>
                                @endforeach
                            </section>
                            <div class="paginate_links"><span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="https://tech360.vn/videos/page/2">2</a>
                                <a class="page-numbers" href="https://tech360.vn/videos/page/3">3</a>
                                <a class="page-numbers" href="https://tech360.vn/videos/page/4">4</a>
                                <a class="next page-numbers" href="https://tech360.vn/videos/page/2">Tiếp</a></div>
                        </div>
                    </main>
                </div>
                @include('frontend.nav.aside_news_videos')
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    @include('frontend.nav.product_noibat')
                </div>
            </div>
        </div>
    </div>
@endsection