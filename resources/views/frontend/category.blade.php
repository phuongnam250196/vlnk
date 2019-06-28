@extends('frontend.layout')
@section('title', 'Sản phẩm theo loại')
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div id="container" class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div id="content" role="main">
                        <nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Trang chủ</a>&nbsp;/&nbsp;Android TV Box</nav>
                        {{-- <div class="slider_section">
                            <ul class="bxslider">
                                <li class="">
                                    <img width="850" height="260" src="https://tech360.vn/wp-content/uploads/2018/11/banner-ngang-T95S1-min.png" class="attachment-full size-full" alt="" srcset="https://tech360.vn/wp-content/uploads/2018/11/banner-ngang-T95S1-min.png 850w, https://tech360.vn/wp-content/uploads/2018/11/banner-ngang-T95S1-min-600x184.png 600w" sizes="(max-width: 850px) 100vw, 850px"> </li>
                            </ul>
                        </div> --}}
                        <h2 class="page-title">Android TV Box</h2>
                        <div class="term-description">
                            <p>Mua Android TV Box chính hãng tại TECH360 để nhận được nhiều ưu đãi, khuyến mại, quà tặng hấp dẫn, tặng ngay tài khoản VIP, bộ ứng dụng giải trí cao cấp</p>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <p class="woocommerce-result-count">
                            Hiển thị 1–16 của 73 sản phẩm</p>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="menu_order" selected="selected">Thứ tự mặc định</option>
                                <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                                <option value="rating">Thứ tự theo điểm đánh giá</option>
                                <option value="date">Mới nhất</option>
                                <option value="price">Thứ tự theo giá: thấp đến cao</option>
                                <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                        </form>
                        <ul class="products columns-4">
                            @foreach($data as $key=>$dat)
                                <li class="product type-product">
                                    <div class="shop_loop_box">
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <span class="onsale">Giảm giá!</span>
                                            <img width="300" height="300" src="{{url(''.$dat->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt=""/>
                                        </a>
                                        <a rel="nofollow" href="#" data-quantity="1" data-product_id="98" data-product_sku="TYCOT35" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_98">Thêm vào giỏ</a> 
                                    </div>
                                    <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
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
                        <nav class="woocommerce-pagination">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="https://tech360.vn/android-tv-box/page/2">2</a></li>
                                <li><a class="page-numbers" href="https://tech360.vn/android-tv-box/page/3">3</a></li>
                                <li><a class="page-numbers" href="https://tech360.vn/android-tv-box/page/4">4</a></li>
                                <li><a class="page-numbers" href="https://tech360.vn/android-tv-box/page/5">5</a></li>
                                <li><a class="next page-numbers" href="https://tech360.vn/android-tv-box/page/2">→</a></li>
                            </ul>
                        </nav>
                        <div class="section_html tinymce">
                            <h1><span style="font-size: 14pt;"><strong>TECH360 phân phối Android TV Box tại Hà Nội, tp HCM và Toàn quốc</strong></span></h1>
                            <p><a href="https://tech360.vn/android-tv-box"><b>Android TV Box</b></a> đơn giản là một thiết bị kỹ thuật số trang bị hệ điều hành Android và được kết nối với Tivi của bạn, hỗ trợ các chức năng giải trí như xem truyền hình trực tuyến, xem phim online, offline, nghe nhạc, lướt web đọc báo, xem video youtube, xem bóng đá, tham gia mạng xã hội, chat skype, chơi game… cũng như sử dụng nhiều ứng dụng android khác qua mạng Internet. Android TV Box thường kết nối với TV qua cổng HDMI hay AV, do vậy hầu hết tất cả các loại TV đều có thể sử dụng với Android Box.</p>
                            <p>Liên hệ với <strong>TECH360</strong> để được tư vấn miễn phí và chọn mua được mẫu TV Box phù hợp nhu cầu sử dụng với giá tốt nhất!</p>
                        </div>
                    </div>
                </div>
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9" role="complementary" itemscope="" itemtype="http://schema.org/WPSideBar">
                    <div id="woocommerce_product_categories-3" class="widget block-sidebar woocommerce widget_product_categories">
                        <h3 class="title-sidebar">Loại sản phẩm</h3>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-42"><a href="https://tech360.vn/android-tv-box-himedia">Android TV Box Himedia</a> <span class="count">(13)</span></li>
                            <li class="cat-item cat-item-41"><a href="https://tech360.vn/android-tv-box-kiwibox">Android TV Box Kiwibox</a> <span class="count">(11)</span></li>
                            <li class="cat-item cat-item-77"><a href="https://tech360.vn/android-tv-box-vinabox">Android TV Box Vinabox</a> <span class="count">(7)</span></li>
                            <li class="cat-item cat-item-78"><a href="https://tech360.vn/android-tv-box-zidoo">Android TV Box Zidoo</a> <span class="count">(3)</span></li>
                            <li class="cat-item cat-item-79"><a href="https://tech360.vn/android-tv-box-khac">Android TV Box khác</a> <span class="count">(36)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_price_filter-2" class="widget block-sidebar woocommerce widget_price_filter">
                        <h3 class="title-sidebar">Lọc theo giá</h3>
                        <form method="get" action="https://tech360.vn/android-tv-box/">
                            <div class="price_slider_wrapper">
                                <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                </div>
                                <div class="price_slider_amount" data-step="10">
                                    <input type="text" id="min_price" name="min_price" value="890000" data-min="890000" placeholder="Giá thấp nhất" style="display: none;">
                                    <input type="text" id="max_price" name="max_price" value="5390000" data-max="5390000" placeholder="Giá cao nhất" style="display: none;">
                                    <button type="submit" class="button">Lọc</button>
                                    <div class="price_label" style="">
                                        Giá <span class="from">890.000&nbsp;₫</span> — <span class="to">5.390.000&nbsp;₫</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="woocommerce_layered_nav-3" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Chip xử lý</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-xu-ly=allwinner">Allwinner</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-xu-ly=amlogic">Amlogic</a> <span class="count">(26)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-xu-ly=hisilicon">HiSilicon</a> <span class="count">(5)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-xu-ly=mstar9180">Mstar9180</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-xu-ly=realtek">Realtek</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-xu-ly=rockchip">Rockchip</a> <span class="count">(13)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-5" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Số nhân CPU</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_so-nhan-cpu=octa-core">Octa Core</a> <span class="count">(6)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_so-nhan-cpu=quad-core">Quad Core</a> <span class="count">(27)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-2" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Chip đồ họa</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-do-hoa=mali">Mali</a> <span class="count">(28)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_chip-do-hoa=powervr">PowerVR</a> <span class="count">(2)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-6" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Dung lượng ram</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_dung-luong-ram=1gb">1GB</a> <span class="count">(15)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_dung-luong-ram=2gb">2GB</a> <span class="count">(33)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_dung-luong-ram=3gb">3GB</a> <span class="count">(1)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-11" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Bộ nhớ trong</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_bo-nho-trong=4gb">4GB</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_bo-nho-trong=8gb">8GB</a> <span class="count">(30)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_bo-nho-trong=16gb">16GB</a> <span class="count">(19)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-4" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Hệ điều hành</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_he-dieu-hanh=android-4">Android 4</a> <span class="count">(18)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_he-dieu-hanh=android-5">Android 5</a> <span class="count">(14)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_he-dieu-hanh=android-6">Android 6</a> <span class="count">(11)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_he-dieu-hanh=android-7">Android 7</a> <span class="count">(1)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-10" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Tốc độ xử lý</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_toc-do-xu-ly=1-2-ghz">1.2 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_toc-do-xu-ly=1-5-ghz">1.5 GHZ</a> <span class="count">(10)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_toc-do-xu-ly=1-6-ghz">1.6 GHZ</a> <span class="count">(3)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_toc-do-xu-ly=2-0-ghz">2.0 GHZ</a> <span class="count">(15)</span></li>
                        </ul>
                    </div>
                    <div id="woocommerce_layered_nav-9" class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">ĐỘ PHÂN GIẢI VIDEO</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="https://tech360.vn/android-tv-box?filter_do-phan-giai-video=4k">4K</a> <span class="count">(6)</span></li>
                        </ul>
                    </div>
                    <div id="news_category_widget-2" class="widget block-sidebar news_category_widget">
                        <h3 class="title-sidebar">Tin tức</h3>
                        <ul class="news_list">
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/san-khuyen-mai-lon-mua-noel-2017-happy-new-year-2018" title="Săn khuyến mại lớn mùa Noel 2017 – Happy New Year 2018">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/12/850x260-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://tech360.vn/wp-content/uploads/2017/12/850x260-150x150.png 150w, https://tech360.vn/wp-content/uploads/2017/12/850x260-100x100.png 100w, https://tech360.vn/wp-content/uploads/2017/12/850x260-180x180.png 180w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Săn khuyến mại lớn mùa Noel 2017 – Happy New Year 2018</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/top-10-android-tv-box-ban-chay-nhat-thang-12-2017" title="Top 10 android tv box bán chạy nhất tháng 12/2017">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/11/Kiwibox-S3-pro-4-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Kiwibox S3 Pro - RAM 2G, ROM 8G, Android 6.0" srcset="https://tech360.vn/wp-content/uploads/2017/11/Kiwibox-S3-pro-4-150x150.jpg 150w, https://tech360.vn/wp-content/uploads/2017/11/Kiwibox-S3-pro-4-300x300.jpg 300w, https://tech360.vn/wp-content/uploads/2017/11/Kiwibox-S3-pro-4-100x100.jpg 100w, https://tech360.vn/wp-content/uploads/2017/11/Kiwibox-S3-pro-4-180x180.jpg 180w, https://tech360.vn/wp-content/uploads/2017/11/Kiwibox-S3-pro-4-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Top 10 android tv box bán chạy nhất tháng 12/2017</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/top-android-tv-box-chat-luong-nen-mua-nam-2017" title="Top Android TV Box chất lượng nên mua năm 2017">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-vinabox-x9-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="android tv box vinabox x9" srcset="https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-vinabox-x9-1-150x150.jpg 150w, https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-vinabox-x9-1-300x300.jpg 300w, https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-vinabox-x9-1-100x100.jpg 100w, https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-vinabox-x9-1-180x180.jpg 180w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Top Android TV Box chất lượng nên mua năm 2017</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/kinh-nghiem-su-dung-android-tv-box-sao-cho-ben" title="Kinh nghiệm sử dụng Android TV Box sao cho bền">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2016/12/android-tv-box-minix-neo-x8h-plus-4-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Android TV Box Minix NEO X8H-Plus" srcset="https://tech360.vn/wp-content/uploads/2016/12/android-tv-box-minix-neo-x8h-plus-4-150x150.jpg 150w, https://tech360.vn/wp-content/uploads/2016/12/android-tv-box-minix-neo-x8h-plus-4-300x300.jpg 300w, https://tech360.vn/wp-content/uploads/2016/12/android-tv-box-minix-neo-x8h-plus-4-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Kinh nghiệm sử dụng Android TV Box sao cho bền</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/cac-thong-thuong-thay-tren-cac-android-tv-box" title="Các thông số thường thấy trên các Android TV Box">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-mx-plus-amlogic-s905-64bit-6-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-mx-plus-amlogic-s905-64bit-6-150x150.jpg 150w, https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-mx-plus-amlogic-s905-64bit-6-300x300.jpg 300w, https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-mx-plus-amlogic-s905-64bit-6-100x100.jpg 100w, https://tech360.vn/wp-content/uploads/2017/05/android-tv-box-mx-plus-amlogic-s905-64bit-6-180x180.jpg 180w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Các thông số thường thấy trên các Android TV Box</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="videos_category_widget-2" class="widget block-sidebar videos_category_widget">
                        <h3 class="title-sidebar">Videos</h3>
                        <ul class="news_list videos_list">
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/android-tivi-box-thiet-bi-giai-tri-da-nang-trong-gia-dinh-ban" title="Android Tivi Box thiết bị giải trí đa năng trong gia đình bạn">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-19-37-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Android Tivi Box thiết bị giải trí đa năng trong gia đình bạn" srcset="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-19-37-150x150.png 150w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-19-37-300x300.png 300w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-19-37-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Android Tivi Box thiết bị giải trí đa năng trong gia đình bạn</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/android-tv-box-gia-re-bien-tv-thuong-thanh-smart-tv" title="Android TV Box giá rẻ biến TV thường thành Smart TV">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-28-16-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Android TV Box giá rẻ biến TV thường thành Smart TV" srcset="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-28-16-150x150.png 150w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-28-16-300x300.png 300w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-28-16-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Android TV Box giá rẻ biến TV thường thành Smart TV</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/android-tivi-box-minix-neo-u1-unbox" title="Android Tivi Box Minix NEO U1 – Unbox">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-31-40-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Android Tivi Box Minix NEO U1" srcset="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-31-40-150x150.png 150w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-31-40-300x300.png 300w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_11-31-40-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Android Tivi Box Minix NEO U1 – Unbox</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/android-tivi-box-mx-plus-amlogic-s905-64bit-unbox" title="Android Tivi Box MX Plus AMLogic S905 64bit – Unbox">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-13-59-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Android Tivi Box MX Plus AMLogic S905 64bit" srcset="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-13-59-150x150.png 150w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-13-59-300x300.png 300w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-13-59-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Android Tivi Box MX Plus AMLogic S905 64bit – Unbox</h3>
                                </a>
                            </li>
                            <li class="has-thumbnail">
                                <a href="https://tech360.vn/dap-hop-android-tv-box-cloudnetgo-cr18-octacore-64bit-4k" title="Đập hộp Android TV Box Cloudnetgo CR18 OctaCore 64bit 4K">
                                    <img width="150" height="150" src="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-07-44-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Đập hộp Android TV Box Cloudnetgo CR18 OctaCore 64bit 4K" srcset="https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-07-44-150x150.png 150w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-07-44-300x300.png 300w, https://tech360.vn/wp-content/uploads/2017/01/2017-01-17_14-07-44-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px">
                                    <h3>Đập hộp Android TV Box Cloudnetgo CR18 OctaCore 64bit 4K</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="widget_sp_image-5" class="widget block-sidebar widget_sp_image">
                        <h3 class="title-sidebar">Máy chiếu văn phòng-lớp học</h3><img width="427" height="640" alt="Máy chiếu văn phòng-lớp học" class="attachment-full" style="max-width: 100%;" src="https://tech360.vn/wp-content/uploads/2016/11/banner-tyco-t35-20160722204411.jpg">
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection