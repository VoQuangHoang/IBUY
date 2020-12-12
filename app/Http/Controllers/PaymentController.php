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
        $data->save();
    	Session::put('message','Thêm hình thức thanh toán thành công');
    	return Redirect::to('all_payment');
    }
    public function all_payment(){
    	$all_payment = Payment::orderBy('payment_id','desc')->paginate(4);
    	return view('admin.all_payment', compact('all_payment'));
    }
    public function edit_payment($payment_id){
        $edit_payment = Payment::where('payment_id', $payment_id)->get();
        return view('admin.edit_payment', compact('edit_payment'));
    }
    public function update_payment(Request $request, $payment_id){
        $data = array();
        $data['payment_method'] = $request->payment_method;
    	$data['payment_status'] = $request->payment_status;
        Payment::where('payment_id',$payment_id)->update($data);
        Session::put('message','Cập nhập thành công');
        return Redirect::to('all_payment');
    }
    public function delete_payment($payment_id){
        Payment::where('payment_id',$payment_id)
        ->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('all_payment');
    }
}
