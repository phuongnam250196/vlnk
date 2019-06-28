@extends('frontend.layout')
@section('title', 'Liên hệ')
@section('main')
	<div class="main_body">
		<div class="container">
			<div class="row row-padding-15">
				<div class="main_container col-xs-12">
					<nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Trang chủ</a>&nbsp;&#47;&nbsp;Liên hệ</nav>
					<div class="page_content">
						<h1 class="title-page">Liên hệ</h1>
						<div class="row row-padding-15">
							<div class="col-sm-6 col-xs-12">
								<div class="lienhe_content tinymce">
									<p><strong>Thái Hà , Đống Đa , Hà Nội </strong></p>
									<p><strong>Điện thoại: (+84) 43.999.99999</strong></p>
									<p><strong>Hotline: 0888.888.888 &#8211; 0899.999.999</strong></p>
									<p><strong>Email: admin@gmail.com</strong></p>
									<p><strong>Mở cửa: Từ thứ 2 đến Chủ Nhật 8h30 – 21h30</strong></p>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="lienhe_form">
									<div role="form" class="wpcf7" id="wpcf7-f243-p25-o1" lang="vi" dir="ltr">
										<div class="screen-reader-response"></div>
										<form method="POST" class="wpcf7-form" novalidate="novalidate">
											<div style="display: none;">
												<input type="hidden" name="_wpcf7" value="243" />
												<input type="hidden" name="_wpcf7_version" value="5.0.4" />
												<input type="hidden" name="_wpcf7_locale" value="vi" />
												<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f243-p25-o1" />
												<input type="hidden" name="_wpcf7_container_post" value="25" />
											</div>
											<div class="cf7_wrap">
												<div class="cf7_col1"><span class="wpcf7-form-control-wrap your-name">
													<input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên" />
												</span>
												</div>
												<div class="cf7_col2"><span class="wpcf7-form-control-wrap your-tel">
													<input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" /></span>
												</div>
											</div>
											<div class="cf7_wrap">
												<div class="cf7_row">
													<span class="wpcf7-form-control-wrap your-email">
													<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" />
												</span>
												</div>
											</div>
											<div class="cf7_wrap">
												<div class="cf7_row">
													<span class="wpcf7-form-control-wrap your-message">
													<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Tin nhắn"></textarea></span></div>
											</div>
											<div class="cf7_submit">
												<input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit" />
											</div>
											<div class="wpcf7-response-output wpcf7-display-none"></div>
											{{csrf_field()}}
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="maps_full">
							<div class="acf-map">
								<div class="marker" data-lat="21.010654" data-lng="105.82247440000003"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection