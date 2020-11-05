<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Roles;

class AuthController extends Controller
{
    public function register_auth(){
    	return view('admin.register_auth');
    }
    public function register(Request $request){
    	$this->validation($request);
    	$data = $request->all();
    	$admin = new Admin();
    	$admin->Name = $data['Name'];
    	$admin->Email = $data['Email'];
    	$admin->Password = md5($data['Password']);
    	$admin->save();
    	return redirect('/register_auth')->with('message','Đăng kí thành công');
    }
    public function validation($request){
    	return $this ->validate($request,[
    		'Name' =>'required|max:255',
    		'Email' =>'required|email|max:255',
    		'Password' =>'required|max:255',
    	]);
    }
}
