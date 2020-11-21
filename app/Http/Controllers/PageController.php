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
        return view('page.detailproduct', compact('category', 'product_detail'));        
        }
}
