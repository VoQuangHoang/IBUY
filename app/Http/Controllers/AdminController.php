<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\user;
use App\Models\Roles;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Contact;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }
    public function showImportantInfo(){
        $user = User::All(); $product = Product::All();
        $category = Category::All(); $comment = Comment::All();
        $order = Order::All(); $contact = Contact::All();
        return view('admin.home_admin',
        compact('user','product','category','comment','order','contact'));
    }
    public function all_admin(){
    	$all_admin = User::orderBy('id','desc')->paginate(5);
    	return view('auth.all_admin', compact('all_admin'));
    }
    public function edit_admin($admin_id){
        $roles = Roles::orderby('id','desc')->get();
        $edit_admin = User::where('id',$admin_id)->get();
        return view('auth.edit_admin', compact('roles', 'edit_admin'));
    }
    public function update_admin(Request $request, $admin_id){
        $data = $request -> validate([
            'email' => 'required'
        ]);
        $data['name'] = $request->name;
        $data['gender'] = $request->gender;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['roles_id'] = $request->roles_id;
        $data['password'] = Hash::make($request->password);
        $get_image = $request->file('image');
        if($get_image){
            $name = $get_image;
            $imagename = $name->getClientOriginalExtension();
            $imagenames = time().'.'.$imagename;
            $get_image->move(public_path('/uploads/user'),$imagenames);
            $data['image'] = $imagenames;
        }
        User::where('id',$admin_id)
        ->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('all_admin');
    }
    public function delete_admin($admin_id){
   		User::where('id',$admin_id)
        ->delete();
        return Redirect::to('all_admin');
   	}
}
// echo'<pre>';
        // print_r($data);
        // echo'<pre>';