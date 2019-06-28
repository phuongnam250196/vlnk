@extends('frontend.layout')
@section('title', 'Giỏ hàng')
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-xs-12">
                    <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <span class="breadcrumb_last" aria-current="page">Giỏ hàng</span></span></span></div>
                    <div class="page_content">
                        <h1 class="title-page">Giỏ hàng</h1>
                        <div class="tinymce">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-cart-form" action="https://tech360.vn/gio-hang" method="post">
                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product-quantity">Số lượng</th>
                                                <th class="product-subtotal">Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-remove">
                                                    <a href="https://tech360.vn/gio-hang?remove_item=f968fdc88852a4a3a27a81fe3f57bfc5&amp;_wpnonce=d957a5bc85" class="remove" aria-label="Xóa sản phẩm này" data-product_id="5259" data-product_sku="">×</a> </td>
                                                <td class="product-thumbnail">
                                                    <a href="https://tech360.vn/action-camera-sjcam-sj8-plus"><img width="300" height="300" src="https://tech360.vn/wp-content/uploads/2016/12/SJ8-pro-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://tech360.vn/wp-content/uploads/2016/12/SJ8-pro-1-300x300.jpg 300w, https://tech360.vn/wp-content/uploads/2016/12/SJ8-pro-1-100x100.jpg 100w, https://tech360.vn/wp-content/uploads/2016/12/SJ8-pro-1.jpg 600w, https://tech360.vn/wp-content/uploads/2016/12/SJ8-pro-1-150x150.jpg 150w" sizes="(max-width: 300px) 100vw, 300px"></a> </td>
                                                <td class="product-name" data-title="Sản phẩm">
                                                    <a href="https://tech360.vn/action-camera-sjcam-sj8-plus">Action camera SJACM SJ8 Plus 4K Wifi</a> </td>
                                                <td class="product-price" data-title="Giá">
                                                    <span class="woocommerce-Price-amount amount">4.149.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>
                                                <td class="product-quantity" data-title="Số lượng">
                                                    <div class="quantity buttons_added"><input type="button" value="-" class="minus">
                                                        <label class="screen-reader-text" for="quantity_5d10d4eb179cb">Action camera SJACM SJ8 Plus 4K Wifi số lượng</label>
                                                        <input type="number" id="quantity_5d10d4eb179cb" class="input-text qty text" step="1" min="0" max="" name="cart[f968fdc88852a4a3a27a81fe3f57bfc5][qty]" value="1" title="SL" size="4" inputmode="numeric">
                                                        <input type="button" value="+" class="plus"></div>
                                                </td>
                                                <td class="product-subtotal" data-title="Tổng">
                                                    <span class="woocommerce-Price-amount amount">4.149.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>
                                            </tr>
                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-remove">
                                                    <a href="https://tech360.vn/gio-hang?remove_item=34e157766f31db3d2099831d348a7933&amp;_wpnonce=d957a5bc85" class="remove" aria-label="Xóa sản phẩm này" data-product_id="6537" data-product_sku="">×</a> </td>
                                                <td class="product-thumbnail">
                                                    <a href="https://tech360.vn/android-tv-box-sunvell-t95s1"><img width="300" height="300" src="https://tech360.vn/wp-content/uploads/2018/07/android-tivi-box-t95-s1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://tech360.vn/wp-content/uploads/2018/07/android-tivi-box-t95-s1-300x300.jpg 300w, https://tech360.vn/wp-content/uploads/2018/07/android-tivi-box-t95-s1-150x150.jpg 150w, https://tech360.vn/wp-content/uploads/2018/07/android-tivi-box-t95-s1-600x600.jpg 600w, https://tech360.vn/wp-content/uploads/2018/07/android-tivi-box-t95-s1-100x100.jpg 100w, https://tech360.vn/wp-content/uploads/2018/07/android-tivi-box-t95-s1.jpg 800w" sizes="(max-width: 300px) 100vw, 300px"></a> </td>
                                                <td class="product-name" data-title="Sản phẩm">
                                                    <a href="https://tech360.vn/android-tv-box-sunvell-t95s1">Android Tv Box Sunvell T95 S1</a> </td>
                                                <td class="product-price" data-title="Giá">
                                                    <span class="woocommerce-Price-amount amount">1.250.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>
                                                <td class="product-quantity" data-title="Số lượng">
                                                    <div class="quantity buttons_added"><input type="button" value="-" class="minus">
                                                        <label class="screen-reader-text" for="quantity_5d10d4eb18143">Android Tv Box Sunvell T95 S1 số lượng</label>
                                                        <input type="number" id="quantity_5d10d4eb18143" class="input-text qty text" step="1" min="0" max="" name="cart[34e157766f31db3d2099831d348a7933][qty]" value="1" title="SL" size="4" inputmode="numeric">
                                                        <input type="button" value="+" class="plus"></div>
                                                </td>
                                                <td class="product-subtotal" data-title="Tổng">
                                                    <span class="woocommerce-Price-amount amount">1.250.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="actions">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Ưu đãi:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi"> <button type="submit" class="button" name="apply_coupon" value="Áp dụng">Áp dụng</button>
                                                    </div>
                                                    <button type="submit" class="button" name="update_cart" value="Cập nhật giỏ hàng" disabled="">Cập nhật giỏ hàng</button>
                                                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="d957a5bc85"><input type="hidden" name="_wp_http_referer" value="/gio-hang">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>Tổng số lượng</h2>
                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng phụ</th>
                                                    <td data-title="Tổng phụ"><span class="woocommerce-Price-amount amount">5.399.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount">5.399.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></strong> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="https://tech360.vn/thanh-toan" class="checkout-button button alt wc-forward">
                                                Tiến hành thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection