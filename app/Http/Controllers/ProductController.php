<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//Hàng rào 
    }
    public function product(){
     	$category = Category::orderby('id_category','desc')->get();
    	return view('admin.add_product')->with('category',$category);
    }
    public function save_product(Request $request){
    	$data = new Product;
    	$data['name_product'] = $request->product_name;
    	$data['price_product'] = $request->product_price;
    	$data['description_product'] = $request->product_desc;
    	$data['quantity_product'] = $request->product_quantity;
    	$data['id_category'] = $request->category;
    	$get_image = $request->file('product_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['image_product']= $new_image;		
    	}
    	$data->save();
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('all_product');
 		// echo'<pre>';
 		// print_r($data);
 		// echo'</pre>';
   		}
   	public function all_product(){
   		$all_product = Product::join('categories','categories.id_category','=','product.id_category')
   		->orderby('product.id_product','desc')
   		->paginate(4);
   		$manager_product = view('admin.all_product')
      ->with('all_product',$all_product);
   		return view('layouts.admin')
      ->with('admin.all_product',$manager_product);
   	}
   	public function edit_product($product_id){
   		$category = Category::orderby('id_category','desc')
    	->get();	
    	$edit_product = Product::join('categories','categories.id_category','=','product.id_category')
    	->orderby('id_product','desc')
    	->where('id_product', $product_id)
    	->get();
    	$manager_product = view('admin.edit_product')
    	->with('edit_product',$edit_product)
    	->with('category',$category);
    	return view('layouts.admin')
    	->with('edit_product', $manager_product);
   	}
   	public function update_product(Request $request, $product_id){
   		$data = array();
    	$data['name_product'] = $request->product_name;
    	$data['price_product'] = $request->product_price;
    	$data['description_product'] = $request->product_desc;
    	$data['quantity_product'] = $request->product_quantity;
    	$data['id_category'] = $request->category;
    	$get_image = $request->file('product_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['image_product']= $new_image;		
    	}
   		//echo'<pre>';
 		// print_r($data);
 		// echo'<pre>';
    	Product::where('id_product',$product_id)
    	->update($data);
    	Session::put('message','Cập nhật thành công');
    	return Redirect::to('all_product');
   	}
   	public function delete_product($product_id){
   		Product::where('id_product',$product_id)
        ->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all_product');
   	}
}
