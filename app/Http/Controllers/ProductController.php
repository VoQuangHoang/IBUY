<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
	public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function product(){
    	$category = DB::table('category')->orderby('id_category','desc')->get();
    	return view('admin.add_product')->with('category',$category);	
    }
    public function save_product(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['Name_product'] = $request->product_name;
    	$data['Price_product'] = $request->product_price;
    	$data['Description_product'] = $request->product_desc;
    	$data['Quantity_product'] = $request->product_Quantity;
    	$data['Category_id'] = $request->category;
    	$get_image = $request->file('product_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['Image_product']= $new_image;		
    	}
    	DB::table('product')->insert($data);
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('all_product');
 		// echo'<pre>';
 		// print_r($data);
 		// echo'</pre>';
   		}
   	public function all_product(){
   		$all_product = DB::table('product')
   		->join('category','category.id_category','=','product.Category_id')
   		->orderby('id_category','desc')
   		->paginate(5);
   		$manager_product = view('admin.all_product')->with('all_product',$all_product);
   		return view('admin_layout')->with('admin.all_product',$manager_product);
   	}
   	public function edit_product($product_id){
   		$category = DB::table('category')
    	->orderby('id_category','desc')
    	->get();	
    	$edit_product = DB::table('product')
    	->join('category','category.id_category','=','product.Category_id')
    	->orderby('id_product','desc')
    	->where('id_product', $product_id)
    	->get();
    	$manager_product = view('admin.edit_product')
    	->with('edit_product',$edit_product)
    	->with('category',$category);
    	return view('admin_layout')
    	->with('edit_product', $manager_product);
   	}
   	public function update_product(Request $request, $product_id){
   		$data = array();
    	$data['Name_product'] = $request->product_name;
    	$data['Price_product'] = $request->product_price;
    	$data['Description_product'] = $request->product_desc;
    	$data['Quantity_product'] = $request->product_Quantity;
    	$data['Category_id'] = $request->category;
    	$get_image = $request->file('product_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['Image_product']= $new_image;		
    	}
   		//echo'<pre>';
 		// print_r($data);
 		// echo'<pre>';
    	DB::table('product')->where('id_product',$product_id)
    	->update($data);
    	Session::put('message','Cập nhật thành công');
    	return Redirect::to('all_product');
   	}
   	public function delete_product($product_id){
   		DB::table('product')
        ->where('id_product',$product_id)
        ->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all_product');
   	}
     public function product_detail($product_id){
        $product = DB::table('product')
        ->orderby('category_id','desc')
        ->get();
        $product_detail = DB::table('product')
        ->join('category_product','category_product.category_id','=','product.category_id')
        ->where('product.product_id',$product_id)
        ->get();
        $all_product = DB::table('product')
        ->join('category_product','category_product.category_id','=','product.category_id')//liên kết 2 table lại
        ->orderby('product.product_id','desc')
        ->get();
        return view('pages.sanpham.product-detail')
        ->with('brand_product',$brand_product)
        ->with('all_product', $all_product)
        ->with('product_detail',$product_detail);   
    }
}
