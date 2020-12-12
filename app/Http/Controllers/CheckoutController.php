<?php

namespace App\Http\Controllers;

use Cart;
use Session;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
use App\Models\Shipping;
use App\Models\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function checkout(){
        $payment = Payment::where('payment_status',1)->get();
        return view('page.checkout', compact('payment'));
    }

    public function order_place(Request $request){
        //insert shipping
        $dataship = $request -> validate([
            'shipping_note' => 'nullable',
            ]);
        $dataship['shipping_name']= $request->shipping_name;
        $dataship['shipping_address']= $request->shipping_address;
        $dataship['shipping_phone']= $request->shipping_phone;
        $dataship['shipping_email']= $request->shipping_mail;
        $dataship['shipping_note']= $request->shipping_note;
        $shipping_id = Shipping::insertGetId($dataship);
        Session::put('shipping_id', $shipping_id);

        //insert order
        $order_data = $request -> validate([

        ]);
        $order_data['user_id'] = Auth::user()->id;
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $request->payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] ='Đang chờ xử lý';
        $order_data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $order_data['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $order_id = Order::insertGetId($order_data);
        
        //insert order details
        $content = Cart::content();
        foreach ($content as $value_content){
            $order_d_data = $request -> validate([

                ]);
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $value_content->id;
            $order_d_data['product_name'] = $value_content->name;
            $order_d_data['product_price'] = $value_content->price;
            $order_d_data['product_sales_quantity'] = $value_content->qty;
            Order_detail::create($order_d_data);
        }
        Cart::destroy();
        return view('page.donecheckout');
    }
}
