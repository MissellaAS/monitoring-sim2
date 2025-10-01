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
Route::resource('productions', ProductController::class);

Route::resource('machines', MachineController::class);
Route::get('/order', function () {
    return view('order');
});

Route::resource('machines', MachineController::class);

// Resource untuk orders (CRUD)
Route::resource('orders', OrderController::class);

// Product Customer (hanya index)
Route::get('/productions-customer', [ProductCustomerController::class, 'index'])
    ->name('productions-customer.index');

// Order page manual (jika butuh halaman statis)
Route::get('/order', function () {
    return view('order'); // resources/views/order.blade.php
});

Route::resource('productions', ProductionController::class);
