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
    return view('order_request')->name('order');
});
Route::get('/logs', function () {
    return view('orderlogs')->name('order.log');
});
Route::get('/manage', function () {
    return view('ordermanage')->name('order.manage');
});