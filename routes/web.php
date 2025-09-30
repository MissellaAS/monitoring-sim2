<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\MachineController;  
=======
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProductCustomerController;
>>>>>>> 8d015f0e5c3d450df370f075154b1212853f01a5
=======
use App\Http\Controllers\MachineController; // <-- betulkan nama controller
use App\Http\Controllers\OrderController;
>>>>>>> 880345a1ed947edd74a4e7b9cb999d7fc86529a5

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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8d015f0e5c3d450df370f075154b1212853f01a5
=======
>>>>>>> 880345a1ed947edd74a4e7b9cb999d7fc86529a5
Route::get('/order', function () {
    return view('order');
});

Route::get('/product-customer', [ProductCustomerController::class, 'index'])->name('product-customer.index');

<<<<<<< HEAD
Route::get('/show', function () {
    return view('show');
});
=======
Route::resource('machines', MachineController::class);

Route::resource('orders', OrderController::class);



>>>>>>> 880345a1ed947edd74a4e7b9cb999d7fc86529a5
