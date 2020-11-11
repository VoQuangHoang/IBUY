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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
//Quản Trị Viên
Route::get('/admin','AdminController@showImportantInfo')->middleware(['auth','role:admin']);
Route::get('/all_admin','AdminController@all_admin')->middleware(['auth']);
Route::get('/delete_admin/{id}','AdminController@delete_admin')->middleware(['auth']);
Route::get('add_admin','AdminController@add_admin')->middleware(['auth']);
//Category
Route::get('add_category','CategoryController@category')->middleware('auth');
Route::post('save_category','CategoryController@save_category')->middleware('auth');
Route::get('all_category','CategoryController@all_category')->middleware('auth');
Route::get('delete_category/{id_category}','CategoryController@delete_category')->middleware('auth');
Route::get('edit_category/{id_category}','CategoryController@edit_category')->middleware('auth');
Route::post('update_category/{id_category}','CategoryController@update_category')->middleware('auth');	
// //Product
Route::get('add_product','ProductController@product');
Route::post('save_product','ProductController@save_product');
Route::get('all_product','ProductController@all_product');
Route::get('edit_product/{id_product}','ProductController@edit_product');
Route::post('update_product/{id_product}','ProductController@update_product');
Route::get('delete_product/{id_product}','ProductController@delete_product');




