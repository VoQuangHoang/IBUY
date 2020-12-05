<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/contact', function () {
    return view('page.contact');
});

//Admin
Route::get('/admin','AdminController@showImportantInfo');
Route::get('/all_admin','AdminController@all_admin');
Route::get('/delete_admin/{id}','AdminController@delete_admin');
Route::get('/edit_admin/{id}','AdminController@edit_admin');
Route::post('/update_admin/{id}','AdminController@update_admin');

//Category
Route::get('add_category','CategoryController@category');
Route::post('save_category','CategoryController@save_category');
Route::get('all_category','CategoryController@all_category');
Route::get('delete_category/{id_category}','CategoryController@delete_category');
Route::get('edit_category/{id_category}','CategoryController@edit_category');
Route::post('update_category/{id_category}','CategoryController@update_category');

//Payment
Route::get('add_payment','PaymentController@payment');
Route::post('save_payment','PaymentController@save_payment');
Route::get('all_payment','PaymentController@all_payment');
Route::get('delete_payment/{payment_id}','PaymentController@delete_payment');
Route::get('edit_payment/{payment_id}','PaymentController@edit_payment');
Route::post('update_payment/{payment_id}','PaymentController@update_payment');

//Admin Product
Route::get('add_product','ProductController@product');
Route::post('save_product','ProductController@save_product');
Route::get('all_product','ProductController@all_product');
Route::get('edit_product/{id_product}','ProductController@edit_product');
Route::post('update_product/{id_product}','ProductController@update_product');
Route::get('delete_product/{id_product}','ProductController@delete_product');

//Product User
Route::get('product_detail/{id_product}', 'PageController@getdetails');
Route::get('shop', 'PageController@getShop');
Route::get('product_category/{type}', 'PageController@getProducbytype');
Route::get('search', 'PageController@search');

//Comments
Route::post('add-comment/{id_product}', 'CommentController@add_comment');
Route::get('manager-comment', 'CommentController@manager_comment');
Route::get('comment-by-product/{id_product}', 'CommentController@comment_by_product');
Route::get('delete-comment/{id}', 'CommentController@delete_comment');

//Contact
Route::post('add-contact', 'PageController@add_contact');

//Cart
Route::post('save_cart','CartController@save_cart');
Route::get('show_cart','CartController@show_cart');
Route::get('delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('update-cart-quantity','CartController@update_cart_quantity');

// Checkout
Route::get('checkout','CheckoutController@checkout');
Route::post('order-place','CheckoutController@order_place');

//Order
Route::get('manager-order','OrderController@manager_order');
Route::get('view-order/{order_id}','OrderController@view_order');

//Test
Route::get('/abc', function () {
    return view('page.checkout');
});





