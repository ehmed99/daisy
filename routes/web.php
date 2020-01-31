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

Route::get('/test1', function () {
    return view('test.orderform');
});

Route::get('/test2', function () {
    return view('test.order');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@landingPage');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/orders', 'AdminController@orders');
    Route::resource('/client', 'ClientController');
    Route::resource('employ', 'EmployController');
    Route::resource('product', 'ProductController');
    Route::resource('discountVoucher', 'discountVoucherController');
    
});
Route::get('/dashboard', 'OrderController@dashboard')->middleware(['auth']);
Route::get('/order', 'OrderController@order')->middleware(['auth']);
Route::get('/record', 'RecordController@index')->name('record');
Route::post('/order', 'OrderController@submitOrder')->name('order')->middleware(['auth']);


