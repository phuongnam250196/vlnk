@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="slider_section">
                        <ul class="bxslider">
                            <li class="">
                                <a href="#" title="" target="_self"> <img width="855" height="260" src="{{url('/vlnk')}}/images/slider-t95u-pro.png" class="attachment-full size-full" alt="" /> </a> </li>
                            <li class="hiddenFirst">
                                <img width="855" height="260" src="{{url('/vlnk')}}/images/slider-t95x.png" class="attachment-full size-full" alt="" /> </li>
                        </ul>
                    </div>
                    <div class="section_custom_view_products ">
                        <div class="section_cvp_title">
                            <h3><span>Sản phẩm khuyến mại</span></h3>
                        </div>
                        <div class="section_cvp_content">
                            <div class="woocommerce columns-4 ">
                                <ul class="products columns-4">
                                    @foreach($products as $key=>$prod)
                                    @if($key<8)
                                        <li class="product">
                                            <div class="shop_loop_box">
                                                <a href="{{url('/product/'.$prod->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <span class="onsale">Giảm giá!</span>
                                                    <img src="{{url('/'.$prod->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                </a>
                                                <a rel="nofollow" href="/?add-to-cart=214" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_214">Thêm vào giỏ</a> 
                                            </div>
                                            <a href="{{url('/product/'.$prod->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                            </a>
                                            <span class="price"><del><span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                            <div class="devvn_is_tragop"><img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> <a href="{{url('/product/'.$prod->prod_slug)}}">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section_oneimage">
                        <a href="#" title="" target="_blank"> <img width="912" height="75" src="{{url('/vlnk')}}/images/home_07.png" class="attachment-full size-full" alt="" /> </a>
                    </div>
                    <div class="section_custom_view_products ">
                        <div class="section_cvp_title">
                            <h3><span>Sản phẩm nổi bật</span></h3>
                        </div>
                        <div class="section_cvp_content">
                            <div class="woocommerce columns-4 ">
                                <ul class="products columns-4">
                                    @foreach($products as $key=>$prod)
                                    @if($key<4)
                                        <li class="product type-product">
                                            <div class="shop_loop_box">
                                                <a href="{{url('/product/'.$prod->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <img src="{{url(''.$prod->prod_img)}}" alt="" />
                                                </a>
                                                <a rel="nofollow" href="/?add-to-cart=108" data-quantity="1" data-product_id="108" data-product_sku="BT001" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_108">Thêm vào giỏ</a> 
                                            </div>
                                            <a href="{{url('/product/'.$prod->prod_slug)}}">
                                                <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                            </a>
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                            </span>
                                            <div class="devvn_is_featured"><img src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section_custom_view_products ">
                        <div class="section_cvp_title">
                            <h3><span>Android Box</span></h3>
                            <a href="#" class="section_cvp_link" title="Xem thêm Android Box">Xem thêm</a>
                        </div>
                        <div class="section_cvp_content">
                            <div class="woocommerce columns-4 ">
                                <ul class="products columns-4">
                                    <li class="post-224 product type-product status-publish has-post-thumbnail product_cat-camera-thong-minh pa_gpu-test first instock featured shipping-taxable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="# " class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/camera-the-thao-sj4000-1-20160514012410-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="# " data-quantity="1" data-product_id="224" data-product_sku="" class="button product_type_simple ajax_add_to_cart" id="tech_addtocart_224">Đọc tiếp</a> </div>
                                        <a href="# " class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ7 1</h2>
                                        </a>
                                        <span class="price"><span class="amount">Liên hệ</span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                        <div class="devvn_is_tragop"><img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> <a href="/tra-gop/">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                                    </li>
                                    <li class="post-214 product type-product status-publish has-post-thumbnail  instock sale shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/sjcam-4000-plus-wifi-7-20160423015121-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=214" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_214">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ6 Legend 4K WIFI</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">3.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">2.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        <div class="devvn_is_tragop"><img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> <a href="/tra-gop/">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                                    </li>
                                    <li class="post-207 product type-product status-publish has-post-thumbnail instock sale shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/camera-the-thao-sj4000-5-20160423015739-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=207" data-quantity="1" data-product_id="207" data-product_sku="SJCAM SJ4000" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_207">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Canera thể thao ACTION CAM SJCAM SJ4000</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">1.490.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">1.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                    </li>
                                    <li class="post-108 product type-product status-publish has-post-thumbnail last instock featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/miracast-hdmi-khong-day-1-20160814200554-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=108" data-quantity="1" data-product_id="108" data-product_sku="BT001" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_108">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">HDMI không dây &#8211; EzCast Blutimes BT001</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount">600.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="post-104 product type-product status-publish has-post-thumbnail first instock featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/sjcam-sj6-legend-black-1-20160929212645-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=104" data-quantity="1" data-product_id="104" data-product_sku="SJCAMSJ6" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_104">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ6 Legend 4K WIFI</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount">4.390.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="post-98 product type-product status-publish has-post-thumbnail  instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="/san-pham/may-chieu-tyco-t35/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/img_6777000-20160621201405-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=98" data-quantity="1" data-product_id="98" data-product_sku="TYCOT35" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_98">Thêm vào giỏ</a> </div>
                                        <a href="/san-pham/may-chieu-tyco-t35/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Máy chiếu Tyco T35</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">6.490.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">5.900.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="post-96 product type-product status-publish has-post-thumbnail  instock shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="/san-pham/o-cam-hen-gio-dien-tu-md-932/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/o-cam-hen-gio-dien-tu-20160609235125-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=96" data-quantity="1" data-product_id="96" data-product_sku="MD-932" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_96">Thêm vào giỏ</a> </div>
                                        <a href="/san-pham/o-cam-hen-gio-dien-tu-md-932/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Ổ cắm hẹn giờ điện tử MD-932</h2>
                                        </a>
                                        <span class="price"><span class="amount">Miễn phí</span></span>
                                    </li>
                                    <li class="post-90 product type-product status-publish has-post-thumbnail last instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="/san-pham/ip-camera-bao-dong-chong-trom-qf004-hd-wifi/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=90" data-quantity="1" data-product_id="90" data-product_sku="QF004 HD WIFI" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_90">Thêm vào giỏ</a> </div>
                                        <a href="/san-pham/ip-camera-bao-dong-chong-trom-qf004-hd-wifi/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">IP CAMERA BÁO ĐỘNG CHỐNG TRỘM QF004 HD WIFI</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">1.590.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">1.300.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section_custom_view_products ">
                        <div class="section_cvp_title">
                            <h3><span>MÁY CHIẾU ANDROID</span></h3>
                            <a href="/danh-muc/may-chieu-android" class="section_cvp_link" title="Xem thêm MÁY CHIẾU ANDROID">Xem thêm</a>
                        </div>
                        <div class="section_cvp_content">
                            <div class="woocommerce columns-4 ">
                                <ul class="products columns-4">
                                    <li class="post-214 product type-product status-publish has-post-thumbnail first instock sale shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/sjcam-4000-plus-wifi-7-20160423015121-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=214" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_214">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ6 Legend 4K WIFI</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">3.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">2.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                        <div class="devvn_is_tragop"><img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> <a href="/tra-gop/">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                                    </li>
                                    <li class="post-207 product type-product status-publish has-post-thumbnail  instock sale shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <span class="onsale">Giảm giá!</span>
                                                <img width="300" height="300" src="{{url('/vlnk')}}/images/camera-the-thao-sj4000-5-20160423015739-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=207" data-quantity="1" data-product_id="207" data-product_sku="SJCAM SJ4000" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_207">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Canera thể thao ACTION CAM SJCAM SJ4000</h2>
                                        </a>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount">1.490.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">1.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                    </li>
                                    <li class="post-108 product type-product status-publish has-post-thumbnail instock featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/miracast-hdmi-khong-day-1-20160814200554-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=108" data-quantity="1" data-product_id="108" data-product_sku="BT001" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_108">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">HDMI không dây &#8211; EzCast Blutimes BT001</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount">600.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                    <li class="post-104 product type-product status-publish has-post-thumbnail last instock featured shipping-taxable purchasable product-type-simple">
                                        <div class="shop_loop_box">
                                            <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="{{url('/vlnk')}}/images/sjcam-sj6-legend-black-1-20160929212645-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a><a rel="nofollow" href="/?add-to-cart=104" data-quantity="1" data-product_id="104" data-product_sku="SJCAMSJ6" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_104">Thêm vào giỏ</a> </div>
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">Camera thể thao SJCAM SJ6 Legend 4K WIFI</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount">4.390.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section_html tinymce">
                        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="widget danhmuc_widget">
                        <h3 class="title-sidebar">Danh mục sản phẩm<i class="fa fa-bars"></i></h3>
                        <div class="devvn_mega_menu_wrap">
                            @include('frontend.nav.nav_cate')
                        </div>
                    </div>
                    <div id="recent-posts_svl-2" class="widget widget_recent_entries_svl">
                        <h3 class="title-sidebar">Tin tức mới</h3>
                        @include('frontend.nav.nav_news')
                    </div>
                    <div id="recent-videos-svl-2" class="widget widget_recent_entries_svl">
                        <h3 class="title-sidebar">Videos</h3>
                        @include('frontend.nav.nav_videos')
                    </div>
                    <div id="media_image-2" class="widget widget_media_image"><img width="224" height="366" src="{{url('/vlnk')}}/images/banner-xe-dien-1.jpg" class="image wp-image-78  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></div>
                </aside>
            </div>
        </div>
    </div>
@endsection