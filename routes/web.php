<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProductCustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Resource untuk produk (CRUD)
Route::resource('products', ProductController::class);

// Resource untuk mesin (CRUD)
Route::resource('machines', MachineController::class);

// Resource untuk orders (CRUD)
Route::resource('orders', OrderController::class);

// Product Customer (hanya index)
Route::get('/product-customer', [ProductCustomerController::class, 'index'])
    ->name('product-customer.index');

// Order page manual (jika butuh halaman statis)
Route::get('/order', function () {
    return view('order'); // resources/views/order.blade.php
});

Route::resource('productions', ProductionController::class);
