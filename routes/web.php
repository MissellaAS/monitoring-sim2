<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProductCustomerController;
=======
use App\Http\Controllers\MachineController; // <-- betulkan nama controller
use App\Http\Controllers\OrderController;
>>>>>>> baddb4984722d94ff0cf9a4ca77334604c7d8d7f

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('products', ProductController::class);

Route::resource('machines', MachineController::class);
Route::get('/order', function () {
    return view('order');
});

Route::get('/product-customer', [ProductCustomerController::class, 'index'])->name('product-customer.index');

Route::resource('machines', MachineController::class);

Route::resource('orders', OrderController::class);



