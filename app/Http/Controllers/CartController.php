<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){
        $productID = $request->productid_hidden;
        $quantity = $request->qty;

        $product_info = Product::where('id_product',$productID)->first();
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        $data['id'] = $product_info->id_product;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->name_product;
        $data['price'] = $product_info->price_product;
        $data['weight'] = $product_info->price_product;
        $data['options']['image'] = $product_info->image_product;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('show_cart');
        
    }
    public function show_cart(){
        return view('page.cart');
    }
    public function delete_to_cart($rowId){
        Cart::remove($rowId);
        return Redirect::to('show_cart'); 
    }
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowid_cart;
        $qty = $request->quantity_cart;
        Cart::update($rowId,$qty);
        return Redirect::to('show_cart');
    }
}
