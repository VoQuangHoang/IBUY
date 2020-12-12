<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::orderby('id_category','desc')->get();
        $products = Product::join('categories','categories.id_category','=','product.id_category')
   		->where('promotion_price', '=', 0)->orderby('product.id_product','desc')->get();
        $products_sale = Product::join('categories','categories.id_category','=','product.id_category')
   		->where('promotion_price', '>', 0)->orderby('product.id_product','desc')->get();   
        return view('page.home', compact('category','products', 'products_sale'));
    }
    public function contact(){
        return view('page.contact');
    }
    public function about(){
        return view('page.about');
    }
}
