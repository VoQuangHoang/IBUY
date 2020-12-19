<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\User;
use DB;
use Session;
session_start();

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getdetails($id_product){
        $category = Category::orderby('id_category','desc')->get();
        $product_detail = Product::join('categories','categories.id_category','=','product.id_category')
        -> where('product.id_product', $id_product)->get();
        $comments = Comment::join('users', 'users.id', '=', 'comments.id_user')
        ->where('id_product', $id_product)->select('comments.*','users.name','users.image')->get();
        return view('page.detailproduct', compact('category','product_detail','comments'));        
    }
    public function getShop()    
    {   
        $category = Category::orderby('id_category','asc')->get();
        $products = Product::orderby('id_product','desc')->paginate(12);
        $productss = Product::orderby('id_product','desc')->get();
        return view('page.shop', compact('products','category','productss'));
    }

    public function getProducbytype($type){
        $product_type = Product::where('id_category',$type)
        ->orderBy('id_product', 'desc')->paginate(10);
        $category = Category::where('id_category',$type)->first();
        return view('page.product_category', compact('product_type','category'));        
    }

    public function search(Request $request){
        $keywords = $request->keywords;
        $search_product = Product::where('name_product','like','%'.$keywords.'%')->get();
        return view('page.search', compact('search_product','keywords'));
    }
    
    public function add_contact(Request $request)
    {
        $data = array();
        $data['contact_name'] = $request->contact_name;
        $data['contact_email'] = $request->contact_email;
        $data['contact_phone'] = $request->contact_phone;
        $data['contact_tilte'] = $request->contact_tilte;
        $data['contact_message'] = $request->contact_message;
        Contact::create($data);
        Session::put('message','Đã gửi thông tin liên hệ!');
        return view('page.contact');

    }
    public function manager_contact(){
        $contact = Contact::orderby('contact_id','desc')->paginate(5);
        return view('admin.manager-contact', compact('contact'));
    }

    public function info_user($id){
        $edit_user = User::where('id',$id)->get();
        return view('page.info_user', compact('edit_user'));
    }
    public function update_user(Request $request, $id){
        $data = $request -> validate([
            'email' => 'required'
        ]);
        $data['name'] = $request->name;
        $data['gender'] = $request->gender;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['password'] = Hash::make($request->password);
        $get_image = $request->file('image');
        if($get_image){
            $name = $get_image;
            $imagename = $name->getClientOriginalExtension();
            $imagenames = time().'.'.$imagename;
            $get_image->move(public_path('/uploads/user'),$imagenames);
            $data['image'] = $imagenames;
        }
        User::where('id',$id)->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::back()->with('success', 'Cập nhật thông tin tài khoản thành công!');
    } 
}
