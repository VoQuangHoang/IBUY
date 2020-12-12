<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);//Hàng rào 
    }
    public function category(){
    	return view('admin.add_category');
    }
    public function save_category(Request $request){
    	$data = array();
    	$data['name_category'] = $request->category_name;
    	$get_image = $request->file('category_image');
    	if ($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image= current(explode('.', $get_name_image));
    		$new_image= rand(0,999999999).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/category',$new_image);
    		$data['image_category']= $new_image;		
    	}
        Category::create($data);
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('all_category');
    }
    public function all_category(){
    	$all_category = Category::orderBy('id_category','asc')->paginate(6);
    	return view('admin.all_category', compact('all_category'));
    }
    public function edit_category($category_id){
        $edit_category = Category::where('id_category', $category_id)->get();
        return view('admin.edit_category', compact('edit_category'));
    }
    public function update_category(Request $request, $category_id){
        $data = array();
        $data['name_category'] = $request->category_name;
        $get_image = $request->file('category_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image= current(explode('.', $get_name_image));
            $new_image= rand(0,999999999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/category',$new_image);
            $data['image_category']= $new_image;     
        }
        Category::where('id_category',$category_id)->update($data);
        Session::put('message','Cập nhập danh mục thành công');
        return Redirect::to('all_category');
    }
    public function delete_category($category_id){
        Category::findorFail($category_id)->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all_category');
    }

    
}
