<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MachineController; // <-- betulkan nama controller
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('products', ProductController::class);
Route::get('/order', function () {
    return view('order');
});


Route::resource('machines', MachineController::class);

Route::resource('orders', OrderController::class);



