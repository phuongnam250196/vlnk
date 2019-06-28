@extends('frontend.layout')
@section('title', $product->prod_name)
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div id="container" class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div id="content" role="main">
                        <nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Trang chủ</a>&nbsp;&#47;&nbsp;{{$product->prod_name}}</nav>
                        <div id="product-90" class="product type-product status-publish has-post-thumbnail first instock sale featured shipping-taxable purchasable product-type-simple">
                            <div class="row row-padding-15">
                                <div class="col-md-9 col-sm-12 col-xs-12 product-left">
                                    <div class="img-product clearfix">
                                        <span class="onsale">Giảm giá!</span>
                                        <div class="{{url('/vlnk')}}/images">
                                            <div id="product_slider" class="owl-carousel">
                                                <div class="item">
                                                    <a href="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804.jpg" itemprop="image" class="woocommerce-main-image zoom single-product-lightbox" title="" rel="single-gallery" data-rel="prettyPhoto[product-gallery]"><img width="600" height="600" src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-600x600.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="ipcam-qf004-4-20160517042804" /></a> 
                                                </div>
                                                <div class="item">
                                                    <a href="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804.jpg" class="zoom single-product-lightbox" title="" rel="single-gallery" data-rel="prettyPhoto[product-gallery]"><img width="600" height="600" src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-600x600.jpg" class="attachment-shop_single size-shop_single" /></a>
                                                </div>
                                                <div class="item">
                                                    <a href="{{url('/vlnk')}}/images/ipcam-qf004-8-20160517042804.jpg" class="zoom single-product-lightbox" title="" rel="single-gallery" data-rel="prettyPhoto[product-gallery]"><img width="600" height="600" src="{{url('/vlnk')}}/images/ipcam-qf004-8-20160517042804-600x600.jpg" class="attachment-shop_single size-shop_single" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="{{url('/vlnk')}}/images/ipcam-qf004-18-20160517042804.jpg" class="zoom single-product-lightbox" title="" rel="single-gallery" data-rel="prettyPhoto[product-gallery]"><img width="600" height="600" src="{{url('/vlnk')}}/images/ipcam-qf004-18-20160517042804-600x600.jpg" class="attachment-shop_single size-shop_single" /></a>
                                                </div>
                                                <div class="item">
                                                    <a href="{{url('/vlnk')}}/images/ipcam-qf004-14-20160517042804.jpg" class="zoom single-product-lightbox" title="" rel="single-gallery" data-rel="prettyPhoto[product-gallery]"><img width="600" height="600" src="{{url('/vlnk')}}/images/ipcam-qf004-14-20160517042804-600x600.jpg" class="attachment-shop_single size-shop_single" /></a>
                                                </div>
                                                <div class="item">
                                                    <a href="{{url('/vlnk')}}/images/ipcam-qf004-10-20160517042804.jpg" class="zoom single-product-lightbox" title="" rel="single-gallery" data-rel="prettyPhoto[product-gallery]"><img width="600" height="600" src="{{url('/vlnk')}}/images/ipcam-qf004-10-20160517042804-600x600.jpg" class="attachment-shop_single size-shop_single" /></a>
                                                </div>
                                            </div>
                                            <div id="product_thumbnails" class="owl-carousel">
                                                <div class="item" data-id="1">
                                                    <img width="100" height="100" src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-100x100.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" />
                                                </div>
                                                <div class="item" data-id="2">
                                                    <img width="100" height="100" src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-600x600.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" />
                                                </div>
                                                <div class="item" data-id="3">
                                                    <img width="100" height="100" src="{{url('/vlnk')}}/images/ipcam-qf004-8-20160517042804-600x600.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" />
                                                </div>
                                                <div class="item" data-id="4">
                                                    <img width="100" height="100" src="{{url('/vlnk')}}/images/ipcam-qf004-18-20160517042804-600x600.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" />
                                                </div>
                                                <div class="item" data-id="5">
                                                    <img width="100" height="100" src="{{url('/vlnk')}}/images/ipcam-qf004-14-20160517042804-600x600.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" />
                                                </div>
                                                <div class="item" data-id="6">
                                                    <img width="100" height="100" src="{{url('/vlnk')}}/images/ipcam-qf004-10-20160517042804-600x600.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" />
                                                </div>
                                            </div>
                                            <div class="thiet-bi">
                                                <p><img class="alignnone size-full wp-image-66" src="{{url('/vlnk')}}/images/home_07.png" alt="" width="100%" /></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary entry-summary">
                                        <h1 class="product_title entry-title">{{$product->prod_name}}</h1>
                                        <p class="price"><del><span class="woocommerce-Price-amount amount">{{number_format($product->prod_price,0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{number_format($product->prod_price,0,'.','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></p>
                                        <div itemprop="description" class="tinymce">
                                            {!! $product->prod_short_description !!}
                                        </div>
                                        <form class="cart" method="post" enctype='multipart/form-data'>
                                            <div class="quantity">
                                                <label class="screen-reader-text" for="quantity_5c27315a7cba5">Số lượng</label>
                                                <input type="number" id="quantity_5c27315a7cba5" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                                            </div>
                                            <input type="hidden" name="add-to-cart" value="90" />
                                            <button type="submit" class="single_add_to_cart_button button alt" id="single_addtocart">Thêm vào giỏ</button>
                                            <a title="Hướng dẫn mua hàng" href="{{url('support')}}" class="button huong-dan-mua-hang"><i class="fa fa-reply" aria-hidden="true"></i> Hướng dẫn mua hàng</a>
                                        </form>
                                        <a href="javascript:void(0);" class="devvn_buy_now devvn_buy_now_style" data-id="90">
                                            <strong>Mua ngay</strong>
                                            <span>Gọi điện xác nhận và giao hàng tận nơi</span>
                                        </a>
                                        <div class="product_meta">
                                            <span class="sku_wrapper">Mã: <span class="sku">QF004 HD WIFI</span></span>
                                            <span class="posted_in">Danh mục: 
                                                @foreach(listCate() as $cate)
                                                    <a href="{{url('/category/'.$cate->cate_slug)}}" rel="tag">{{$cate->cate_name}}</a>,
                                                @endforeach
                                             </span>
                                        </div>
                                        <div class="contact-detail">
                                            <ul>
                                                <li><span class="fa fa-phone"></span><strong>012.5222.5111</strong></li>
                                                <li><span class="fa fa-phone"></span><strong>0888.090.898</strong></li>
                                                <li><span class="fa fa-envelope"></span>tech360.com.vn@gmail.com</li>
                                            </ul>
                                        </div>
                                        <ul class="social_list">
                                            <li class="facebook_like">
                                                <div class="fb-like" data-href="/san-pham/ip-camera-bao-dong-chong-trom-qf004-hd-wifi/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                            </li>
                                            <li class="google_shared">
                                                <div class="g-plusone" data-size="medium"></div>
                                            </li>
                                        </ul>
                                    </div><!-- .summary -->
                                    <div class="row row-padding-0">
                                        <div class="col-md-12 col-sm-12 col-xs-12 product-infor-left">
                                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                                <ul class="tabs wc-tabs">
                                                    <li class="description_tab">
                                                        <a href="#tab-description">Mô tả</a>
                                                    </li>
                                                </ul>
                                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">
                                                    <div class="section_cvp_title margin-b-15">
                                                        <h2>Mô tả sản phẩm</h2>
                                                    </div>
                                                    <div class="tinymce">
                                                        {!! $product->prod_content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-padding-0">
                                       <div class="col-sm-12 col-xs-12 product-review-left">
                                            <div class="cart_after_content">
                                                <div class="cart_after_content_title">
                                                    <h2>Mua sản phẩm này</h2>
                                                </div>
                                                <div class="row row-padding-15">
                                                    <div class="col-xs-12">
                                                        <h3>{{$product->prod_name}}</h3>
                                                        <form class="cart" method="post" enctype='multipart/form-data'>
                                                            <div class="quantity">
                                                                <label class="screen-reader-text" for="quantity_5c27315a7eac9">Số lượng</label>
                                                                <input type="number" id="quantity_5c27315a7eac9" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                                                            </div>
                                                            <input type="hidden" name="add-to-cart" value="90" />
                                                            <button type="submit" class="single_add_to_cart_button button alt" id="single_addtocart">Thêm vào giỏ</button>
                                                            <a title="Hướng dẫn mua hàng" href="{{url('/support')}}" class="button huong-dan-mua-hang"><i class="fa fa-reply" aria-hidden="true"></i> Hướng dẫn mua hàng</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="related products">
                                        <h2>Sản phẩm tương tự</h2>
                                        <ul class="products columns-4">
                                            @foreach(listProducts() as $key=>$prod)
                                            @if($key<4)
                                                <li class="product">
                                                <div class="shop_loop_box">
                                                    <a href="{{url('product/'.$prod->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <span class="onsale">Giảm giá!</span>
                                                        <img src="{{url(''.$prod->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />
                                                    </a>
                                                    <a rel="nofollow" href="/san-pham/ip-camera-bao-dong-chong-trom-qf004-hd-wifi/?add-to-cart=207" data-quantity="1" data-product_id="207" data-product_sku="SJCAM SJ4000" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="tech_addtocart_207">Thêm vào giỏ</a> 
                                                </div>
                                                <a href="{{url('product/'.$prod->prod_slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2 class="woocommerce-loop-product__title">{{$prod->prod_name}}</h2>
                                                </a>
                                                <span class="price"><del><span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0, '.', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{number_format($prod->prod_price, 0, '.', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                                <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </section>
                                    <div class="row row-padding-0">
                                        <div class="col-sm-6 col-xs-12 product-review-left">
                                            <div class="section_cvp_title margin-b-15">
                                                <h2>Đánh giá sản phẩm</h2>
                                            </div>
                                            <div id="reviews" class="woocommerce-Reviews">
                                                <div id="comments">
                                                    <h2 class="woocommerce-Reviews-title">Đánh giá</h2>
                                                    <p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>
                                                </div>
                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div id="respond" class="comment-respond">
                                                            <span id="reply-title" class="comment-reply-title">Hãy là người đầu tiên nhận xét &ldquo;IP CAMERA BÁO ĐỘNG CHỐNG TRỘM QF004 HD WIFI&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/san-pham/ip-camera-bao-dong-chong-trom-qf004-hd-wifi/#respond" style="display:none;">Hủy</a></small></span>
                                                            <form action="/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                                                <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                                                                <div class="comment-form-rating"><label for="rating">Đánh giá của bạn</label><select name="rating" id="rating" aria-required="true" required>
                                                                        <option value="">Xếp hạng&hellip;</option>
                                                                        <option value="5">Rất tốt</option>
                                                                        <option value="4">Tốt</option>
                                                                        <option value="3">Trung bình</option>
                                                                        <option value="2">Không tệ</option>
                                                                        <option value="1">Rất tệ</option>
                                                                    </select></div>
                                                                <p class="comment-form-comment"><label for="comment">Nhận xét của bạn&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p>
                                                                <p class="comment-form-author"><label for="author">Tên&nbsp;<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required /></p>
                                                                <p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
                                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi" /> <input type='hidden' name='comment_post_ID' value='90' id='comment_post_ID' />
                                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                                </p>
                                                            </form>
                                                        </div><!-- #respond -->
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 product-review-right">
                                            <div class="section_cvp_title margin-b-15">
                                                <h2>Bình luận trên Facebook</h2>
                                            </div>
                                            <div class="fb-comments" data-href="/san-pham/ip-camera-bao-dong-chong-trom-qf004-hd-wifi/" data-numposts="10" data-order-by="time" data-width="100%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12 product-right">
                                    <h3 class="title-sidebar">Chính sách - Hỗ trợ</h3>
                                    <div class="chinh_sach_cua_shop">
                                        <ul>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-1.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>GIAO HÀNG TRÊN TOÀN QUỐC</p>
                                                </div>
                                            </li>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-2.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>ĐỔI TRẢ TRONG 15 NGÀY NẾU LỖI KỸ THUẬT</p>
                                                </div>
                                            </li>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-3.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>THANH TOÁN TẠI NHÀ HOẶC QUA THẺ</p>
                                                </div>
                                            </li>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-4.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>TỔNG CSKH 8H30 - 18H00<br />
                                                        <strong>1900 0120</strong></p>
                                                </div>
                                            </li>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-4.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>KINH DOANH<br />
                                                        <strong>012.5222.5111</strong><br />
                                                        <strong>0888.090.898</strong></p>
                                                </div>
                                            </li>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-4.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>KỸ THUẬT<br />
                                                        <strong>012.5222.5111</strong></p>
                                                </div>
                                            </li>
                                            <li class="has-icon">
                                                <div class="chinhsach_icon"><img width="42" height="42" src="{{url('/vlnk')}}/images/icon-policy-5.png" class="attachment-full size-full" alt="" /></div>
                                                <div class="chinhsach_content">
                                                    <p>LẮP ĐẶT TẠI CÁC THÀNH PHỐ LỚN</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
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
                                </div>
                            </div>
                        </div><!-- #product-90 -->
                        <div class="devvn-popup-quickbuy" data-popup="popup-quickbuy" id="popup_content_90">
                            <div class="devvn-popup-inner">
                                <div class="devvn-popup-title">
                                    <span>Đặt mua IP CAMERA BÁO ĐỘNG CHỐNG TRỘM QF004 HD WIFI</span>
                                    <button type="button" class="devvn-popup-close"></button>
                                </div>
                                <div class="devvn-popup-content devvn-popup-content_90 ">
                                    <div class="devvn-popup-content-left ">
                                        <div class="devvn-popup-prod">
                                            <div class="devvn-popup-img"><img src="{{url('/vlnk')}}/images/ipcam-qf004-4-20160517042804-100x100.jpg" alt="" /></div>
                                            <div class="devvn-popup-info">
                                                <span class="devvn_title">IP CAMERA BÁO ĐỘNG CHỐNG TRỘM QF004 HD WIFI</span>
                                                <span class="devvn_price"><del><span class="woocommerce-Price-amount amount">1.590.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">1.300.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span> </div>
                                        </div>
                                        <div class="devvn_prod_variable" data-simpleprice="1300000">
                                            <form class="cart" method="post" enctype='multipart/form-data'>
                                                <div class="quantity">
                                                    <label class="screen-reader-text" for="quantity_5c27315a9318b">Số lượng</label>
                                                    <input type="number" id="quantity_5c27315a9318b" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                                                </div>
                                                <input type="hidden" name="add-to-cart" value="90" />
                                                <button type="submit" class="single_add_to_cart_button button alt" id="single_addtocart">Thêm vào giỏ</button>
                                                <a title="Hướng dẫn mua hàng" href="/huong-dan-mua-hang/" class="button huong-dan-mua-hang"><i class="fa fa-reply" aria-hidden="true"></i> Hướng dẫn mua hàng</a>
                                            </form>
                                        </div>
                                        Bạn vui lòng nhập đúng số điện thoại để chúng tôi sẽ gọi xác nhận đơn hàng trước khi giao hàng. Xin cảm ơn!
                                    </div>
                                    <div class="devvn-popup-content-right">
                                        <form class="devvn_cusstom_info" id="devvn_cusstom_info" method="post">
                                            <div class="popup-customer-info">
                                                <div class="popup-customer-info-title">Thông tin người mua</div>
                                                <div class="popup-customer-info-group popup-customer-info-radio">
                                                    <label>
                                                        <input type="radio" name="customer-gender" value="1" checked />
                                                        <span>Anh</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="customer-gender" value="2" />
                                                        <span>Chị</span>
                                                    </label>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-2">
                                                        <input type="text" class="customer-name" name="customer-name" placeholder="Họ và tên">
                                                    </div>
                                                    <div class="popup-customer-info-item-2">
                                                        <input type="text" class="customer-phone" name="customer-phone" placeholder="Số điện thoại">
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1">
                                                        <input type="text" class="customer-email" name="customer-email" data-required="false" placeholder="Địa chỉ email (Không bắt buộc)">
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-3-13">
                                                        <select class="customer-location" name="customer-location" id="devvn_city">
                                                            <option value="">Tỉnh thành</option>
                                                            <option value="01">Hà Nội</option>
                                                            <option value="02">Hà Giang</option>
                                                            <option value="04">Cao Bằng</option>
                                                            <option value="06">Bắc Kạn</option>
                                                            <option value="08">Tuyên Quang</option>
                                                            <option value="10">Lào Cai</option>
                                                            <option value="11">Điện Biên</option>
                                                            <option value="12">Lai Châu</option>
                                                            <option value="14">Sơn La</option>
                                                            <option value="15">Yên Bái</option>
                                                            <option value="17">Hoà Bình</option>
                                                            <option value="19">Thái Nguyên</option>
                                                            <option value="20">Lạng Sơn</option>
                                                            <option value="22">Quảng Ninh</option>
                                                            <option value="24">Bắc Giang</option>
                                                            <option value="25">Phú Thọ</option>
                                                            <option value="26">Vĩnh Phúc</option>
                                                            <option value="27">Bắc Ninh</option>
                                                            <option value="30">Hải Dương</option>
                                                            <option value="31">Hải Phòng</option>
                                                            <option value="33">Hưng Yên</option>
                                                            <option value="34">Thái Bình</option>
                                                            <option value="35">Hà Nam</option>
                                                            <option value="36">Nam Định</option>
                                                            <option value="37">Ninh Bình</option>
                                                            <option value="38">Thanh Hóa</option>
                                                            <option value="40">Nghệ An</option>
                                                            <option value="42">Hà Tĩnh</option>
                                                            <option value="44">Quảng Bình</option>
                                                            <option value="45">Quảng Trị</option>
                                                            <option value="46">Thừa Thiên Huế</option>
                                                            <option value="48">Đà Nẵng</option>
                                                            <option value="49">Quảng Nam</option>
                                                            <option value="51">Quảng Ngãi</option>
                                                            <option value="52">Bình Định</option>
                                                            <option value="54">Phú Yên</option>
                                                            <option value="56">Khánh Hòa</option>
                                                            <option value="58">Ninh Thuận</option>
                                                            <option value="60">Bình Thuận</option>
                                                            <option value="62">Kon Tum</option>
                                                            <option value="64">Gia Lai</option>
                                                            <option value="66">Đắk Lắk</option>
                                                            <option value="67">Đắk Nông</option>
                                                            <option value="68">Lâm Đồng</option>
                                                            <option value="70">Bình Phước</option>
                                                            <option value="72">Tây Ninh</option>
                                                            <option value="74">Bình Dương</option>
                                                            <option value="75">Đồng Nai</option>
                                                            <option value="77">Bà Rịa - Vũng Tàu</option>
                                                            <option value="79" selected='selected'>Hồ Chí Minh</option>
                                                            <option value="80">Long An</option>
                                                            <option value="82">Tiền Giang</option>
                                                            <option value="83">Bến Tre</option>
                                                            <option value="84">Trà Vinh</option>
                                                            <option value="86">Vĩnh Long</option>
                                                            <option value="87">Đồng Tháp</option>
                                                            <option value="89">An Giang</option>
                                                            <option value="91">Kiên Giang</option>
                                                            <option value="92">Cần Thơ</option>
                                                            <option value="93">Hậu Giang</option>
                                                            <option value="94">Sóc Trăng</option>
                                                            <option value="95">Bạc Liêu</option>
                                                            <option value="96">Cà Mau</option>
                                                        </select>
                                                    </div>
                                                    <div class="popup-customer-info-item-3-23">
                                                        <select class="customer-quan" name="customer-quan" id="devvn_district">
                                                            <option value="">Quận/huyện</option>
                                                        </select>
                                                        <input name="require_district" id="require_district" type="hidden" value="0" />
                                                    </div>
                                                    <div class="popup-customer-info-item-3-33">
                                                        <select class="customer-xa" name="customer-xa" id="devvn_ward">
                                                            <option value="">Xã/phường</option>
                                                        </select>
                                                        <input name="require_village" id="require_village" type="hidden" value="0" />
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1">
                                                        <input type="text" class="customer-address" name="customer-address" placeholder="Số nhà, tên đường (Không bắt buộc)" />
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1">
                                                        <textarea class="order-note" name="order-note" placeholder="Ghi chú đơn hàng (Không bắt buộc)"></textarea>
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1 popup_quickbuy_shipping">
                                                        <div class="popup_quickbuy_shipping_title">Phí vận chuyển:</div>
                                                        <div class="popup_quickbuy_shipping_calc"></div>
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1 popup_quickbuy_shipping">
                                                        <div class="popup_quickbuy_shipping_title">Tổng:</div>
                                                        <div class="popup_quickbuy_total_calc"></div>
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1">
                                                        <button type="button" class="devvn-order-btn">Đặt hàng ngay</button>
                                                    </div>
                                                </div>
                                                <div class="popup-customer-info-group">
                                                    <div class="popup-customer-info-item-1">
                                                        <div class="devvn_quickbuy_mess"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="prod_id" id="prod_id" value="90">
                                            <input type="hidden" name="prod_nonce" id="prod_nonce" value="">
                                            <input type="hidden" name="enable_ship" id="enable_ship" value="1">
                                            <input name="require_address" id="require_address" type="hidden" value="0" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        div#container {
            width: 100%;
        }
        @media (min-width: 768px)
        {
            .col-sm-push-3 {
                left: inherit;
            }
        }
    </style>
@endsection