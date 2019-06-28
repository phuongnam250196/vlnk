<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Videos;
use App\Categories;
use Validator;

class VideosController extends Controller
{
    public function getVideos() {
    	$data = Videos::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.video.index', compact('data'));
    }

    public function getAddVideos() {
    	$category = Categories::orderBy('created_at', 'desc')->get(); 
    	return view('backend.video.add', compact('category'));
    }

    public function postAddVideos(Request $request) {
    	$messages = [];
    	$rules = [
            'video_name' => 'required',
            'video_url' => 'required',
            'video_img' => 'required | mimes:jpg,png,jpeg,gif',
        ];
        $messages = [
            'video_name.required' => 'Tiêu đề không được để trống',
            'video_url.required' => 'Link video không được để trống',
            'video_img.required' => 'Ảnh không được để trống',
            'video_img.mimes' => 'Ảnh không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
        	$data = new Videos;
            $data->video_url = $request->video_url;
        	$data->video_content = $request->video_content;
        	$data->video_status = $request->video_status;
        	$data->cate_id = $request->cate_id;
        	if($data->save()) {
        	   $data->video_name = $request->video_name;
        	    $check = Videos::where('video_name', $request->video_name)->first();
	            if(!empty($check)) {
	        		$data->video_slug = str_slug($request->video_name.'-'.$data->id);
	            } else {
	        		$data->video_slug = str_slug($request->video_name);
	        	}
  		 		if(!empty($request->video_img) && $request->video_img != "undefined"){
  		            $file =  $request->video_img;
  		            $path = 'uploads/videos/';
  		            $modifiedFileName = time().'-'.$file->getClientOriginalName();
  		            if($file->move($path,$modifiedFileName)){
  		                $data->video_img = $path.$modifiedFileName;
  		                $data->save();
  		            }
  		        }
  		        $messages[] = ['code'=>200, 'message'=>'Thêm mới thành công!'];
  	 		}
  	 		return redirect()->intended('admin/video')->with('messages','Thêm mới thành công');
        }
    }

    public function getUpdateVideos($id) {
    	$data = Videos::find($id);
    	$category = Categories::orderBy('created_at', 'desc')->get(); 
    	return view('backend.video.update', compact('data', 'category'));
    }

    public function postUpdateVideos(Request $request, $id) {
    	$rules = [
            'video_name' => 'required',
            'video_url' => 'required',
            'video_img' => 'required | mimes:jpg,png,jpeg,gif',
        ];
        $messages = [
            'video_name.required' => 'Tiêu đề không được để trống',
            'video_url.required' => 'Link video không được để trống',
            'video_img.required' => 'Ảnh không được để trống',
            'video_img.mimes' => 'Ảnh không đúng định dạng',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
        	$data = Videos::find($id);
        	$check = Videos::where('video_name', $request->video_name)->first();
        	$data->video_name = $request->video_name;
            $data->video_url = $request->video_url;
        	if(!empty($check)) {
        		$data->video_slug = str_slug($request->video_name.'-'.$data->id);
        	} else {
        		$data->video_slug = str_slug($request->video_name);
        	} 
        	$data->video_content = $request->video_content;
        	$data->video_status = $request->video_status;
        	$data->cate_id = $request->cate_id;
	 		if(!empty($request->video_img) && $request->video_img != "undefined"){
	            $file =  $request->video_img;
	            $path = 'uploads/videos/';
	            $modifiedFileName = time().'-'.$file->getClientOriginalName();
	            if($file->move($path,$modifiedFileName)){
	                $data->video_img = $path.$modifiedFileName;
	            }
	        }
	        $data->save();
  	 		return redirect()->intended('admin/video')->with('messages','Cập nhật thành công');
        }
    }

    public function postDeleteVideos(Request $request) {
    	$data = Videos::find($request->id)->delete();
        return response()->json($data);
    }
}
