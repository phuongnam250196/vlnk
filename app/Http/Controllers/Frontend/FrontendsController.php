<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Posts;
use App\Videos;
use App\contacts;
use App\Categories;
use App\comments;
use App\seos;
use App\carts;
use App\sliders;
use App\User;
use App\views;
use Validator;
use Illuminate\Support\Facades\Mail;
use Auth;
use Exception;

class FrontendsController extends Controller
{
    public function getHome() {
        $products = Products::orderBy('created_at', 'desc')->get();
        $posts = Posts::orderBy('created_at', 'desc')->get();
        $sliders = sliders::where('status', 1)->orderBy('created_at', 'desc')->limit(5)->get();
        $seopost = seos::where('type', 'admin')->where('p_id', 1)->first();
    	return view('frontend.index', compact('products', 'posts', 'sliders', 'seopost'));
    }

    public function getContact() {
   		return view('frontend.contact');
    }
    public function postContact(Request $request) {
        $rules = [
            'email' => 'required |email | max:255',
            'name' => 'required | max:255',
            'phone' => 'required | max:255',
            'message' => 'required',
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'name.max' => 'Không được vượt quá 255 ký tự',
            'email.max' => 'Không được vượt quá 255 ký tự',
            'phone.max' => 'Không được vượt quá 255 ký tự',
            'name.required' => 'Họ tên không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'message.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new contacts;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->message = $request->message;
            $data->ip = get_client_ip();
            if($data->save()) {
                try {
                    Mail::send('emails.contact',['data'=> $data], function($m) use ($data) {
                        $m->to($data->email)->subject(((!empty($data->name))?$data->name:$data->name).' đã gửi yêu cầu thành công');
                    });
                }catch(Exception $e){
                    return back()->with('message', 'Gửi yêu cầu thất bại! Kiểm tra lại mang!');
                }
            }
        }
    }

    public function getNews() {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(9);
   		return view('frontend.news', compact('posts'));
    }

