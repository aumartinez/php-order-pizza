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

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', 'ProductsController@index');
Route::get('/pizza/{id}', 'ProductsController@pizza');
Route::get('/ws/items', 'CartController@get_items');
Route::get('/cart', 'CartController@index');
Route::get('/add', 'CartController@redirect_to');
Route::get('/update', 'CartController@redirect_to');
Route::get('/delete', 'CartController@redirect_to');
Route::get('/cart/order', 'CartController@store_order');
Route::get('/order', 'OrderController@place_order');
Route::get('/checkout', 'OrderController@thankyou');

Route::post('/add', 'CartController@store_item');
Route::post('/update', 'CartController@update_cart');
Route::post('/delete', 'CartController@remove_item');
Route::post('/cart/order', 'CartController@store_order');
Route::post('/checkout', 'OrderController@thankyou');
