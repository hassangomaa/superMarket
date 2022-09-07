<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('market.admin');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('market.admin');
})->middleware(['auth'])->name('dashboard');
//Route::get('/admin', function () {
//    return view('market.admin');
//})->middleware(['auth'])->name('admin');
//

////////////////// //
Route::group( [
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'namespace' => 'market',
], function (){
        /////////admin dashboard
    Route::get('/',    [\App\Http\Controllers\AdminController::class,'index']     )->name('admin');
    Route::get('/edit/', [\App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');

    //admin CRUD on Order
    Route::get('/order/show', [\App\Http\Controllers\OrderController::class,'show' ])->name('orders.show');
    Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('order');// Add one
    Route::get('/order/edit', [OrderController::class, 'edit'])->name('order.edit');
    Route::get('/type/edit/{id}', [OrderController::class, 'type'])->name('order.type');
    Route::post('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::post('/order/destroy/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::post('/order/create', [OrderController::class, 'store'])->name('order.store');
/////////////////////    //admin CRUD on Service
    Route::get('/service', [\App\Http\Controllers\ServiceController::class,'index' ])->name('services');
    Route::get('/service/show', [\App\Http\Controllers\ServiceController::class,'show' ])->name('services.show');
    Route::get('/service/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('service');
    Route::get('/service/edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');
    Route::post('/service/destroy/{id}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.destroy');
    Route::post('/service/create', [\App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
//////////////////////////////////////////admin user order Request:  Retrive, Delete, Update
Route::get('/order/requset', [\App\Http\Controllers\UserOrderController::class,'index' ])->name('orders');//R
Route::get('/order/requset/show', [\App\Http\Controllers\UserOrderController::class,'show' ])->name('orders.req.show');
Route::get('/order/requset/create', [\App\Http\Controllers\UserOrderController::class,'create' ])->name('orders.req.create');
Route::get('/order/requset/edit/{id}', [\App\Http\Controllers\UserOrderController::class,'edit' ])->name('orders.req.edit');
Route::post('/order/requset/update/{id}', [\App\Http\Controllers\UserOrderController::class,'update' ])->name('orders.req.update');
Route::post('/order/requset/destroy/{id}', [\App\Http\Controllers\UserOrderController::class,'destroy' ])->name('orders.req.delete');//D
Route::post('/order/requset/create', [\App\Http\Controllers\UserOrderController::class,'store' ])->name('orders.requset.store');//D

///////////////////////////////       USer Retrive and request
    Route::get('/user/order', [\App\Http\Controllers\UserOrderController::class,'index' ])->name('order.logs');
    Route::get('user/order/create', [\App\Http\Controllers\UserOrderController::class, 'create'])->name('order.request');
    Route::post('user/order/store', [\App\Http\Controllers\UserOrderController::class, 'store'])->name('user.service.store');

});


/////////////////////       USer Retrive and request
//Route::group( [
//    'middleware' => ['auth'],
//    'prefix' => '/user/',
//    'namespace' => 'market',
//], function (){
//    Route::get('/order', [\App\Http\Controllers\UserOrderController::class,'index' ])->name('order.logs');
//    Route::get('/order/create', [\App\Http\Controllers\UserOrderController::class, 'create'])->name('order.request');
//    Route::post('order/create', [\App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
//
//});


require __DIR__.'/auth.php';
