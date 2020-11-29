<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getdetails($id_product){
        $category = Category::orderby('id_category','desc')->get();
        $product_detail = Product::join('categories','categories.id_category','=','product.id_category')
        -> where('product.id_product', $id_product)->get();
        return view('page.detailproduct', compact('category','product_detail'));        
    }
    public function getShop()    
    {   
        $category = Category::orderby('id_category','asc')->get();
        $products = Product::orderby('id_product','desc')->paginate(10);
        return view('page.shop', compact('products','category'));
    }

    public function getProducbytype($type){
        $product_type = Product::where('id_category',$type)->orderBy('id_product', 'desc')->paginate(10);
        $category = Category::where('id_category',$type)->first();
        return view('page.product_category', compact('product_type','category'));        
    }
}
