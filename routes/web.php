<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\MachineController;  
=======
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProductCustomerController;
>>>>>>> 8d015f0e5c3d450df370f075154b1212853f01a5

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

=======
>>>>>>> 8d015f0e5c3d450df370f075154b1212853f01a5
Route::get('/order', function () {
    return view('order');
});

Route::get('/product-customer', [ProductCustomerController::class, 'index'])->name('product-customer.index');

Route::get('/show', function () {
    return view('show');
});
