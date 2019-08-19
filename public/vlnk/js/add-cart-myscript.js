(function($) {
	var url = 'http://localhost:8888/vlnk/public/';


	// Hiển thị số sản phẩm trong giỏ hàng
    function load_cart() {
        $.ajax({
            url: url + 'listtocart',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function(data) {
                // console.log(data.data);
                if (data.data.length != 0) {
                    $('#pr_count').text(data.data.length);
                    for (var i = 0; i < data.data.length; i++) {
                        $('#cart_id_none').prepend('<li class="mini_cart_item">' +
                            '<a href="#" class="remove" title="Xóa sản phẩm này" data-id="' + data.data[i].id + '">×</a>' +
                            '<a href="' + data.data[i].products.prod_img + '">' +
                            '<img width="300" height="300" src="' + data.data[i].products.prod_img + '" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">' + data.data[i].products.prod_name + '</a>' +
                            '<span class="quantity">' + data.data[i].amount + ' × <span class="woocommerce-Price-amount amount">' + data.data[i].price + '&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span>' +
                            '</li>');
                    }
                } else {
                    $('#cart_id_none').prepend('<li class="empty">Chưa có sản phẩm trong giỏ hàng.</li>');
                    $('#pr_count').text(0);
                }
            }
        });
    }
    load_cart();

    $(document).ready(function() {


    	// Thêm sản phẩm vào giỏ hàng
    	$('.add_to_cart_button').click(function() {
            var id = $(this).data('product_id');
            console.log(id);
            $.ajax({
                url: url+'addtocart',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: {
                    id:id,
                    user_id: 2,
                    amount: 1,
                    price: 12000
                },
                success: function(data) {
                    console.log(data);
                    console.log('thanh cong');
                    if(data.message.code == 200) {
                        console.log(data.data);
                        $('#pr_count').text(data.count);
                        $('#cart_id_none').prepend('<li class="mini_cart_item">'+
                            '<a href="#" class="remove" title="Xóa sản phẩm này" data-id="'+data.data.id+'">×</a>'+
                            '<a href="'+data.data.products.prod_img+'">'+
                                '<img width="300" height="300" src="'+data.data.products.prod_img+'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">'+data.data.products.prod_name+'&nbsp</a>'+
                            '<span class="quantity">'+data.data.amount+' × <span class="woocommerce-Price-amount amount">'+data.data.price+'&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span>'+
                        '</li>');
                        $('#cart_id_none .empty').remove();
                        $("#fancybox_id").css('display', 'block');
                        $('html').css('overflow', 'hidden');
                    }
                }
            });
        });

        // Xóa sản phẩm khỏi giỏ hàng
        $('#cart_id_none').on('click', '.remove', function(e){
            var id = $(this).data('id');
            console.log($(this).text());
            $(this).parent().remove();
            console.log(id);
            $.ajax({
                url: url+'deltocart',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: {
                    id:id
                },
                success: function(data) {
                    if(data.message.code == 200) {
                        console.log(data.data);
                    }
                }
            });
        });

        // khác
        $("#fancybox_id").click(function() {
	        $(this).css('display', 'none');
	        $('html').css('overflow', 'inherit');
	    });
	    $(".close").click(function() {
	        $("#fancybox_id").css('display', 'none');
	        $('html').css('overflow', 'inherit');
	    });

	    // view click
        viewClick('product_id', 'product');
        viewClick('category_id', 'category');
        viewClick('news_id', 'news');
        viewClick('videos_id', 'videos');

        // Chỉnh màu new
        // $('.menu_header_wrap,  h3.title-sidebar, .devvn_mega_menu_title h2:before, .devvn_mega_menu_image h2:before, .cart_floating_right_button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .show_phone_mobile, .section_cvp_title h3, .section_cvp_title h2, .woocommerce span.onsale, .woocommerce ul.products li.product .onsale, .paginate_links .current, .paginate_links .page-numbers:hover, .nav-links a:hover, a.read_more:hover, .cart_after_content_title h2, a.checkout-button.button.alt.wc-forward, .woocommerce a.remove:hover, .cart_floating_right_title').css('background', 'yellow');
    });


    // view sản phẩm, video, bài viết, danh mục    
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
            url: url+'view',
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
