<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineController;
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
    return redirect('productions');
});

<<<<<<< HEAD
Route::resource('products', ProductController::class);

Route::resource('machines', MachineController::class);
Route::get('/order', function () {
    return view('order');
});
=======

// Route::get('/productions/tabel',[ProductionController::class,'tabel'])->name('productions.tabel');

Route::get('/productions/tabel',[ProductionController::class,'tabel'])->name('productions.tabel');
>>>>>>> adf116814cd762ba48b17dfa54f165d890c7f1ec

Route::resource('productions', ProductionController::class);
Route::resource('machines', MachineController::class);

// Resource untuk orders (CRUD)
Route::resource('orders', OrderController::class);
