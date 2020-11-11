<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function category(){
    	return view('admin.add_category');
    }
    public function save_category(Request $request){
    	$data = new Category;
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
        $data->save();
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('add_category');
    }
    public function all_category(){
    	$all_category = Category::orderBy('id_category','desc')->paginate(5);
    	$manager_category = view('admin.all_category')
    	->with('all_category', $all_category);
    	return view('layouts.admin')
    	->with('all_category', $manager_category);
    }
    public function edit_category($category_id){
        $edit_category = Category::where('id_category', $category_id)->get();
        $manager_category = view('admin.edit_category')
        ->with('edit_category',$edit_category);
        return view('layouts.admin')
        ->with('edit_category', $manager_category);
    }
    public function update_category(Request $request, $category_id){
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
        Category::where('id_category',$category_id)->update($data);
        Session::put('message','Cập nhập danh mục thành công');
        return Redirect::to('all_category');
    }
    public function delete_category($category_id){
        Category::where('id_category',$category_id)
        ->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all_category');
    }
}
