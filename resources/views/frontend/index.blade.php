@extends('frontend.layout')
@section('title', 'Trang chủ - '.$seopost->title)
@section('description', $seopost->description)
@section('image', url('/'.$seopost->image))
@section('url', $seopost->url)
@section('sitename', $_SERVER['REQUEST_URI'])
@section('keywords', $seopost->keyword)
@section('author', $seopost->author)
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="slider_section">
                        <ul class="bxslider">
                            @foreach($sliders as $key=>$slider)
                                <li @if($key !=0) class="hiddenFirst" @endif>
                                    <a href="{{$slider->link}}" title="{{$slider->title}}" target="_self"> <img width="855" height="260" src="{{url('/'.$slider->image)}}" class="attachment-full size-full" alt="{{$slider->title}}" /> </a> 
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="section_custom_view_products ">
                        <div class="section_cvp_title">
                            <h3><span id="jj">Sản phẩm khuyến mại</span></h3>
                        </div>
                        <div class="section_cvp_content">
                            <div class="woocommerce columns-4 ">
                                <ul class="products columns-4">
                                    @foreach($products as $key=>$prod)
                                    @if($key<8)
                                        <li class="product">
                                            <div class="shop_loop_box">
                                                <a class="product_id" data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}">
                                                    @if(!empty($prod->prod_sale))
                                                        <span class="onsale">Giảm giá!</span>
                                                    @endif
                                                    <img src="{{url('/'.$prod->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                </a>
                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a> 
                                            </div>
                                            <a class="product_id" data-id="{{$prod->id}}"  href="{{url('/product/'.$prod->prod_slug)}}">
                                                <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                            </a>
                                            <span class="price">
                                                @if(!empty($prod->prod_sale))
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                    </del>
                                                @endif 
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price-($prod->prod_price*$prod->prod_sale*0.01), 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </ins>
                                            </span>
                                            @if(!empty($prod->hot))
                                                <div class="devvn_is_featured">
                                                    <img src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" />
                                                </div>
                                            @endif
                                            @if(!empty($prod->installment))
                                                <div class="devvn_is_tragop">
                                                    <img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> 
                                                    <a class="product_id" data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                </div>
                                            @endif
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
                                        <li class="product">
                                            <div class="shop_loop_box">
                                                <a data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}" class="product_id woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    @if(!empty($prod->prod_sale))
                                                        <span class="onsale">Giảm giá!</span>
                                                    @endif
                                                    <img src="{{url('/'.$prod->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                </a>
                                                <a rel="nofollow" href="/?add-to-cart=214" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_214">Thêm vào giỏ</a> 
                                            </div>
                                            <a data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}" class="product_id woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                            </a>
                                            <span class="price">
                                                <del>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </del> 
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price-($prod->prod_price*$prod->prod_sale*0.01), 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </ins>
                                            </span>
                                            @if(!empty($prod->hot))
                                                <div class="devvn_is_featured">
                                                    <img src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" />
                                                </div>
                                            @endif
                                            @if(!empty($prod->installment))
                                                <div class="devvn_is_tragop">
                                                    <img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> 
                                                    <a class="product_id" data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                </div>
                                            @endif
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
                                        <li class="product">
                                            <div class="shop_loop_box">
                                                <a data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}" class="product_id woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    @if(!empty($prod->prod_sale))
                                                        <span class="onsale">Giảm giá!</span>
                                                    @endif
                                                    <img src="{{url('/'.$prod->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                </a>
                                                <a rel="nofollow" href="/?add-to-cart=214" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_214">Thêm vào giỏ</a> 
                                            </div>
                                            <a data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}" class="product_id woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                            </a>
                                            <span class="price">
                                                <del>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </del> 
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price-($prod->prod_price*$prod->prod_sale*0.01), 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </ins>
                                            </span>
                                            @if(!empty($prod->hot))
                                                <div class="devvn_is_featured">
                                                    <img src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" />
                                                </div>
                                            @endif
                                            @if(!empty($prod->installment))
                                                <div class="devvn_is_tragop">
                                                    <img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> 
                                                    <a class="product_id" data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                </div>
                                            @endif
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
                                        <li class="product">
                                            <div class="shop_loop_box">
                                                <a data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}" class="product_id woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    @if(!empty($prod->prod_sale))
                                                        <span class="onsale">Giảm giá!</span>
                                                    @endif
                                                    <img src="{{url('/'.$prod->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                </a>
                                                <a rel="nofollow" href="/?add-to-cart=214" data-quantity="1" data-product_id="214" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_214">Thêm vào giỏ</a> 
                                            </div>
                                            <a data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}" class="product_id woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                            </a>
                                            <span class="price">
                                                <del>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </del> 
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price-($prod->prod_price*$prod->prod_sale*0.01), 0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                </ins>
                                            </span>
                                            @if(!empty($prod->hot))
                                                <div class="devvn_is_featured">
                                                    <img src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" />
                                                </div>
                                            @endif
                                            @if(!empty($prod->installment))
                                                <div class="devvn_is_tragop">
                                                    <img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> 
                                                    <a class="product_id" data-id="{{$prod->id}}" href="{{url('/product/'.$prod->prod_slug)}}">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                </div>
                                            @endif
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section_html tinymce">
                        <p><strong>TPN</strong> Xin chào mừng các bạn đến với website của chúng tôi, chúng tôi chuyên cung cấp những sản phẩm tốt nhất liên quan đến thiết bị, dụng cụ nha khoa. Ngoài cung cấp, chúng tôi cũng có các dịch vụ về sửa chữa, cũng như chính sách bảo hành, giao hàng an toàn trên toàn quốc... Đặc biệt, là khi vực Vĩnh Phúc, sẽ được ưu tiên khi dùng các mặt hàng của chúng tôi.</p>
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