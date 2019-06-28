<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title') - vlnk</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel='stylesheet' href='{{url("/vlnk")}}/css/styles.css?ver=5.0.4' type='text/css' />
    <link rel='stylesheet' href='{{url("/vlnk")}}/css/setup_css.css' type='text/css' />
    <link rel='stylesheet' href='{{url("/vlnk")}}/css/devvn-quick-buy.css?ver=2.0.0' type='text/css' />
    <link rel='stylesheet' href='{{url("/vlnk")}}/css/woocommerce-layout.css?ver=3.4.5' type='text/css' />
    <link rel='stylesheet' href='{{url("/vlnk")}}/css/woocommerce-smallscreen.css?ver=3.4.5' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='{{url("/vlnk")}}/css/woocommerce.css?ver=3.4.5' type='text/css' />
    <link rel='stylesheet' id='style-css' href='{{url("/vlnk")}}/css/devvn_style.css?ver=1.02' type='text/css' />
    <link rel='stylesheet' id='respon-css' href='{{url("/vlnk")}}/css/respon.css?ver=1.02' type='text/css' />
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery-migrate.min.js'></script>
    <link rel="icon" href="{{url('/vlnk')}}/images/logo.png" sizes="32x32" />
    <link rel="icon" href="{{url('/vlnk')}}/images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{url('/vlnk')}}/images/logo.png" />
    <meta name="msapplication-TileImage" content="{{url('/vlnk')}}/images/logo.png" />
    <script>
        jQuery( document ).ready(function() {
		jQuery('img[data-lazy-src]').each(function() 
		{  
            var imgsrc = jQuery(this).attr("data-lazy-src");
            jQuery(this).attr('src',imgsrc);
        });    
        var tbay_bottom_header = jQuery('header.header');
        var CurrentScroll = 0;
        var tbay_width = jQuery(window).width();
        var header_height = tbay_bottom_header.height();
        jQuery(window).scroll(function() {
            if(tbay_width <= 767) {
				//alert('ss');
                var NextScroll = jQuery(this).scrollTop();
                if (NextScroll > header_height + 30) {
                    tbay_bottom_header.addClass('sticky-header');
                } else {
                    tbay_bottom_header.removeClass('sticky-header');  
                }
            }
        });
    });
	
	</script>
</head>

