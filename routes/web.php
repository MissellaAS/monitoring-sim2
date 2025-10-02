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
    return redirect('productions');
});


// Route::get('/productions/tabel',[ProductionController::class,'tabel'])->name('productions.tabel');

Route::get('/productions/tabel',[ProductionController::class,'tabel'])->name('productions.tabel');

Route::resource('productions', ProductionController::class);
Route::resource('machines', MachineController::class);

// Resource untuk orders (CRUD)
Route::resource('machines', MachineController::class);
Route::resource('orders', OrderController::class);


