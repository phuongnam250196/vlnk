<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - vlnk</title>
    <meta name="description" content="@yield('description')"/>
    <link rel="icon" href="{{url('/vlnk')}}/images/logo.png" sizes="192x192" />
    <link rel="canonical" href="@yield('url')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="@yield('author')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:site_name" content="@yield('sitename')" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="550" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:image" content="@yield('image')" />
    <meta name="twitter:url" content="@yield('url')" />


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
    <style>
        /* #e03232 */
        .menu_header_wrap,  h3.title-sidebar, .devvn_mega_menu_title h2:before, .devvn_mega_menu_image h2:before, .cart_floating_right_button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .show_phone_mobile, .section_cvp_title h3, .section_cvp_title h2, .woocommerce span.onsale, .woocommerce ul.products li.product .onsale, .paginate_links .current, .paginate_links .page-numbers:hover, .nav-links a:hover, a.read_more:hover, .cart_after_content_title h2, a.checkout-button.button.alt.wc-forward, .woocommerce a.remove:hover, .cart_floating_right_title {
            background: {{infoOther()->color}};
        }
        .devvn_sub_mega_content, ul.devvn_sub_menu {
            border-left: 5px solid {{infoOther()->color}};
        }
        .search_header button#searchsubmit, .search_header button#searchsubmit:hover, form#searchform #searchsubmit:hover, .wpcf7-form-control.wpcf7-submit, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
            background: {{infoOther()->color}};
            border: 1px solid {{infoOther()->color}};
        }
        .scrollTo_top, .scrollTo_top:hover {
            background: {{infoOther()->color}} !important;
        }
        .textwidget span, .woocommerce a.remove {
            color: {{infoOther()->color}} !important;
        }
        .cart_after_content, .cart_floating_right_content {
            border: 1px solid {{infoOther()->color}};
        }
        .section_cvp_title {
            border-bottom: 2px solid {{infoOther()->color}};
        }
        .section_cvp_title h3:after {
            border-left: 30px solid {{infoOther()->color}};
        }
        .woocommerce ul.products li.product .price, .widget_recent_entries_svl ul li a:hover, .woocommerce ul.products li.product a:hover, .widget.block-sidebar > ul li a:hover, h1.title-page, h2.post-title a:hover, ul.news_list li a:hover, .widget > ul li a:hover, .relatedcat a:hover, a.cart-contents:hover, .tinymce a, ul.devvn_mega_menu_ul > li:hover > a, .woocommerce div.product p.price, .woocommerce div.product span.price, .chinhsach_content strong, .contact-detail ul li span, .related.products h2, .up-sells.upsells.products h2, .product_meta .sku, .product_meta a, .cart_totals h2, div#customer_details h3, h3#order_review_heading {
            color: {{infoOther()->color}};
        }
        div#reviews div#comments {
            border-bottom: 1px solid {{infoOther()->color}};
        }
        h1.page-title {
            color: {{infoOther()->color}};
            border-bottom: 2px solid {{infoOther()->color}};
        }
        .woocommerce-info {
            border-top-color: {{infoOther()->color}};
        }
    </style>
</head>

