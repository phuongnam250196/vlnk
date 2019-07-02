@extends('frontend.layout')
@section('title', $video->video_name)
@section('main')
	<div class="main_body">
        <div class="container">
            <div class="row row-padding-15">
                <div class="main_container col-md-9 col-sm-9 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <div class="breadcrumb"><span><span><a href="{{url('/')}}">Trang chủ</a> / <span><a href="https://tech360.vn/tin-tuc">Video</a> / <span class="breadcrumb_last" aria-current="page">{{$video->video_name}}</span></span></span></span></div>
                        <div class="page_content">
                            <header>
                                <h1 class="title-page">{{$video->video_name}}</h1>
                                <div class="post-info">
                                    <span class="thetime updated"><i class="fa fa-clock-o"></i> <span>{{date_format($video->created_at, 'd/m/Y')}}</span></span>
                                    <span class="post_count"><i class="fa fa-eye"></i> <span>
                                            <p class="bawpvc-ajax-counter" data-id="9087">8 lượt xem</p>
                                        </span></span>
                                </div>
                            </header>
                            <div class="tinymce">
                                {!! $video->video_content !!}
                                <iframe width="701" height="394" src="{{getYoutubeEmbedUrl($video->video_url)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <ul class="social_list">
                                <li class="facebook_like">
                                    <div class="fb-like fb_iframe_widget" data-href="https://tech360.vn/may-chieu-lcd-va-may-chieu-led-co-gi-khac-khac-biet" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Ftech360.vn%2Fmay-chieu-lcd-va-may-chieu-led-co-gi-khac-khac-biet&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=small"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f2d14f7eb47219" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df1f620fa57b68a4%26domain%3Dtech360.vn%26origin%3Dhttps%253A%252F%252Ftech360.vn%252Ff26c748432543e4%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Ftech360.vn%2Fmay-chieu-lcd-va-may-chieu-led-co-gi-khac-khac-biet&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=small" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></div>
                                </li>
                                <li class="google_shared">
                                    <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1561368372574" name="I0_1561368372574" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Ftech360.vn&amp;url=https%3A%2F%2Ftech360.vn%2Fmay-chieu-lcd-va-may-chieu-led-co-gi-khac-khac-biet&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.svts2UWTv5s.O%2Fam%3DwQE%2Fd%3D1%2Frs%3DAGLTcCMPISf2gMkNjEKeqAt9c7-fMEjAIg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1561368372574&amp;_gfid=I0_1561368372574&amp;parent=https%3A%2F%2Ftech360.vn&amp;pfname=&amp;rpctoken=62004344" data-gapiattached="true"></iframe></div>
                                    <div class="g-plusone" data-size="medium" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                                </li>
                            </ul>
                            <div class="post_navigation">
                                <nav class="navigation post-navigation" role="navigation">
                                    <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                                    <div class="nav-links">
                                        <div class="nav-previous"><a href="https://tech360.vn/goc-lam-giau-cach-mo-rap-chieu-phim-mini-von-it-loi-nhuan-cao" rel="prev"><span class="meta-nav" aria-hidden="true">Bài trước</span> <br><span class="post-title">[Góc làm giàu] Cách mở rạp chiếu phim mini vốn ít, lợi nhuận cao</span></a></div>
                                        <div class="nav-next"><a href="https://tech360.vn/co-dang-de-chi-tien-cho-mot-chiec-may-chieu-co-do-phan-giai-cao-hon-khong" rel="next"><span class="meta-nav" aria-hidden="true">Bài tiếp</span> <br><span class="post-title">Có đáng để chi tiền cho một chiếc máy chiếu có độ phân giải cao hơn không?</span></a></div>
                                    </div>
                                </nav>
                            </div>
                            <div class="relatedcat">
                                <div class="section_cvp_title margin-b-15">
                                    <h2>Có thể bạn quan tâm</h2>
                                </div>
                                <div class="row row-padding-15">
                                    @foreach($post_others as $key=>$post)
                                        <div class="col-sm-6 col-xs-12 margin-b-15">
                                            <a href="{{url('/news/'.$post->post_slug)}}" title="{{$post->post_name}}">
                                                <img width="300" height="300" src="{{url('/'.$post->post_img)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{$post->post_name}}"> {{$post->post_name}} </a>
                                            <div class="post-info">
                                                <span class="thetime updated"><i class="fa fa-clock-o"></i> <span>{{date_format($post->created_at, 'd/m/Y')}}</span></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="comment_face">
                                <div class="section_cvp_title margin-b-15">
                                    <h2>Bình luận</h2>
                                </div>
                                <div id="comments" class="comments-area">
                                    <span class="title_comment">Bình luận của bạn</span>
                                    <div class="kk-star-ratings  top-left lft" data-id="9087">
                                        <div class="kksr-stars kksr-star gray">
                                            <div class="kksr-fuel kksr-star yellow" style="width:0%;"></div>
                                            <!-- kksr-fuel --><a href="#1"></a><a href="#2"></a><a href="#3"></a><a href="#4"></a><a href="#5"></a>
                                        </div>
                                        <!-- kksr-stars -->
                                        <div class="kksr-legend">Đánh giá</div>
                                        <!-- kksr-legend -->
                                    </div>
                                    <!-- kk-star-ratings -->
                                    <br clear="both">
                                    <div id="formcmmaxweb">
                                        <div class="cancel-comment-reply">
                                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="/may-chieu-lcd-va-may-chieu-led-co-gi-khac-khac-biet#respond" style="display:none;">Nhấp chuột vào đây để hủy trả lời.</a></small>
                                        </div>
                                        <form action="https://tech360.vn/wp-comments-post.php" method="post" id="commentform" novalidate="novalidate">
                                            <p>
                                                <textarea name="comment" id="comment" cols="50" rows="4" tabindex="4" placeholder="Bình luận"></textarea>
                                            </p>
                                            <div class="name-email">
                                                <p>
                                                    <input placeholder="Họ và tên" type="text" name="author" id="author" value="" tabindex="1" aria-required="true">
                                                </p>
                                                <p>
                                                    <input placeholder="Email" type="text" name="email" id="email" value="" size="22" tabindex="2" aria-required="true">
                                                </p>
                                            </div>
                                            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Gửi">
                                                <input type="hidden" name="comment_post_ID" value="9087" id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                            </p>
                                        </form>
                                    </div>
                                </div><!-- #comments .comments-area -->
                            </div>
                        </div>
                    </main>
                </div>
                @include('frontend.nav.aside_news_videos')
            </div>
        </div>
    </div>
@endsection