<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
	public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
    	return view('admin.admin_login');
    }
    public function show_dashboard(){
    	$this->AuthLogin();
    	return view('admin.dashboard');
    }
    //Đăng Nhập
    public function login(Request $request){
        $this->AuthLogin();
    	$admin_email = $request->Email;
    	$admin_password = md5($request->Password);
    	$result = DB::table('users')
    	->where('Email',$admin_email)
    	->where('Password',$admin_password)
    	->first();
		if ($result) {
			Session::put('admin_name', $result->Name);
			Session::put('admin_id', $result->id);
			return Redirect::to('/dashboard');
		}else{
			Session::put('message', 'Tài Khoản và Mật Khẩu Sai');
			return Redirect::to('/admin');
		}
    }
    //Đăng xuất
    public function logout(){
		$this->AuthLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
	}
}
