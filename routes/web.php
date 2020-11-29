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

//Cart
Route::post('save_cart','CartController@save_cart');
Route::get('show_cart','CartController@show_cart');
Route::get('delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('update-cart-quantity','CartController@update_cart_quantity');

//Checkout


//Test
Route::get('/abc', function () {
    return view('page.cart');
});





