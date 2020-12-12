<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\User;
use Illuminate\Support\Facades\Redirect;
session_start();

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);//Hàng rào 
    }
    public function manager_order() {
        $all_order = Order::join('users', 'users.id', '=', 'order.user_id')
        ->join('payment', 'payment.payment_id', '=', 'order.payment_id')
        ->select('order.*','users.name','payment.payment_method')
        ->orderBy('order.order_id','desc')->paginate(5);
        return view('admin.manager_order', compact('all_order'));
    }

    public function view_order($order_id){
        $order_by_id = Order::join('users', 'users.id', '=', 'order.user_id')
        ->join('order_detail', 'order_detail.order_id', '=', 'order.order_id')
        ->join('shipping', 'shipping.shipping_id', '=', 'order.shipping_id')
        ->where('order.order_id', $order_id)
        ->select('order.*','users.*','shipping.*','order_detail.*')->first();
        $order_detail = Order_detail::join('order','order.order_id','=','order_detail.order_id')
        -> where('order_detail.order_id', $order_id)->get();
        return view('admin.view_order', compact('order_by_id','order_detail'));
    }
    public function update_status(Request $request, $id){
        $data = array();
        $data['order_status'] = $request->order_status;
        Order::where('order_id', $id)->update($data);
        return Redirect::to('manager-order')
        ->with('success', 'Cập nhật trạng thái đơn hàng #'.$id.' thành công');
    }
}
