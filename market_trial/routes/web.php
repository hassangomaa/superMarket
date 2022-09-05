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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/market', function () {
    return view('market/order_request');
})->middleware(['auth'])->name('order.index');


//
//Route::group( [
//    'middleware' => ['auth'],
//    'prefix' => 'market',
//    'namespace' => 'market',
//
//], function (){
//
//
//Route::get('/', [\App\Http\Controllers\OrderController::class,'index'])->name('order.index') ;
//Route::get('/logs', function () {
//    return view('/market/orderlogs');
//});
//Route::get('/manage', function () {
//    return view('/market/ordermanage');
//});
////
//});


require __DIR__.'/auth.php';
