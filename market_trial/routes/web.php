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

//Route::get('/', function () {
//    // return "HOLAA";
//    return view('welcome');
//});

//Route::group( [
//    'prefix' => 'market'
//], function (){


    Route::get('/', function () {
       // return "HOLAA";
        return view('/market/order_request');
    });
    Route::get('/logs', function () {
        return view('/market/orderlogs');
    });
    Route::get('/manage', function () {
        return view('/market/ordermanage');
    });
//
//});

