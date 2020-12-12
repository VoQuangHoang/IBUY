<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\MySql\Database\MySql;
session_start();

class CommentController extends Controller
{
    public function add_comment($id_product, Request $request){
        $validate = $request-> validate([
            'content' => 'required',
        ]);
        $validate['id_product'] = $id_product;
        $validate['id_user'] = Auth::user()->id;
        $validate['content'] = $request->content;
        Comment::create($validate);
        return Redirect::back()->with('success', 'Thêm bình luận thành công!');
    }
   
    public function manager_comment(){
        $comment = DB::table('comments')
        ->join('product', 'product.id_product', '=', 'comments.id_product')
        ->select('product.id_product','product.name_product', 
        DB::raw('count(*) as soluong'), 
        DB::raw('MIN(comments.created_at) as min'), 
        DB::raw('MAX(comments.created_at) as max'))
        ->groupby('product.id_product','product.name_product')
        ->orderby('product.id_product', 'DESC')->paginate(6);
        return view('admin.manager_comment', compact('comment'));
    }
    public function comment_by_product($id_product){
        $comment_by_product = Comment::join('product', 'product.id_product',
         '=', 'comments.id_product')
        ->join('users', 'users.id', '=', 'comments.id_user')
        ->where('comments.id_product', $id_product)
        ->select('comments.*','users.name')->paginate(6);
        $name_pro = Product::where('product.id_product', $id_product)->first();
        return view('admin.comment_by_id', compact('comment_by_product','name_pro'));
    }
    public function delete_comment($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return Redirect::back()->with('success', 'Xóa bình luận thành công!');
    }
}
