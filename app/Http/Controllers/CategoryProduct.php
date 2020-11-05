<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function category(){
        $this->AuthLogin();
    	return view('admin.add_category');
    }
    public function save_category(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['Name_category'] = $request->category_name;
    	$get_image = $request->file('category_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/category',$new_image);
    		$data['Image_category']= $new_image;		
    	}
    	// echo'<pre>';
    	// print_r($data);
    	// echo'<pre>';
    	DB::table('category')->insert($data);
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('all_category');
    }
    public function all_category(){
        $this->AuthLogin();
    	$all_category = DB::table('category')->paginate(5);
    	$manager_category = view('admin.all_category')
    	->with('all_category', $all_category);
    	return view('admin_layout')
    	->with('all_category', $manager_category);
    }
    public function edit_category($category_id){
        $this->AuthLogin();
        $edit_category = DB::table('category')
        ->where('id_category', $category_id)
        ->get();
        $manager_category = view('admin.edit_category')
        ->with('edit_category',$edit_category);
        return view('admin_layout')
        ->with('edit_category', $manager_category);
    }
    public function update_category(Request $request, $category_id){
        $this->AuthLogin();
        $data = array();
        $data['Name_category'] = $request->category_name;
        $get_image = $request->file('category_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image= current(explode('.', $get_name_image));
            $new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/category',$new_image);
            $data['Image_category']= $new_image;     
        }
        // echo'<pre>';
        // print_r($data);
        // echo'<pre>';
        DB::table('category')
        ->where('id_category',$category_id)
        ->update($data);
        Session::put('message','Cập nhập danh mục thành công');
        return Redirect::to('all_category');
    }
    public function delete_category($category_id){
        $this->AuthLogin();
        DB::table('category')
        ->where('id_category',$category_id)
        ->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all_category');
    }
}
