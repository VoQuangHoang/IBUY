<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeControler@index');
Route::get('/trang-chu','HomeControler@index');

//Admin backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-login','AdminController@login');
Route::get('/logout','AdminController@logout');
//CategoryProduct
//Category
Route::get('add_category','CategoryProduct@category');
Route::post('save_category','CategoryProduct@save_category');
Route::get('all_category','CategoryProduct@all_category');
Route::get('delete_category/{id_category}','CategoryProduct@delete_category');
Route::get('edit_category/{id_category}','CategoryProduct@edit_category');
Route::post('update_category/{id_category}','CategoryProduct@update_category');
//Product
Route::get('add_product','ProductController@product');
Route::post('save_product','ProductController@save_product');
Route::get('all_product','ProductController@all_product');
Route::get('edit_product/{id_product}','ProductController@edit_product');
Route::post('update_product/{id_product}','ProductController@update_product');
Route::get('delete_product/{id_product}','ProductController@delete_product');

//Authentication roles
Route::get('/register_auth','AuthController@register_auth');
Route::post('/register','AuthController@register');




