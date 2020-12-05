<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class PaymentController extends Controller
{
    public function payment(){
    	return view('admin.add_payment');
    }
    public function save_payment(Request $request){
    	$data = new Payment;
    	$data['payment_menthod'] = $request->payment_menthod;
    	$data['payment_status'] = $request->payment_status;
    	// echo'<pre>';
    	// print_r($data);
    	// echo'<pre>';
        $data->save();
    	Session::put('message','Thêm hình thức thanh toán thành công');
    	return Redirect::to('all_payment');
    }
    public function all_payment(){
    	$all_payment = Payment::orderBy('payment_id','desc')->paginate(4);
    	$manager_payment = view('admin.all_payment')
    	->with('all_payment', $all_payment);
    	return view('layouts.admin')
    	->with('all_payment', $manager_payment);
    }
    public function edit_payment($payment_id){
        $edit_payment = Payment::where('payment_id', $payment_id)->get();
        $manager_payment = view('admin.edit_payment')
        ->with('edit_payment',$edit_payment);
        return view('layouts.admin')
        ->with('edit_payment', $manager_payment);
    }
    public function update_payment(Request $request, $payment_id){
        $data = array();
        $data['payment_menthod'] = $request->payment_menthod;
    	$data['payment_status'] = $request->payment_status;
        // echo'<pre>';
        // print_r($data);
        // echo'<pre>';
        Payment::where('payment_id',$payment_id)->update($data);
        Session::put('message','Cập nhập danh mục thành công');
        return Redirect::to('all_payment');
    }
    public function delete_payment($payment_id){
        Payment::where('payment_id',$payment_id)
        ->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all_payment');
    }
}
