<?php

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

Route::get('/', function () {
    return view('layouts.index');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allproducts', 'HomeController@products')->name('products');
Route::get('/allproducts', 'PrdoductsController@showAllProducts');




Route::post('/home', 'PrdoductsController@post')->name('home');
Route::get('/home', 'PrdoductsController@showUserProducts')->name('home');
Route::get('/allorders', 'PrdoductsController@showAllOrders')->name('allorders');
Route::get('/userOrders', 'HomeController@orders')->name('userOrders');
Route::post('/userOrders', 'PrdoductsController@postorder')->name('userOrders');
Route::get('/userOrders', 'PrdoductsController@showUserOrders')->name('userOrders');







