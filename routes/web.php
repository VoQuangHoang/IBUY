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
Route::get('home', 'HomeController@index');
//Quản Trị Viên
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
// //Product
Route::get('add_product','ProductController@product');
Route::post('save_product','ProductController@save_product');
Route::get('all_product','ProductController@all_product');
Route::get('edit_product/{id_product}','ProductController@edit_product');
Route::post('update_product/{id_product}','ProductController@update_product');
Route::get('delete_product/{id_product}','ProductController@delete_product');

Route::get('/master', function () {
    return view('layouts.master');
});




