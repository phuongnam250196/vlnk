@extends('frontend.layout')
@section('title', 'Tìm kiếm '.$_GET['keyword'])
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div id="container" class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div id="content" role="main">
                        <nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Trang chủ</a>&nbsp;&#47;&nbsp;Kết quả tìm kiếm cho &ldquo;{{$_GET['keyword']}}&rdquo;</nav>
                        <h1 class="page-title">Kết quả tìm kiếm: &ldquo;{{$_GET['keyword']}}&rdquo;</h1>
                        <p class="woocommerce-result-count">
                            Hiển thị {{count($data)}} sản phẩm</p>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="relevance" selected='selected'>Độ liên quan</option>
                                <option value="popularity">Phổ biến nhất</option>
                                <option value="rating">Đánh giá cao nhất</option>
                                <option value="date">Mới nhất</option>
                                <option value="price">Giá thấp đến cao</option>
                                <option value="price-desc">Giá cao xuống thấp</option>
                            </select>
                            <input type="hidden" name="paged" value="1" />
                            <input type="hidden" name="s" value="Android" /><input type="hidden" name="post_type" value="product" /></form>
                        <ul class="products columns-4">
                            @foreach($data as $key=>$dat)
                                <li class="product type-product">
                                    <div class="shop_loop_box">
                                        <a href="{{url('/product/'.$dat->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <span class="onsale">Giảm giá!</span>
                                            <img width="300" height="300" src="{{url('/'.$dat->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt=""/>
                                        </a>
                                        <a rel="nofollow" href="#" data-quantity="1" data-product_id="98" data-product_sku="TYCOT35" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_98">Thêm vào giỏ</a> 
                                    </div>
                                    <a href="{{url('/product/'.$dat->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <h2 class="woocommerce-loop-product__title">{{$dat->prod_name}}</h2>
                                    </a>
                                    <div class="woocommerce-product-rating">
                                        <div class="star-rating" role="img" aria-label="Được xếp hạng 5.00 5 sao"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div><a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> đánh giá của khách hàng)</a>
                                    </div>
                                    <span class="price"><del><span class="woocommerce-Price-amount amount">{{number_format($dat->prod_price, 0, '.', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{number_format($dat->prod_price, 0, '.', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                    <div class="devvn_is_featured">
                                        <img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" />
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
                    <div id="woocommerce_product_categories-3" class="widget block-sidebar woocommerce widget_product_categories">
                        <h3 class="title-sidebar">Loại sản phẩm</h3>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-8 cat-parent"><a href="/danh-muc/android-tv-box/">Android TV Box</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-11"><a href="/danh-muc/camera-thong-minh/">Camera Thông Minh</a> <span class="count">(11)</span></li>
                            <li class="cat-item cat-item-95"><a href="/danh-muc/chua-phan-loai/">Chưa phân loại</a> <span class="count">(0)</span></li>
                            <li class="cat-item cat-item-14"><a href="/danh-muc/kinh-thuc-te-ao/">Kính Thực Tế Ảo</a> <span class="count">(11)</span></li>
                            <li class="cat-item cat-item-15"><a href="/danh-muc/loa-am-thanh/">Loa - Âm Thanh</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-54"><a href="/danh-muc/may-chieu-phu-kien/">Máy chiếu &amp; Phụ kiện</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-10"><a href="/danh-muc/may-chieu-android/">Máy Chiếu ANDROID</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-9"><a href="/danh-muc/phu-kien-android-box/">Phụ Kiện Android Box</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-53"><a href="/danh-muc/phu-kien-ket-noi-chuyen-doi/">Phụ kiện kết nối &amp; Chuyển đổi</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-50"><a href="/danh-muc/pin-sac-du-phong/">Pin Sạc Dự Phòng</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-51"><a href="/danh-muc/san-pham-thong-minh/">Sản Phẩm Thông Minh</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-12"><a href="/danh-muc/san-pham-xiaomi/">Sản Phẩm XIAOMI</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-13"><a href="/danh-muc/smart-watch/">Smart Watch</a> <span class="count">(10)</span></li>
                            <li class="cat-item cat-item-52"><a href="/danh-muc/thiet-bi-truyen-hinh-tv/">Thiết Bị Truyền Hình &amp; TV</a> <span class="count">(10)</span></li>
                        </ul>
                    </div>
                    <div id="devvn_woocommerce_price_list_filter-2" class="widget block-sidebar devvn_woocommerce_price_list_filter woocommerce widget_layered_nav">
                        <h3 class="title-sidebar">Shop by Price</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                <a href="#">Dưới 1 triệu</a> <span class="count">(4)</span> </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                <a href="#">Từ 1 - 2 triệu</a> <span class="count">(5)</span> </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                <a href="#">Từ 2 - 3 triệu</a> <span class="count">(1)</span> </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                <a href="#">Từ 3 - 4 triệu</a> <span class="count">(0)</span> </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                <a href="#">Trên 4 triệu</a> <span class="count">(4)</span> </li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-2" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Bộ nhớ</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">4GB</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">8GB</a> <span class="count">(3)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">16GB</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">32GB</a> <span class="count">(2)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-3" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">CPU</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Allwinner</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Amlogic</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">HiSilicon</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Intel</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Mstar9180</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Rockchip</a> <span class="count">(2)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-4" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Số nhân CPU</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Dual Core</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Octa Core</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">Quad Core</a> <span class="count">(2)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-5" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Tốc độ xử lý</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">1.2 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">1.5 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">1.6 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">2.0 GHZ</a> <span class="count">(1)</span></li>
                        </ul>
                    </div>
                    <div id="news_category_widget-2" class="widget block-sidebar news_category_widget">
                        <h3 class="title-sidebar">Tin tức</h3>
                    </div>
                    <div id="videos_category_widget-2" class="widget block-sidebar videos_category_widget">
                        <h3 class="title-sidebar">Videos</h3>
                    </div>
                    <div id="media_image-4" class="widget block-sidebar widget_media_image"><img width="224" height="366" src="{{url('/vlnk')}}/images/banner-xe-dien-1.jpg" class="image wp-image-78  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></div>
                </aside>
            </div>
        </div>
    </div>
@endsection