    public function getNewsDetailSlug($slug) {
        $post = Posts::where('post_slug', $slug)->first();
        $post_others = Posts::where('id', '!=', $post->id)->orderBy('created_at', 'desc')->limit(6)->get();
        $comments = comments::where('news_id', $post->id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        // dd($post_others);
        $seopost = seos::where('type', 'post')->where('p_id', $post->id)->first();
        $view = views::where('other_id', $post->id)->where('type', 'news')->first();
        return view('frontend.news_detail', compact('post', 'post_others', 'comments', 'seopost', 'view'));
    }

    public function getNewsDetailCategorySlug($slug) {
        $cate = Categories::where('cate_slug', $slug)->first();
        $posts = Posts::whereHas('categories', function($b) use($slug) {
            $b->where('cate_slug', $slug);
        })->orderBy('created_at', 'desc')->paginate(9);
        return view('frontend.news', compact('posts', 'cate'));
    }

    public function getNewsSearch(Request $request) {
        $posts = Posts::where('post_name', 'like', '%'.$request->word.'%')->orderBy('created_at', 'desc')->paginate(9);
        return view('frontend.news', compact('posts'));
    }

    public function newsReviews(Request $request) {
        $rules = [
            'email' => 'required | email | max:255',
            'name' => 'required | max:255',
            'content' => 'required',
            'star' => 'required',
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'name.max' => 'Không được vượt quá 255 ký tự',
            'email.max' => 'Không được vượt quá 255 ký tự',
            'name.required' => 'Họ tên không được để trống',
            'content.required' => 'Nội dung không được để trống',
            'star.required' => 'Bạn chưa cho đánh giá',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // dd($validator->errors());
            return back()->withInput()->withErrors($validator->errors());
        } else {
        // dd($request->all());
            $data = new comments;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->star = $request->star;
            $data->content = $request->content;
            $data->news_id = $request->news_id;
            $data->status = 1;
            $data->save();
            return back()->with('message', 'Bạn đã đánh giá tin tức thành công!');
        }
    }

    public function getVideos() {
        $videos = Videos::orderBy('created_at', 'desc')->paginate(18);
        return view('frontend.videos', compact('videos'));
    }

    public function getVideosDetailSlug($slug) {
        $video = Videos::where('video_slug', $slug)->first();
        $video_others = Videos::where('id', '!=', $video->id)->orderBy('created_at', 'desc')->limit(2)->get();
        $post_others = Posts::orderBy('created_at', 'desc')->limit(6)->get();
        $comments = comments::where('videos_id', $video->id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        $seopost = seos::where('type', 'video')->where('p_id', $video->id)->first();
        $view = views::where('other_id', $video->id)->where('type', 'videos')->first();
        return view('frontend.videos_detail', compact('video', 'post_others', 'video_others', 'comments', 'seopost', 'view'));
    }

    public function getVideosCategorySlug($slug) {
        $cate = Categories::where('cate_slug', $slug)->first();
        $videos = Videos::whereHas('categories', function($b) use($slug) {
            $b->where('cate_slug', $slug);
        })->orderBy('created_at', 'desc')->paginate(18);
        return view('frontend.videos', compact('videos', 'cate'));
    }

    public function getVideosSearch(Request $request) {
        $videos = Videos::where('video_name', 'like', '%'.$request->word.'%')->orderBy('created_at', 'desc')->paginate(18);
        return view('frontend.videos', compact('videos'));
    }

    public function videosReviews(Request $request) {
        $rules = [
            'email' => 'required | email | max:255',
            'name' => 'required | max:255',
            'content' => 'required',
            'star' => 'required',
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'name.max' => 'Không được vượt quá 255 ký tự',
            'email.max' => 'Không được vượt quá 255 ký tự',
            'name.required' => 'Họ tên không được để trống',
            'content.required' => 'Nội dung không được để trống',
            'star.required' => 'Bạn chưa cho đánh giá',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // dd($validator->errors());
            return back()->withInput()->withErrors($validator->errors());
        } else {
        // dd($request->all());
            $data = new comments;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->star = $request->star;
            $data->content = $request->content;
            $data->videos_id = $request->videos_id;
            $data->status = 1;
            $data->save();
            return back()->with('message', 'Bạn đã đánh giá video thành công!');
        }
    }

    public function getCategorySlug($slug) {
        $cate = Categories::where('cate_slug', $slug)->first();
        if(!empty($_GET['type'])) {
            if($_GET['type'] == 'view') {
                $data = Products::whereHas('categories', function($b) use($slug) {
                    $b->where('cate_slug', $slug);
                })->with('views')->paginate(24);
                // dd($data);
            }
            if($_GET['type'] == 'review') {
                $data = Products::whereHas('categories', function($b) use($slug) {
                    $b->where('cate_slug', $slug);
                })->with('views')->paginate(24);
                // dd($data);
            }
            if($_GET['type'] == 'price') {
                $data = Products::whereHas('categories', function($b) use($slug) {
                    $b->where('cate_slug', $slug);
                })->with('views')->orderBy('prod_price', 'asc')->paginate(24);
            }
            if($_GET['type'] == 'price-desc') {
                $data = Products::whereHas('categories', function($b) use($slug) {
                    $b->where('cate_slug', $slug);
                })->with('views')->orderBy('prod_price', 'desc')->paginate(24);
            }
            if($_GET['type'] == 'new') {
                $data = Products::whereHas('categories', function($b) use($slug) {
                    $b->where('cate_slug', $slug);
                })->with('views')->orderBy('created_at', 'desc')->paginate(24);
            }
        } else {
            $data = Products::whereHas('categories', function($b) use($slug) {
                $b->where('cate_slug', $slug);
            })->with('views')->paginate(24);
        }
        // dd($data);
        return view('frontend.category', compact('data', 'cate'));
    }

    public function getProductDetail(Request $request, $slug) {
        $product = Products::where('prod_slug', $slug)->first();
        $comments = comments::where('prod_id', $product->id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        $seopost = seos::where('type', 'product')->where('p_id', $product->id)->first();
        // dd($comments);
   		return view('frontend.product_detail', compact('product', 'comments', 'seopost'));
    }

    public function productReviews(Request $request) {
        $rules = [
            'email' => 'required | email | max:255',
            'name' => 'required | max:255',
            'content' => 'required',
            'star' => 'required',
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'name.max' => 'Không được vượt quá 255 ký tự',
            'email.max' => 'Không được vượt quá 255 ký tự',
            'name.required' => 'Họ tên không được để trống',
            'content.required' => 'Nội dung không được để trống',
            'star.required' => 'Bạn chưa cho đánh giá',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // dd($validator->errors());
            return back()->withInput()->withErrors($validator->errors());
        } else {
        // dd($request->all());
            $data = new comments;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->star = $request->star;
            $data->content = $request->content;
            $data->prod_id = $request->prod_id;
            $data->status = 1;
            $data->save();
            return back()->with('message', 'Bạn đã đánh giá sản phẩm thành công!');
        }
    }

    public function getAgency() {
    	return view('frontend.agency');
    }

    public function getSupport() {
    	return view('frontend.support');
    }

    public function getSearch(Request $request) {
        $data = Products::where('prod_name', 'like', '%'.$request->keyword.'%')->get();
    	return view('frontend.search', compact('data'));
    }

    public function getAccount() {
    	return view('frontend.account');
    }
    public function postAccount(Request $request) {
        $rules = [
            'email'=>'required|email|:6|max:255',
            'password'=>'required|min:6|max:255'
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Không được vượt quá 255 ký tự',
            'email.min' => 'Không được nhỏ quá 5 ký tự',
            'password.required' => 'Mật khẩu không được để trống',
            'password.max' => 'Mật khẩu không được vượt quá 255 ký tự',
            'password.min' => 'Mật khẩu không được nhỏ hơn 5 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->passes()) {
            $arr = [
                'email'=>$request->email, 
                'password'=>$request->password, 
                'level'=>0,
            ];
            if($request->remember = 'nho') {
                $remember = true;
            } else {
                $remember = false;
            }
            if(Auth::attempt($arr, $remember)) {
                // return redirect()->intended('admin');
                return redirect()->intended('account');
            } else {
                return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu không hợp lệ!!!!');
            }
        } else {
            return view('frontend.account', ['errors'=>$validator->errors()->all()]);
        }
        
    }

    /* Đăng nhập thành công */
    public function getAccountInfo() {
        return view('frontend.login_success');
    }

    /* Đăng ký */
    public function getRegister() {
        return view('frontend.register');
    }
    public function postRegister(Request $request) {
        $rules = [
            'email' => 'required | min:6 | max:100 | unique:users,email',
            'password' => 'required | min:6 | max:100',
            'password_two' => 'required| min:6 | max:100 | same:password',
        ];
        $messages = [
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email không đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password_two.required' => 'Mật khẩu nhập lại không được để trống',
            'password_two.same' => 'Mật khẩu nhập lại không khớp',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new User;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->level = 0;
            $data->save();
        }
        return back()->with('message', 'Tạo tài khoản thành công!');
    }
    /* End đăng ký */

    public function getPays() {
        return view('frontend.pay');
    }

    public function getCarts() {
        return view('frontend.shopcart');
    }

    public function postView(Request $request) {
        // return $request->all();
        $rules = [
            'other_id' => 'required',
            'type' => 'required',
        ];
        $messages = [
            'other_id.required' => 'Id không được để trống',
            'type.required' => 'Loại không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = views::where('other_id', $request->other_id)->where('type', $request->type)->first();
            if(!empty($data)) {
                $data->count +=1;
                $data->save();
            } else {
                $data = new views;
                $data->other_id = $request->other_id;
                $data->type = $request->type;
                $data->count = 1;
                $data->save();
            }
            return response()->json(compact('data'));
        }
    }

    public function addProductToCart(Request $request) {
        
        $message = [];
        $rules = [
            'id' => 'required',
        ];
        $messages = [
            'id.required' => 'Id không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = carts::where('product_id', $request->id)->where('user_id', 2)->first();
            if(!empty($data)) {
                $data->amount += 1;
                $data->price = $request->price*$data->amount;
                $data->save();
                $message = ['code'=>'200', 'message'=>'Thêm sản phẩm vào giỏ hàng thành công!'];
                $data = carts::where('product_id', $request->id)->where('user_id', 2)->with('products')->first();
                $count = carts::count();
            } else {
                $data = new carts;
                $data->price = $request->price;
                $data->amount = 1;
                $data->product_id = $request->id;
                $data->user_id = $request->user_id;
                $data->status = 1;
                $data->save();
                $message = ['code'=>'200', 'message'=>'Thêm sản phẩm vào giỏ hàng thành công!'];
                $data = carts::where('product_id', $request->id)->where('user_id', $request->user_id)->orderBy('created_at', 'desc')->with('products')->first();
                $count = carts::count();
            }
            return response()->json(compact('data', 'message', 'count'));
        }
    }

    public function delProductToCart(Request $request) {
        $message = [];
        $data = carts::find($request->id);
        if(!empty($data)) {
            $data->delete();
            $message[] = ['code'=>200, 'Xóa sản phẩm thành công!'];
        }
        return response()->json(compact('message', 'data'));
    }

    public function listToCart() {
        $data = carts::with('products')->get();
        return response()->json(compact('data'));
    }
}
