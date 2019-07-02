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
                            <h3><span>MÁY CHIẾU ANDROID</span></h3>
                            <a href="/danh-muc/may-chieu-android" class="section_cvp_link" title="Xem thêm MÁY CHIẾU ANDROID">Xem thêm</a>
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