<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
// session_start();
use App\Models\Product;
use App\Models\Category;

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
    	$data['Name_product'] = $request->product_name;
    	$data['Price_product'] = $request->product_price;
    	$data['Description_product'] = $request->product_desc;
    	$data['Quantity_product'] = $request->product_Quantity;
    	$data['Id_category'] = $request->category;
    	$get_image = $request->file('product_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['Image_product']= $new_image;		
    	}
    	$data->save();
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('all_product');
 		// echo'<pre>';
 		// print_r($data);
 		// echo'</pre>';
   		}
   	public function all_product(){
   		$all_product = Product::join('categories','categories.id_category','=','product.Id_category')
   		->orderby('product.id_product','desc')
   		->paginate(5);
   		$manager_product = view('admin.all_product')
      ->with('all_product',$all_product);
   		return view('layouts.admin')
      ->with('admin.all_product',$manager_product);
   	}
   	public function edit_product($product_id){
   		$category = Category::orderby('id_category','desc')
    	->get();	
    	$edit_product = Product::join('categories','categories.id_category','=','product.Id_category')
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
    	$data['Name_product'] = $request->product_name;
    	$data['Price_product'] = $request->product_price;
    	$data['Description_product'] = $request->product_desc;
    	$data['Quantity_product'] = $request->product_Quantity;
    	$data['Id_category'] = $request->category;
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
