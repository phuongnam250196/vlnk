@extends('frontend.layout')
@section('title', 'Thanh toán')
@section('description', 'Thực hiện và hoàn thành theo các bước để đặt hàng.')
@section('image', url('/'.infoOther()->logo))
@section('url', url('/pay'))
@section('sitename', $_SERVER['REQUEST_URI'])
@section('keywords', 'pay')
@section('author', $_SERVER['HTTP_HOST'])
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-xs-12">
                    <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <span class="breadcrumb_last" aria-current="page">Thanh toán</span></span></span></div>
                    <div class="page_content">
                        <h1 class="title-page">Thanh toán</h1>
                        <div class="tinymce">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce-info">
                                    Bạn đã có tài khoản? <a href="#" class="showlogin">Ấn vào đây để đăng nhập</a>. Nếu bạn chưa có tài khoản, bạn hãy điền thông tin bên dưới và tạo tài khoản mới. </div>
                                <form class="woocommerce-form woocommerce-form-login login" method="post" style="display:none;">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                    <p class="form-row form-row-first">
                                        <label for="username">Tên đăng nhập hoặc email&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="input-text" name="username" id="username" autocomplete="username">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                                        <input class="input-text" type="password" name="password" id="password" autocomplete="current-password">
                                    </p>
                                    <div class="clear"></div>
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Ghi nhớ mật khẩu</span>
                                        </label>
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="f1158313bb"><input type="hidden" name="_wp_http_referer" value="/thanh-toan"> <input type="hidden" name="redirect" value="https://tech360.vn/thanh-toan">
                                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
                                    </p>
                                    <p class="lost_password">
                                        <a href="https://tech360.vn/tai-khoan/lost-password/">Quên mật khẩu?</a>
                                    </p>
                                    <div class="clear"></div>
                                </form>
                                <div class="woocommerce-info">
                                    Bạn có mã ưu đãi? <a href="#" class="showcoupon">Ấn vào đây để nhập mã</a> </div>
                                <form class="checkout_coupon" method="post" style="display:none">
                                    <p class="form-row form-row-first">
                                        <input type="text" name="coupon_code" class="input-text" placeholder="Mã ưu đãi" id="coupon_code" value="">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <input type="submit" class="button" name="apply_coupon" id="button_appdung_makhuyenmai" value="Apply Coupon">
                                    </p>
                                    <div class="clear"></div>
                                </form>
                                <div class="woocommerce-notices-wrapper"></div>
                                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="https://tech360.vn/thanh-toan" enctype="multipart/form-data" novalidate="novalidate">
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-total">Tổng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Action camera SJACM SJ8 Plus 4K Wifi&nbsp; <strong class="product-quantity">× 1</strong> </td>
                                                    <td class="product-total">
                                                        <span class="woocommerce-Price-amount amount">4.149.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Android Tv Box Sunvell T95 S1&nbsp; <strong class="product-quantity">× 1</strong> </td>
                                                    <td class="product-total">
                                                        <span class="woocommerce-Price-amount amount">1.250.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng phụ</th>
                                                    <td><span class="woocommerce-Price-amount amount">5.399.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount">5.399.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></strong> </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Thông tin thanh toán</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required" id="billing_last_name_field" data-priority=""><label for="billing_last_name" class="">Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Nhập đầy đủ họ và tên của bạn" value=""></span></p>
                                                    <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Ví dụ: Số 18 Ngõ 86 Phú Kiều, Bắc Từ Liêm, Hà Nội" value="" autocomplete="address-line1"></span></p>
                                                    <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></span></p>
                                                    <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Địa chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email username"></span></p>
                                                </div>
                                            </div>
                                            <div class="woocommerce-account-fields">
                                                <p class="form-row form-row-wide create-account woocommerce-validated">
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> <span>Tạo tài khoản mới?</span>
                                                    </label>
                                                </p>
                                                <div class="create-account" style="display: none;">
                                                    <p class="form-row validate-required" id="account_password_field" data-priority=""><label for="account_password" class="">Tạo mật khẩu của tài khoản&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="password" class="input-text " name="account_password" id="account_password" placeholder="Mật khẩu" value=""></span></p>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="woocommerce-shipping-fields">
                                            </div>
                                            <div class="woocommerce-additional-fields">
                                                <h3>Thông tin bổ sung</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5"></textarea></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
                                                <label for="payment_method_cod">
                                                    Trả tiền mặt khi nhận hàng </label>
                                            </li>
                                            <li class="wc_payment_method payment_method_vnpay">
                                                <input id="payment_method_vnpay" type="radio" class="input-radio" name="payment_method" value="vnpay" data-order_button_text="">
                                                <label for="payment_method_vnpay">
                                                    Thanh toán qua VNPAY </label>
                                                <div class="payment_box payment_method_vnpay" style="display:none;">
                                                    <p>Thanh toán trực tuyến qua VNPAY</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <noscript>
                                                Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so. <br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật tổng</button>
                                            </noscript>
                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                <div class="woocommerce-privacy-policy-text"></div>
                                            </div>
                                            <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                            <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="5c8a01067a"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection