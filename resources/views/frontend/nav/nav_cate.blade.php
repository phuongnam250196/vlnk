<div class="devvn_mega_menu_box">
    <ul class="devvn_mega_menu_ul">
        @foreach(listCate() as $key=>$cate)
        @if($key<7)
            <li class="@if($key !=0) no-have-mega @endif">
                <a href="{{url('/category/'.$cate->cate_slug)}}"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/android_box.png) no-repeat center center;"></i>{{$cate->cate_name}}</a>
                <i class="click_open_sub_megamenu">+</i>
                <div class="devvn_sub_mega_content" style="background: #fff url({{url('vlnk')}}/images/androidbox.png) no-repeat right bottom;">
                    <div class="devvn_sub_mega_content_box devvn-megamenu-3-column">
                        <div class="devvn-mega-sub-column-3 devvn_sub_mega_content_column">
                            <div class="devvn_mega_menu_title">
                                <h2>Sub menu 1</h2>
                                <ul>
                                    <li><a href="#" title="Sub menu  dm1">Sub menu dm1</a></li>
                                    <li><a href="#" title="Sub menu 1">Sub menu 1</a></li>
                                    <li><a href="#" title="Sub menu 1">Sub menu 1</a></li>
                                    <li><a href="#" title="Sub menu 1">Sub menu 1</a></li>
                                    <li><a href="" title="sub 121331">sub 121331</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="devvn-mega-sub-column-3 devvn_sub_mega_content_column">
                            <div class="devvn_mega_menu_title">
                                <h2>Sub menu 2</h2>
                                <ul>
                                    <li><a href="#" title="Sub menu 2">Sub menu 2</a></li>
                                    <li><a href="#" title="Sub menu 2">Sub menu 2</a></li>
                                    <li><a href="#" title="Sub menu 2">Sub menu 2</a></li>
                                    <li><a href="#" title="Sub menu 2">Sub menu 2</a></li>
                                    <li><a href="#" title="Sub menu 2">Sub menu 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endif
        @endforeach
        {{-- <li class="no-have-mega">
            <a href="#" title="Phụ Kiện Android Box"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/phu_kien_android_box.png) no-repeat center center;"></i>Phụ Kiện Android Box</a>
            <i class="click_open_sub_megamenu">+</i>
            <ul class="devvn_sub_menu">
                <li>
                    <a href="#" title="Phụ kiện 1">Phụ kiện 1</a>
                </li>
                <li>
                    <a href="#" title="Phụ kiện 2">Phụ kiện 2</a>
                </li>
                <li>
                    <a href="#" title="Phụ kiện 3">Phụ kiện 3</a>
                </li>
            </ul>
        </li>
        <li class="no-have-mega">
            <a href="#"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/camera_thong_minh.png) no-repeat center center;"></i>Camera Thông Minh</a>
        </li>
        <li class="no-have-mega">
            <a href="#"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/141230510593.png) no-repeat center center;"></i>Kính Thực Tế Ảo</a>
        </li>
        <li class="">
            <a href="#" title="Smart Watch"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/smart_watch.png) no-repeat center center;"></i>Smart Watch</a>
            <i class="click_open_sub_megamenu">+</i>
            <div class="devvn_sub_mega_content" style="background: #fff url({{url('/vlnk')}}/images/camera_thong_minh_to.png) no-repeat right bottom;">
                <div class="devvn_sub_mega_content_box devvn-megamenu-3-column">
                    <div class="devvn-mega-sub-column-3 devvn_sub_mega_content_column">
                        <div class="devvn_mega_menu_title">
                            <h2>Sub Smart Watch</h2>
                            <ul>
                                <li><a href="#" title="Smart Watch 1">Smart Watch 1</a></li>
                                <li><a href="#" title="Smart Watch 2">Smart Watch 2</a></li>
                                <li><a href="#" title="Smart Watch">Smart Watch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="devvn-mega-sub-column-3 devvn_sub_mega_content_column">
                        <div class="devvn_mega_menu_title">
                            <h2>Sub Smart Watch 2</h2>
                            <ul>
                                <li><a href="" title="Sub Smart Watch">Sub Smart Watch</a></li>
                                <li><a href="" title="Sub Smart Watch 2 2">Sub Smart Watch 2 2</a></li>
                                <li><a href="" title="Sub Smart Watch 2 3">Sub Smart Watch 2 3</a></li>
                                <li><a href="" title="Sub Smart Watch 2 4">Sub Smart Watch 2 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="no-have-mega">
            <a href="#"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/android_box.png) no-repeat center center;"></i>Android TV Box</a>
        </li>
        <li class="no-have-mega">
            <a href="#"><i class="devvn_mega_menu_icon" style="background: url({{url('/vlnk')}}/images/141230510593.png) no-repeat center center;"></i>Android TV Box</a>
        </li> --}}
    </ul>
</div>