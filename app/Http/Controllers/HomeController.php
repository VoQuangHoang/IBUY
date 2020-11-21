<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
   		->orderby('product.id_product','desc')
   		->paginate(100);
        return view('page.home', compact('category','products'));
    }
}
