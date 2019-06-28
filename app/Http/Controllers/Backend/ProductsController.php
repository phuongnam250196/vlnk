<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
use Validator;

class ProductsController extends Controller
{
    public function getProduct() {
        $data = Products::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.product.index', compact('data'));
    }

    public function getAddProduct() {
        $category = Categories::orderBy('created_at', 'desc')->get();
    	return view('backend.product.add', compact('category'));
    }

    public function postAddProduct(Request $request) {
        $rules = [
            'prod_name' => 'required',
        ];
        $messages = [
            'prod_name.required' => 'Sản phẩm không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Products;
            $data->tag_id = json_encode($request->tag_id);
            $data->prod_price = $request->prod_price;
            $data->prod_guarantee = $request->prod_guarantee;
            $data->prod_sale = $request->prod_sale;
            $data->prod_short_description = $request->prod_short_description;
            $data->prod_content = $request->prod_content;
            $data->prod_amount = $request->prod_amount;
            $data->prod_view = $request->prod_view;
            $data->cate_id = $request->cate_id;
            $data->rate_id = $request->rate_id;
            $data->prod_gallery = $request->prod_gallery;
            if($data->save()) {
                $data->prod_name = $request->prod_name;
                $check = Products::where('prod_name', $request->prod_name)->first();
                if(!empty($check)) {
                    $data->prod_slug = str_slug($request->prod_name.'-'.$data->id);
                } else {
                    $data->prod_slug = str_slug($request->prod_name);
                }
                if(!empty($request->prod_img) && $request->prod_img != "undefined"){
                    $file =  $request->prod_img;
                    $path = 'uploads/products/';
                    $modifiedFileName = time().'-'.$file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->prod_img = $path.$modifiedFileName;
                    }
                }
                $data->save();
            }
            // dd($data);
            return redirect()->intended('admin/product')->with('message', 'Thêm mới sản phẩm thành công!');
        }
    }

    public function getUpdateProduct($id) {
        $data = Products::find($id);
        $category = Categories::orderBy('created_at', 'desc')->get();
        return view('backend.product.update', compact('data', 'category'));
    }

    public function postUpdateProduct(Request $request, $id) {
        $rules = [
            'prod_name' => 'required',
        ];
        $messages = [
            'prod_name.required' => 'Sản phẩm không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Products::find($id);
            $data->prod_name = $request->prod_name;
            $data->tag_id = json_encode($request->tag_id);
            $data->prod_price = $request->prod_price;
            $data->prod_guarantee = $request->prod_guarantee;
            $data->prod_sale = $request->prod_sale;
            $data->prod_short_description = $request->prod_short_description;
            $data->prod_content = $request->prod_content;
            $data->prod_amount = $request->prod_amount;
            $data->prod_view = $request->prod_view;
            $data->cate_id = $request->cate_id;
            $data->rate_id = $request->rate_id;
            $data->prod_gallery = $request->prod_gallery;
            $check = Products::where('prod_name', $request->prod_name)->first();
            if(!empty($check)) {
                $data->prod_slug = str_slug($request->prod_name.'-'.$data->id);
            } else {
                $data->prod_slug = str_slug($request->prod_name);
            }
            if($data->save()) {
                if(!empty($request->prod_img) && $request->prod_img != "undefined"){
                    $file =  $request->prod_img;
                    $path = 'uploads/products/';
                    $modifiedFileName = time().'-'.$file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->prod_img = $path.$modifiedFileName;
                    }
                }
                $data->save();
            }
            // dd($data);
            return redirect()->intended('admin/product')->with('message', 'Cập nhật sản phẩm thành công!');
        }
    }

    public function uploadImgProduct(Request $request) {
    	$validator = Validator::make($request->all(), [
        	'prod_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
 
    	if ($validator->passes()) {
  	 		$data = new Products;
  	 		$data->prod_name = time().'abc';
  	 		if($data->save()) {
  		 		if(!empty($request->prod_img) && $request->prod_img != "undefined"){
                    $file =  $request->prod_img;
                    $path = 'uploads/products/';
                    $modifiedFileName = time().'-'.$file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->prod_img = $path.$modifiedFileName;
                        $data->save();
                    }
                }
	 		}
      	return response()->json(['success'=>'done', 'data'=>$data]);
    	}
    	return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function postDeleteProducts(Request $request) {
        $data = Products::find($request->id)->delete();
        return response()->json($data);
    }
}
