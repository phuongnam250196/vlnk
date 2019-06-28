@extends('frontend.layout')
@section('title', 'videos')
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-md-9 col-sm-9 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <span class="breadcrumb_last" aria-current="page">Videos</span></span></span></div>
                        <div class="page_content">
                            <header>
                                <h1 class="title-page">Videos</h1>
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
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
                    <div id="search-2" class="widget widget_search">
                        <div itemscope itemtype="http://schema.org/WebSite">
                            <meta itemprop="url" content="https://dienmay2.trustweb.vn" />
                            <form itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction" method="get" class="form-inline" id="searchform" action="/">
                                <meta itemprop="target" content="https://dienmay2.trustweb.vn?s={s}" />
                                <input itemprop="query-input" type="text" class="form-control field" value="" name="s" id="s" placeholder="Tìm kiếm tin tức" />
                                <button type="submit" class="btn btn-default" id="searchsubmit">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                    <div id="categories-4" class="widget widget_categories">
                        <h3 class="title-sidebar">Danh mục tin tức</h3>
                        <ul>
                            <li class="cat-item"><a href="#">Android Box</a> (2)
                            </li>
                            <li class="cat-item"><a href="#">Camera Thông Minh</a> (4)
                            </li>
                            <li class="cat-item"><a href="#">Máy chiếu &amp; Phụ kiện</a> (1)
                            </li>
                            <li class="cat-item"><a href="#">Phụ kiện kết nối &amp; Chuyển đổi</a> (1)
                            </li>
                            <li class="cat-item"><a href="#">Sản Phẩm XIAOMI</a> (1)
                            </li>
                            <li class="cat-item"><a href="#">Smart Watch</a> (1)
                            </li>
                            <li class="cat-item"><a href="#">Thiết Bị Truyền Hình &amp; TV</a> (1)
                            </li>
                        </ul>
                    </div>
                    <div id="newsnoibat_widget-2" class="widget newsnoibat_widget">
                        <h3 class="title-sidebar">Tin tức nổi bật</h3>
                        <div class="tintuc_lienquan">
                            <ul class="news_list">
                                <li class="has-thumbnail">
                                    <a href="#">
                                        <img width="150" height="150" src="{{url('/vlnk')}}/images/anh-dep-girl-xinh-02-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" />
                                        <h3>Quay video 360 độ, trải nghiệm VR với action camera SJCAM SJ360</h3>
                                    </a>
                                </li>
                                <li class="has-thumbnail">
                                    <a href="#">
                                        <img width="150" height="150" src="{{url('/vlnk')}}/images/anh-dep-meo-con3__76574_zoom-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" />
                                        <h3>Kinh nghiệm sử dụng camera hành động cho phượt thủ</h3>
                                    </a>
                                </li>
                                <li class="has-thumbnail">
                                    <a href="#">
                                        <img width="150" height="150" src="{{url('/vlnk')}}/images/maxresdefault-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" />
                                        <h3>Sau camera thể thao SJ6 Legend của SJCAM thị trường sắp đón nhận sản phẩm cao cấp mới mang tên SJ7 Star</h3>
                                    </a>
                                </li>
                                <li class="has-thumbnail">
                                    <a href="#">
                                        <img width="150" height="150" src="{{url('/vlnk')}}/images/ipcam-qf004-10-20160517042804-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" />
                                        <h3>Có gì mới trên hai phiên bản SJCAM SJ6 Legend và SJ7 Star</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="devvn_widget_most_viewed_entries-2" class="widget devvn_widget_most_viewed_entries">
                        <h3 class="title-sidebar">Xem nhiều nhất</h3>
                        <ul>
                            <li><a href="#">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/maxresdefault-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> Sau camera thể thao SJ6 Legend của SJCAM thị trường sắp đón nhận sản phẩm cao cấp mới mang tên SJ7 Star </a></li>
                            <li><a href="#">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/ipcam-qf004-10-20160517042804-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> Có gì mới trên hai phiên bản SJCAM SJ6 Legend và SJ7 Star </a></li>
                            <li><a href="#">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/anh-dep-girl-xinh-02-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> Quay video 360 độ, trải nghiệm VR với action camera SJCAM SJ360 </a></li>
                            <li><a href="#">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/anh-dep-meo-con3__76574_zoom-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""/> Kinh nghiệm sử dụng camera hành động cho phượt thủ </a></li>
                            <li><a href="#">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/kiwibox-s3-49-1-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> Video review camera thể thao SJCAM SJ6 Legend cùng một số hình ảnh về nó </a></li>
                        </ul>
                    </div>
                    <div id="tag_cloud-3" class="widget widget_tag_cloud">
                        <h3 class="title-sidebar">Từ khóa</h3>
                        <div class="tagcloud"><a href="#" class="tag-cloud-link tag-link-46 tag-link-position-1" style="font-size: 22pt;" aria-label="android (2 mục)">android</a>
                            <a href="#" class="tag-cloud-link tag-link-48 tag-link-position-2" style="font-size: 22pt;" aria-label="android box (2 mục)">android box</a>
                            <a href="#" class="tag-cloud-link tag-link-47 tag-link-position-3" style="font-size: 8pt;" aria-label="box (1 mục)">box</a></div>
                    </div>
                    <div id="media_image-5" class="widget widget_media_image"><img width="224" height="366" src="{{url('/vlnk')}}/images/banner-xe-dien-1.jpg" class="image wp-image-78  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></div>
                </aside>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <div class="section_custom_view_products">
                        <div class="section_cvp_title">
                            <h3>Sản phẩm nổi bật</h3>
                        </div>
                        <div class="section_cvp_content">
                            <div class="woocommerce columns-5 ">
                                <ul class="products columns-5">
                                    <li class="product type-product status-publish has-post-thumbnail pa_gpu-test first instock featured shipping-taxable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/camera-the-thao-sj4000-1-20160514012410-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="#" data-quantity="1" data-product_id="224" data-product_sku="" class="button product_type_simple ajax_add_to_cart" id="tech_addtocart_224">Đọc tiếp</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ7 1</h2>
                                        </a>
                                        <span class="price"><span class="amount">Liên hệ</span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                        <div class="devvn_is_tragop"><img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> <a href="#">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                                    </li>
                                    <li class="post-108 product type-product status-publish has-post-thumbnail instock featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/miracast-hdmi-khong-day-1-20160814200554-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="#" data-quantity="1" data-product_id="108" data-product_sku="BT001" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_108">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">HDMI không dây &#8211; EzCast Blutimes BT001</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount">600.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="product type-product status-publish has-post-thumbnail instock featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/sjcam-sj6-legend-black-1-20160929212645-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="#" data-quantity="1" data-product_id="104" data-product_sku="SJCAMSJ6" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_104">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ6 Legend 4K WIFI</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount">4.390.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="post-98 product type-product status-publish has-post-thumbnail instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/img_6777000-20160621201405-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/tin-tuc/?add-to-cart=98" data-quantity="1" data-product_id="98" data-product_sku="TYCOT35" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_98">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Máy chiếu Tyco T35</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">6.490.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">5.900.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="product type-product status-publish has-post-thumbnail last instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="#" data-quantity="1" data-product_id="90" data-product_sku="QF004 HD WIFI" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_90">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">IP CAMERA BÁO ĐỘNG CHỐNG TRỘM QF004 HD WIFI</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">1.590.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">1.300.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection