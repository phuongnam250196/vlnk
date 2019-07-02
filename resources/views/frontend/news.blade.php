@extends('frontend.layout')
@if(Request::is('news/category') || Request::is('news/category/*'))
    @section('title', 'Tin tức theo mục: '.$cate->cate_name)
@elseif(Request::is('news/search') || Request::is('news/search/*'))
    @section('title', 'Tin tức tìm kiếm: '.$_GET['word'])
@else
    @section('title', 'Tin tức')
@endif
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-md-9 col-sm-9 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        @if(Request::is('news/category') || Request::is('news/category/*'))
                            <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <a href="{{url('/news')}}"><span class="breadcrumb_last" aria-current="page">Tin tức</span></a> / <span class="breadcrumb_last" aria-current="page">{{$cate->cate_name}}</span></span></span></div>
                        @elseif(Request::is('news/search') || Request::is('news/search/*'))
                            <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <a href="{{url('/news')}}"><span class="breadcrumb_last" aria-current="page">Tin tức</span></a> / <span class="breadcrumb_last" aria-current="page">Tìm kiếm {{$_GET['word']}}</span></span></span></div>
                        @else
                            <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <span class="breadcrumb_last" aria-current="page">Tin tức</span></span></span></div>
                        @endif
                        <div class="page_content">
                            <header>
                                @if(Request::is('news/category') || Request::is('news/category/*'))
                                    <h1 class="title-page">Tin tức theo mục: {{$cate->cate_name}}</h1>
                                @elseif(Request::is('news/search') || Request::is('news/search/*'))
                                    <h1 class="title-page">Tin tức tìm kiếm: {{$_GET['word']}}</h1>
                                @else
                                    <h1 class="title-page">Tin tức</h1>
                                @endif
                            </header>
                            <section id="latest-posts" class="clearfix">
                                @foreach($posts as $key=>$post)
                                <article class="post-box has_thumbnail">
                                    <div class="post-img">
                                        <a href="{{url('/news/'.$post->post_slug)}}" title="{{$post->post_name}}" rel="nofollow">
                                            <img width="300" height="300" src="{{url('/'.$post->post_img)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$post->post_name}}"> </a>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-data-container">
                                            <header>
                                                <h2 class="title post-title"><a href="{{url('/news/'.$post->post_slug)}}" title="{{$post->post_name}}">{{$post->post_name}}</a></h2>
                                                <div class="post-info">
                                                    <span class="thetime updated"><i class="fa fa-clock-o"></i> <span>{{date_format($post->created_at, 'd/m/Y')}}</span></span>
                                                </div>
                                            </header>
                                            <div class="post-excerpt">
                                                <p>{!! strip_tags(preg_replace("/<img[^>]+\>/i", "(image) ", $post->post_content)) !!}</p>
                                            </div>
                                            <a href="{{url('/news/'.$post->post_slug)}}" title="{{$post->post_name}}" rel="nofollow" class="read_more">Xem thêm</a>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                <style>
                                    .post-excerpt p {
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        -webkit-line-clamp: 3;
                                        display: -webkit-box;
                                        -webkit-box-orient: vertical;
                                    }
                                </style>
                                <article class="post-box has_thumbnail">
                                    <div class="post-img">
                                        <a href="https://tech360.vn/lg-sap-ban-may-loc-khong-khi-mini-cho-o-to-dau-tien-o-vn-gia-du-kien-6-trieu-dong" title="LG SẮP BÁN MÁY LỌC KHÔNG KHÍ MINI CHO Ô TÔ ĐẦU TIÊN Ở VN, GIÁ DỰ KIẾN 6 TRIỆU ĐỒNG" rel="nofollow">
                                            <img width="300" height="300" src="https://tech360.vn/wp-content/uploads/2019/06/1-5-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""> </a>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-data-container">
                                            <header>
                                                <h2 class="title post-title"><a href="https://tech360.vn/lg-sap-ban-may-loc-khong-khi-mini-cho-o-to-dau-tien-o-vn-gia-du-kien-6-trieu-dong" title="LG SẮP BÁN MÁY LỌC KHÔNG KHÍ MINI CHO Ô TÔ ĐẦU TIÊN Ở VN, GIÁ DỰ KIẾN 6 TRIỆU ĐỒNG">LG SẮP BÁN MÁY LỌC KHÔNG KHÍ MINI CHO Ô TÔ ĐẦU TIÊN Ở VN, GIÁ DỰ KIẾN 6 TRIỆU ĐỒNG</a></h2>
                                                <div class="post-info">
                                                    <span class="thetime updated"><i class="fa fa-clock-o"></i> <span>13/06/2019</span></span>
                                                </div>
                                            </header>
                                            <div class="post-excerpt">
                                                <p>Cùng với các sản phẩm máy lọc không khí thông thường, điều hòa công nghiệp và dân dụng có chức năng lọc không khí, LG sắp sửa tung ra thị trường Việt Nam một sản phẩm lọc không khí mini đầu tiên có thể dùng cho ô tô hoặc các không gian nhỏ khác. Đó…</p>
                                            </div>
                                            <a href="https://tech360.vn/lg-sap-ban-may-loc-khong-khi-mini-cho-o-to-dau-tien-o-vn-gia-du-kien-6-trieu-dong" title="LG SẮP BÁN MÁY LỌC KHÔNG KHÍ MINI CHO Ô TÔ ĐẦU TIÊN Ở VN, GIÁ DỰ KIẾN 6 TRIỆU ĐỒNG" rel="nofollow" class="read_more">Xem thêm</a>
                                        </div>
                                    </div>
                                </article>
                            </section>
                            <div class="paginate_links"><span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="https://tech360.vn/tin-tuc/page/2">2</a>
                                <a class="page-numbers" href="https://tech360.vn/tin-tuc/page/3">3</a>
                                <a class="page-numbers" href="https://tech360.vn/tin-tuc/page/4">4</a>
                                <span class="page-numbers dots">…</span>
                                <a class="page-numbers" href="https://tech360.vn/tin-tuc/page/19">19</a>
                                <a class="next page-numbers" href="https://tech360.vn/tin-tuc/page/2">Tiếp</a></div>
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