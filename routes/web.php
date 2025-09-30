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


Route::resource('machines', MachineController::class);

Route::resource('orders', OrderController::class);



