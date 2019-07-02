<div class="section_custom_view_products">
    <div class="section_cvp_title">
        <h3>Sản phẩm nổi bật</h3>
    </div>
    <div class="section_cvp_content">
        <div class="woocommerce columns-5">
            <ul class="products columns-5">
                @foreach(listProducts() as $key=>$product)
                @if($key<5)
                    <li class="product">
                        <div class="shop_loop_box">
                            <a href="{{url('product/'.$product->prod_slug)}}" class=""><img width="300" height="300" src="{{url('/'.$product->prod_img)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a>
                            <a rel="nofollow" href="#" data-quantity="1" data-product_id="224" data-product_sku="" class="button product_type_simple ajax_add_to_cart" id="tech_addtocart_224">Đọc tiếp</a> 
                        </div>
                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <h2 class="woocommerce-loop-product__title">{{$product->prod_name}}</h2>
                        </a>
                        <span class="price"><span class="amount">{{number_format($product->prod_price, 0, '.', '.')}} vnđ</span></span>
                        <div class="devvn_is_featured"><img width="80" height="44" src="{{url('/vlnk')}}/images/70_58013_1a.png" class="attachment-full size-full" alt="" /></div>
                        {{-- <div class="devvn_is_tragop">
                            <img src="{{url('/vlnk')}}/images/tap-tragop0dong.png" /> 
                            <a href="{{url('product/'.$product->prod_slug)}}">Xem chi tiết <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div> --}}
                    </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>