<body class="home woocommerce">
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
                <div class="top_header_left"><i class="fa fa-envelope-open" aria-hidden="true"></i> {{infoOther()->email}}</div>
                <div class="top_header_middle"><i class="fa fa-phone-square" aria-hidden="true"></i> {{chunk_split(infoOther()->phone, 4, '.')}}</div>
                <div class="top_header_right"><i class="fa fa-facebook-official" aria-hidden="true"></i> fb.com/phuongnam</div>
            </div>
        </div>
        <div class="main_header">
            <div class="container">
                <h2 class="logo">
                    <a href="{{url('/')}}" title="Công nghệ cho cuộc sống"><img src="{{url('/'.infoOther()->logo)}}" /></a>
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
                                @foreach(listCatePost() as $key=>$cate)
                                    <li class="menu-item"><a class="category_id" data-id="{{$cate->id}}" href="{{url('/news/category/'.$cate->cate_slug)}}">{{$cate->cate_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li id="menu-item-183" class="menu-item @if(Request::is('videos') || Request::is('videos/*')) current_page_ancestor @endif"><a href="{{url('/videos')}}">Videos</a>
                            <ul class="sub-menu">
                                @foreach(listCateVideo() as $key=>$cate)
                                    <li class="menu-item"><a class="category_id" data-id="{{$cate->id}}" href="{{url('/videos/category/'.$cate->cate_slug)}}">{{$cate->cate_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
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
                                {{infoOther()->address}}<br />
                                Điện thoại: {{chunk_split(infoOther()->phone, 4, '.')}}<br />
                                Hotline: {{chunk_split(infoOther()->phone, 4, '.')}}<br />
                                <b><span style="color: red">EMAIL<b></b></span><b><br />
                                        {{infoOther()->email}}</b></b></p>
                        </div>
                    </div>
                    <div id="text-5" class="widget-footer widget_text">
                        <h3 class="title-sidebar-footer">Theo dõi SHOP</h3>
                        <div class="textwidget">
                            <ul class="list-socials">
                                <li><a href="{{infoOther()->fanpage_id}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{infoOther()->twitter_id}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="{{infoOther()->skype_id}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
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
                                <li class="menu-item"><a href="{{url('/support')}}">Hình thức thanh toán</a></li>
                                <li class="menu-item"><a href="{{url('/support')}}">Hình thức vận chuyển</a></li>
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
                        @foreach(listCate() as $key=>$cate)
                    	   <a class="category_id" data-id="{{$cate->id}}" href="{{url('/category/'.$cate->cate_slug)}}" class="tag-cloud-link" style="font-size: 22pt;">{{$cate->cate_name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="footer_copyright_left">{{infoOther()->footer_content}}</div>
            </div>
        </div>
    </footer>
    <div class="box_overlay"></div>
    <!-- Start Quick Buttons By https://muatheme.com -->
    <div class='quick-call-button'></div>
    <div class="show_phone_mobile"><a href="tel:{{infoOther()->phone}}" title="Gọi ngay"><i class="fa  fa-phone"></i> {{phoneNumber(infoOther()->phone)}}</a></div>
    <link rel='stylesheet' id='lv_css-css' href='{{url("/vlnk")}}/css/quick-call-button.css?ver=1.0.3' type='text/css' />
    <script type='text/javascript' src='{{url("/vlnk")}}/js/scripts.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/jquery.bpopup.min.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/devvn-quick-buy.js'></script>
    <script type='text/javascript' src='{{url("/vlnk")}}/js/devvn_main.js'></script>
    {{-- <script type='text/javascript' src='{{url("/vlnk")}}/js/js.cookie.min.js'></script> --}}
    {{-- <script type='text/javascript' src='{{url("/vlnk")}}/js/woocommerce.min.js'></script> --}}
    {{-- <script type='text/javascript' src='{{url("/vlnk")}}/js/drag-quick-call-button.js'></script> --}}
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
    <script>
        (function($) {
            $('#stars li').on('mouseover', function(){
                var onStar = parseInt($(this).data('value'), 10);   
                $(this).parent().children('li.star').each(function(e){
                    if (e < onStar) {
                        $(this).addClass('hover');
                    }
                    else {
                        $(this).removeClass('hover');
                    }
                });
            }).on('mouseout', function(){
                $(this).parent().children('li.star').each(function(e){
                    $(this).removeClass('hover');
                });
            });
          
            $('#stars li').on('click', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');    
                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }
                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }
                
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                for(i=1;i<6;i++) {
                    if(ratingValue == i) {
                        $('#rating option[value='+i+']').attr('selected', 'selected');
                    } else {
                        $('#rating option[value='+i+']').removeAttr('selected');
                    }
                }
            });  
        })(jQuery);
    </script>
    <script>
        (function($) {
            $(document).ready(function() {
                viewClick('product_id', 'product');
                viewClick('category_id', 'category');
                viewClick('news_id', 'news');
                viewClick('videos_id', 'videos');
            });
            function viewClick(nameClass, type) {
                $('.'+nameClass).click(function() {
                    var id = $(this).data('id');
                    addView(id, type);
                });
            }
            function addView(id, type) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{url('view')}}",
                    type: 'POST',
                    data: {
                        other_id:id,
                        'type':type
                    },
                    success: function(data) {
                        console.log(data)
                        console.log('thanh cong')
                    }
                });
            }
       })(jQuery);
    </script>          
    
</body>

</html>