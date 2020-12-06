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
    	return view('admin.home_admin', compact('user', 'product', 'category', 'comment', 'order', 'contact'));
    }
    public function all_admin(){
    	$all_admin = User::orderBy('id','desc')->paginate(3);
    	$manager_admin = view('auth.all_admin')
    	->with('all_admin', $all_admin);
    	return view('layouts.admin')
    	->with('all_admin', $manager_admin);
    }
    public function edit_admin($admin_id){
        $roles = Roles::orderby('id','desc')->get();
        $edit_admin = User::where('id',$admin_id)->get();
        $manager_admin = view('auth.edit_admin')
        ->with('edit_admin', $edit_admin)
        ->with('roles', $roles);
        return view('layouts.admin')
        ->with('edit_admin', $manager_admin);
    }
    public function update_admin(Request $request, $admin_id){
        $data = array();
        $data['name'] = $request->name;
        $data['gender'] = $request->gender;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['roles_id'] = $request->roles_id;
        $data['password'] = Hash::make($request->password);
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image= current(explode('.', $get_name_image));
            $new_image= rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['image']= $new_image;     
        }
        // echo'<pre>';
        // print_r($data);
        // echo'<pre>';
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'regex:/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i', 'min:8'],
            'gender' => ['required', 'string', 'max:5'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','min:10','numeric'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'name.required' => 'Vui lòng nhập tên',
            'name.regex' => 'Vui lòng nhập ký tự',
            'name.min' => 'Tên phải có ít nhất 8 ký tự',
            //email
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email này đã được đăng ký',
            'email.email' => 'Vui lòng nhập đúng email',
            //phone
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại phải là số',
            'phone.min' => 'Số điện thoại có ít nhất 8 ký tự',
            //address
            'address.required' => 'Vui lòng nhập địa chỉ',
            //password
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu có ít nhất 8 ký tự',
            'password.confirmed' => 'Mật khẩu không trùng khớp',
            //image
            'image.required' => 'Vui lòng up hình',
        ]);
    }
}
