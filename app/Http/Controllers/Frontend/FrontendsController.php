<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Posts;
use App\Videos;
use App\contacts;
use App\Categories;
use App\User;
use Validator;
use Illuminate\Support\Facades\Mail;

class FrontendsController extends Controller
{
    public function getHome() {
        $products = Products::orderBy('created_at', 'desc')->get();
        $posts = Posts::orderBy('created_at', 'desc')->get();
    	return view('frontend.index', compact('products', 'posts'));
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
            $data->save();
            return back()->with('message', 'Bạn đã gửi tin yêu cầu thành công');
        }
    }

    public function getNews() {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(10);
   		return view('frontend.news', compact('posts'));
    }

    public function getNewsDetailSlug($slug) {
        $post = Posts::where('post_slug', $slug)->first();
        $post_others = Posts::where('id', '!=', $post->id)->orderBy('created_at', 'desc')->limit(6)->get();
        // dd($post_others);
        return view('frontend.news_detail', compact('post', 'post_others'));
    }

    public function getNewsDetailCategorySlug($slug) {
        $cate = Categories::where('cate_slug', $slug)->first();
        $posts = Posts::whereHas('categories', function($b) use($slug) {
            $b->where('cate_slug', $slug);
        })->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.news', compact('posts', 'cate'));
    }

    public function getNewsSearch(Request $request) {
        $posts = Posts::where('post_name', 'like', '%'.$request->word.'%')->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.news', compact('posts'));
    }

    public function getVideos() {
        $videos = Videos::orderBy('created_at', 'desc')->get();
        return view('frontend.videos', compact('videos'));
    }

    public function getVideosDetailSlug($slug) {
         $video = Videos::where('video_slug', $slug)->first();
         $post_others = Posts::orderBy('created_at', 'desc')->limit(6)->get();
        return view('frontend.videos_detail', compact('video', 'post_others'));
    }

    public function getVideosCategorySlug($slug) {
        $cate = Categories::where('cate_slug', $slug)->first();
        $videos = Videos::whereHas('categories', function($b) use($slug) {
            $b->where('cate_slug', $slug);
        })->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.videos', compact('videos', 'cate'));
    }

    public function getVideosSearch(Request $request) {
        $videos = Videos::where('video_name', 'like', '%'.$request->word.'%')->orderBy('created_at', 'desc')->get();
        return view('frontend.videos', compact('videos'));
    }

    public function getCategorySlug($slug) {
        $data = Categories::where('cate_slug', $slug)->first()->products;
        // dd($data);
        return view('frontend.category', compact('data'));
    }

    public function getProductDetail($slug) {
        $product = Products::where('prod_slug', $slug)->first();
   		return view('frontend.product_detail', compact('product'));
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
}
