@extends('frontend.layout')
@section('title', 'Hỗ trợ khách hàng')
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Trang chủ</a>&nbsp;&#47;&nbsp;Hỗ trợ khách hàng</nav>
                <div class="main_container col-md-9 col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="page_content">
                        <h1 class="title-page">Hỗ trợ khách hàng</h1>
                        <div class="tinymce">
                            <p><span style="color: #0000ff;"><strong>I- MUA HÀNG OFFLINE – PHƯƠNG THỨC GIAO HÀNG – TRẢ TIỀN MẶT</strong></span></p>
                            <p>– Phương thức Giao hàng – Trả tiền mặt chỉ áp dụng đối với những khu vực TECH360 hỗ trợ giao nhận (phạm vi giao hàng ≤ 10km tính từ trung tâm của hệ thống TECH360) hoặc trả tiền mua hàng trực tiếp tại TECH360 <br>– Với phương thức thanh toán trực tiếp Quý khách có thể đặt hàng trên Website hoặc đặt hàng qua điện thoại:0243.944.7979 – 0938.94.1111 – 0938.94.1115.Nhân viên chúng tôi sẽ tiến hành xuất hàng cho Quý khách và xác nhận ngày giờ giao hàng với Quý khách sau khi xuất hàng. <br>– Quý khách có trách nhiệm thanh toán đầy đủ toàn bộ giá trị đơn hàng cho Nhân viên giao nhận hoặc Nhân viên bán hàng và chăm sóc khách hàng của TECH360 ngay khi hoàn tất kiểm tra hàng hóa và nhận Phiếu giao hàng kiêm phiếu xuất kho.Hoặc có thể thanh toán quẹt thẻ ATM, VISA trực tiếp tại cửa hàng TECH360. Quý khách thanh toán đúng số tiền trên Phiếu đã ghi, nếu có bất cứ thắc mắc nào Quý khách gọi lại cho TECH360 để được thông tin cụ thể hơn.</p>
                            <p><span style="color: #0000ff;"><strong>II – MUA HÀNG ONLINE – PHƯƠNG THỨC THANH TOÁN TRƯỚC</strong></span></p>
                            <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
                <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12 col-sm-pull-9" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
                    <div id="recent-posts_svl-2" class="widget widget_recent_entries_svl">
                        <h3 class="title-sidebar">Tin tức mới</h3>
                        <ul>
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/anh-dep-girl-xinh-02-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Quay video 360 độ, trải nghiệm VR với action camera SJCAM SJ360 </a>
                                    <span class="date">12/05/2017</span>
                                </div>
                            </li>
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/anh-dep-meo-con3__76574_zoom-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Kinh nghiệm sử dụng camera hành động cho phượt thủ </a>
                                    <span class="date">12/05/2017</span>
                                </div>
                            </li>
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/maxresdefault-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Sau camera thể thao SJ6 Legend của SJCAM thị trường sắp đón nhận sản phẩm cao cấp mới mang tên SJ7 Star </a>
                                    <span class="date">13/11/2016</span>
                                </div>
                            </li>
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/ipcam-qf004-10-20160517042804-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Có gì mới trên hai phiên bản SJCAM SJ6 Legend và SJ7 Star </a>
                                    <span class="date">12/11/2016</span>
                                </div>
                            </li>
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/kiwibox-s3-49-1-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Video review camera thể thao SJCAM SJ6 Legend cùng một số hình ảnh về nó </a>
                                    <span class="date">12/11/2016</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="recent-videos-svl-2" class="widget widget_recent_entries_svl">
                        <h3 class="title-sidebar">Videos</h3>
                        <ul class="recent-video-ul">
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/video2-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Android Tivi Box thiết bị giải trí đa năng trong gia đình bạn </a>
                                    <span class="date">13/11/2016</span>
                                </div>
                            </li>
                            <li class="rcp_svl_has_thumb">
                                <a href="#" class="link_recent_thumb">
                                    <img width="150" height="150" src="{{url('/vlnk')}}/images/maxresdefault-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""/> </a>
                                <div class="rcp_svl_content">
                                    <a href="#">
                                        Android Tivi Box Minix NEO U1 &#8211; Unbox </a>
                                    <span class="date">13/11/2016</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="media_image-2" class="widget widget_media_image"><img width="224" height="366" src="{{url('/vlnk')}}/images/banner-xe-dien-1.jpg" class="image wp-image-78  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></div>
                    <div id="media_image-3" class="widget widget_media_image">
                        <h3 class="title-sidebar">Giấy chứng nhận</h3><img width="274" height="387" src="{{url('/vlnk')}}/images/CNSJCAM.png" class="image wp-image-263  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" />
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection