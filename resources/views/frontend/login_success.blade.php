@extends('frontend.layout')
@section('title', 'Đăng nhập thành công')
@section('description', 'Bạn có thể thực hiện được các chức năng có trong hệ thống')
@section('image', url('/'.infoOther()->logo))
@section('url', url('support'))
@section('sitename', $_SERVER['REQUEST_URI'])
@section('keywords', 'Đăng nhập thành công')
@section('author', $_SERVER['HTTP_HOST'])
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div id="container" class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div id="content" role="main">
                        <nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Trang chủ</a>&nbsp;/&nbsp;Đăng nhập thành công</nav>
                        <h2 class="page-title">Đăng nhập thành công</h2>
                        <div class="term-description">
                            <p>Mua Đăng nhập thành công chính hãng tại TECH360 để nhận được nhiều ưu đãi, khuyến mại, quà tặng hấp dẫn, tặng ngay tài khoản VIP, bộ ứng dụng giải trí cao cấp</p>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        
                        
                    </div>
                </div>
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9">
                    
                    <div class="widget block-sidebar">
                        <h3 class="title-sidebar">Một số chức năng</h3>
                        <ul class="">
                            <li class="">
                                <a href="#">Xem thông tin cá nhân</a> 
                            </li>
                            <li class="">
                                <a href="#">Xem thông tin đơn hàng</a> 
                            </li>
                            <li class="">
                                <a href="#">Lịch sử giao dịch</a> 
                            </li>
                            <li class="">
                                <a href="#">Đánh giá sản phẩm</a> 
                            </li>
                            <li class="">
                                <a href="{{url('account/logout')}}">Đăng xuất</a> 
                            </li>
                        </ul>
                    </div>
                    <div class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Bộ nhớ</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">4GB</a> <span class="count">(2)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">8GB</a> <span class="count">(3)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">16GB</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">32GB</a> <span class="count">(2)</span></li>
                        </ul>
                    </div>
                    <div class="widget block-sidebar woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                        <h3 class="title-sidebar">Tốc độ xử lý</h3>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">1.2 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">1.5 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">1.6 GHZ</a> <span class="count">(1)</span></li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow" href="#">2.0 GHZ</a> <span class="count">(1)</span></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection