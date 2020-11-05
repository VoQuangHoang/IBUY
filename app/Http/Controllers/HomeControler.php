<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeControler extends Controller
{
    public function index(){
    	return view('page.home');
    }
}
