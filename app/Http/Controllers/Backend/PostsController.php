<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use App\Categories;
use Validator;

class PostsController extends Controller
{
    public function getPosts() {
    	$data = Posts::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.post.index', compact('data'));
    }

    public function getAddPosts() {
        $category = Categories::orderBy('created_at', 'desc')->get();
    	return view('backend.post.add', compact('category'));
    }

    public function postAddPosts(Request $request) {
    	$messages = [];
    	$rules = [
            'post_name' => 'required',
            'post_img' => 'required | mimes:jpg,png,jpeg,gif',
            'post_content' => 'required',
        ];
        $messages = [
            'post_name.required' => 'Tiêu đề không được để trống',
            'post_img.required' => 'Ảnh không được để trống',
            'post_img.mimes' => 'Ảnh không đúng định dạng',
            'post_content.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
        	$data = new Posts;
        	$data->post_content = $request->post_content;
        	$data->post_status = $request->post_status;
            $data->cate_id = $request->cate_id;
        	if($data->save()) {
        	    $data->post_name = $request->post_name;
        	    $check = Posts::where('post_name', $request->post_name)->first();
	            if(!empty($check)) {
	        		$data->post_slug = str_slug($request->post_name.'-'.$data->id);
	            } else {
	        		$data->post_slug = str_slug($request->post_name);
	        	}
  		 		if(!empty($request->post_img) && $request->post_img != "undefined"){
  		            $file =  $request->post_img;
  		            $path = 'uploads/posts/';
  		            $modifiedFileName = time().'-'.$file->getClientOriginalName();
  		            if($file->move($path,$modifiedFileName)){
  		                $data->post_img = $path.$modifiedFileName;
  		                $data->save();
  		            }
  		        }
  		        $messages[] = ['code'=>200, 'message'=>'Thêm mới thành công!'];
  	 		}
  	 		return redirect()->intended('admin/post')->with('messages','Thêm mới thành công');
        }
    }

    public function getUpdatePosts($id) {
    	$data = Posts::find($id);
        $category = Categories::orderBy('created_at', 'desc')->get();
    	return view('backend.post.update', compact('data', 'category'));
    }

    public function postUpdatePosts(Request $request, $id) {
    	$rules = [
            'post_name' => 'required',
            'post_img' => 'required | mimes:jpg,png,jpeg,gif',
            'post_content' => 'required',
        ];
        $messages = [
            'post_name.required' => 'Tiêu đề không được để trống',
            'post_img.required' => 'Ảnh không được để trống',
            'post_img.mimes' => 'Ảnh không đúng định dạng',
            'post_content.required' => 'Nội dung không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
        	$data = Posts::find($id);
        	$check = Posts::where('post_name', $request->post_name)->first();
        	$data->post_name = $request->post_name;
        	if(!empty($check)) {
        		$data->post_slug = str_slug($request->post_name.'-'.$data->id);
        	} else {
        		$data->post_slug = str_slug($request->post_name);
        	}
        	$data->post_content = $request->post_content;
        	$data->post_status = $request->post_status;
            $data->cate_id = $request->cate_id;
	 		if(!empty($request->post_img) && $request->post_img != "undefined"){
	            $file =  $request->post_img;
	            $path = 'uploads/posts/';
	            $modifiedFileName = time().'-'.$file->getClientOriginalName();
	            if($file->move($path,$modifiedFileName)){
	                $data->post_img = $path.$modifiedFileName;
	            }
	        }
	        $data->save();
  	 		return redirect()->intended('admin/post')->with('messages','Cập nhật thành công');
        }
    }

    public function postDeletePosts(Request $request) {
    	$data = Posts::find($request->id)->delete();
        return response()->json($data);
    }
}