<body class="home woocommerce page-template page-template-templates page-template-home-default page-template-templateshome-default-php page woocommerce-no-js devvn_desktop sidebar_to_menu logo_menu_stick">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
    <header class="header">
        <div class="top_header">
            <div class="container">
                <div class="top_header_left"><i class="fa fa-envelope-open" aria-hidden="true"></i> tpn250196@gmail.com</div>
                <div class="top_header_middle"><i class="fa fa-phone-square" aria-hidden="true"></i> 0354.524.503</div>
                <div class="top_header_right"><i class="fa fa-facebook-official" aria-hidden="true"></i> fb.com/phuongnam</div>
            </div>
        </div>
        <div class="main_header">
            <div class="container">
                <h2 class="logo">
                    <a href="{{url('/')}}" title="Công nghệ cho cuộc sống"><img src="{{url('/vlnk')}}/images/logo.png" /></a>
                </h2>
                <div class="search_header">
                    <form  method="get" class="woocommerce-product-search" action="{{url('search')}}">
                        <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Tìm kiếm sản phẩm" name="keyword" value="@if(!empty($_GET['keyword'])) {{$_GET['keyword']}} @endif" title="Tìm kiếm:" />
                        <button type="submit" class="btn btn-default" id="searchsubmit">Tìm kiếm</button>
                        {{csrf_field()}}
                    </form>
                </div>
                <div class="cart_header woocommerce">
                    <div class="popup_cart_hover">
                        <a class="cart-contents" href="#" title="Hiển thị giỏ hàng">
                            <span>Giỏ hàng của bạn</span>
                            <small>Chưa có sản phẩm</small>
                        </a>
                        <div class="popup_cart">
                            <ul class="cart_list product_list_widget ">
                                <li class="empty">Chưa có sản phẩm trong giỏ hàng.</li>
                            </ul><!-- end product list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_header_wrap">
            <div class="container">
                <div class="danhmuc_sanpham_menu">
                    <h3 class="title-sidebar click_open_mega">Danh mục sản phẩm<i class="fa fa-bars"></i></h3>
                    <div class="devvn_mega_menu_wrap">
                        @include('frontend.nav.nav_cate')
                    </div>
                </div>
                <a href="#" class="button_open_menu"><i class="fa fa-bars"></i> Menu</a>
                <div class="menu_header">
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-31" class="menu-item @if(Request::is('/')) current_page_ancestor @endif"><a href="{{url('/')}}">Trang chủ</a>
                        </li>
                        <li id="menu-item-29" class="menu-item @if(Request::is('news') || Request::is('news/*')) current_page_ancestor @endif"><a href="{{url('/news')}}">Tin tức</a>
                            <ul class="sub-menu">
                                <li id="menu-item-181" class="menu-item"><a href="#">Camera Thông Minh</a></li>
                                <li id="menu-item-180" class="menu-item"><a href="#">Android Box</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-183" class="menu-item @if(Request::is('videos') || Request::is('videos/*')) current_page_ancestor @endif"><a href="{{url('/videos')}}">Videos</a></li>
                        <li id="menu-item-28" class="menu-item @if(Request::is('support') || Request::is('support/*')) current_page_ancestor @endif"><a href="{{url('/support')}}">Hỗ trợ khách hàng</a></li>
                        <li id="menu-item-232" class="menu-item @if(Request::is('agency') || Request::is('agency/*')) current_page_ancestor @endif"><a href="{{url('/agency')}}">Hệ thống đại lý</a></li>
                        <li id="menu-item-27" class="menu-item @if(Request::is('contact') || Request::is('contact/*')) current_page_ancestor @endif"><a href="{{url('/contact')}}">Liên hệ</a></li>
                        <li id="menu-item-516" class="menu-item @if(Request::is('account') || Request::is('account/*')) current_page_ancestor @endif"><a href="{{url('/account')}}">Tài khoản</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="end_navpage"></div>
    </header>

    <!-- Thay đổi ở đây -->
    @yield('main')
    <!-- End thay đổi ở đây -->

    <footer class="footer">
        <div class="container">
            <div class="row footer_wrap">
                <div class="footer1 col-md-3 col-sm-3 col-xs-12">
                    <div id="text-2" class="widget-footer widget_text">
                        <h3 class="title-sidebar-footer">Thông tin liên hệ</h3>
                        <div class="textwidget">
                            <p><b><span class="text-uppercase" style="color: red">Vật liệu nha Khoa</span></b><br />
                                Địa chỉ: Xã Yên Bình, Huyện Vĩnh Tường, Tỉnh Vĩnh Phúc<br />
                                Điện thoại: (+84) 354.524.503<br />
                                Hotline: 0354.524.503<br />
                                <b><span style="color: red">EMAIL<b></b></span><b><br />
                                        phuongnam250196@gmail.com</b></b></p>
                        </div>
                    </div>
                    <div id="text-5" class="widget-footer widget_text">
                        <h3 class="title-sidebar-footer">Theo dõi SHOP</h3>
                        <div class="textwidget">
                            <ul class="list-socials">
                                <li><a href="#" target="_blank" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer2 col-md-3 col-sm-3 col-xs-12">
                    <div id="nav_menu-2" class="widget-footer widget_nav_menu">
                        <h3 class="title-sidebar-footer">Trợ giúp</h3>
                        <div class="menu-menu-tro-giup-container">
                            <ul id="menu-menu-tro-giup" class="menu">
                                <li class="menu-item"><a href="{{url('/')}}">Giới thiệu</a></li>
                                <li class="menu-item"><a href="{{url('/news')}}">Tin tức</a></li>
                                <li class="menu-item"><a href="{{url('/support')}}">Hỗ trợ khách hàng</a></li>
                                <li class="menu-item"><a href="{{url('/')}}">Hình thức thanh toán</a></li>
                                <li class="menu-item"><a href="{{url('/')}}">Hình thức vận chuyển</a></li>
                                <li class="menu-item"><a href="{{url('/contact')}}">Liên hệ</a></li>
                                <li class="menu-item"><a href="{{url('/account')}}">Tài khoản</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer3 col-md-3 col-sm-3 col-xs-12">
                    <div id="text-4" class="widget-footer widget_text">
                        <h3 class="title-sidebar-footer">Facebook</h3>
                        <div class="textwidget">
                            <div class="fb-page" data-href="https://www.facebook.com/covekila" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote class="fb-xfbml-parse-ignore" cite="https://www.facebook.com/covekila">
                                    <p><a href="https://www.facebook.com/covekila">Levantoi.vn</a></p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer4 col-md-3 col-sm-3 col-xs-12">
                    <div id="text-6" class="widget-footer widget_text">
                        <h3 class="title-sidebar-footer">Bản đồ</h3>
                        <div class="textwidget">
                            <div class="full_mobile"><a href="#" target="_blank"><img src="{{url('/vlnk')}}/images/maps.png" alt="" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_tags">
                <div id="woocommerce_product_tag_cloud-2" class="widget-footer woocommerce widget_product_tag_cloud">
                    <h3 class="title-sidebar-footer">Từ khóa thông dụng</h3>
                    <div class="tagcloud">
                    	<a href="#" class="tag-cloud-link" style="font-size: 22pt;">android TV Box</a>
                        <a href="#" class="tag-cloud-link" style="font-size: 22pt;" aria-label="Camera thể thao (2 sản phẩm)">Camera thể thao</a>
                        <a href="#" class="tag-cloud-link" style="font-size: 8pt;" aria-label="hdmi (1 sản phẩm)">hdmi</a>
                        <a href="#" class="tag-cloud-link" style="font-size: 22pt;" aria-label="Kiwibox (2 sản phẩm)">Kiwibox</a>
                        <a href="#" class="tag-cloud-link" style="font-size: 8pt;" aria-label="máy chiếu (1 sản phẩm)">máy chiếu</a>
                        <a href="#" class="tag-cloud-link" style="font-size: 8pt;" aria-label="ổ cắm (1 sản phẩm)">ổ cắm</a>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="footer_copyright_left">Copyright © 2019 ShopOnline - All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    <div class="box_overlay"></div>
    <!-- Start Quick Buttons By https://muatheme.com -->
    <div class='quick-call-button'></div>
    <div class="show_phone_mobile"><a href="tel:0354524503" title="Gọi ngay"><i class="fa  fa-phone"></i> 0354.524.503</a></div>
    <link rel='stylesheet' id='lv_css-css' href='{{url("/vlnk")}}/css/quick-call-button.css?ver=1.0.3' type='text/css' />
    <script type='text/javascript' src='{{url("/vlnk")}}/js/scripts.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery.bpopup.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/underscore.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/wp-util.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/add-to-cart-variation.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/devvn-quick-buy.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/devvn_main.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/add-to-cart.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/js.cookie.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/woocommerce.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/cart-fragments.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/drag-quick-call-button.js'></script>
    <a title="Lên đầu trang" href="#" class="scrollTo_top"><i class="fa fa-arrow-up"></i></a>
    <div class="cart_floating_right">
        <div class="cart_floating_right_button"><strong><i class="fa fa-shopping-basket"></i> Giỏ hàng</strong></div>
        <div class="cart_floating_right_content">
            <div class="cart_floating_right_title">
                <span><i class="fa fa-shopping-basket"></i> Giỏ hàng của bạn</span>
                <span><i class="fa fa-sign-out"></i> Thu nhỏ</span>
            </div>
            <div class="cart_floating_right_minicart woocommerce">
                <div class="floating_popup_cart">
                    <ul class="cart_list product_list_widget ">
                        <li class="empty">Chưa có sản phẩm trong giỏ hàng.</li>
                    </ul><!-- end product list -->
                </div>
            </div> 
        </div>
    </div>
  
    <script>
		    (function($) {
		        $(document).ready(function() {
		            $('.cart_floating_right_button').click(function() {
		                $('.cart_floating_right').addClass('open_float_cart');
		            });
		            $('.cart_floating_right_title').click(function() {
		                $('.cart_floating_right').removeClass('open_float_cart');
		            });
		        });
		    })(jQuery);
    </script>
</body>

</html>