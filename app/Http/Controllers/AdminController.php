<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\user;
use App\Models\Roles;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }
    public function showImportantInfo(){
    	$roles = Roles::orderby('id','desc')->get();
    	return view('layouts.admin')->with('roles',$roles);
    }
    public function all_admin(){
    	$all_admin = User::orderBy('id','desc')->paginate(3);
    	$manager_admin = view('auth.all_admin')
    	->with('all_admin', $all_admin);
    	return view('layouts.admin')
    	->with('all_admin', $manager_admin);
    }
    public function delete_admin($admin_id){
   		User::where('id',$admin_id)
        ->delete();
        return Redirect::to('all_admin');
   	}
   	public function add_admin(){
    	return view('auth.add_admin');
    }
}
