<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MachineController;


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
<<<<<<< HEAD




Route::resource('machines', MachineController::class);
=======
>>>>>>> 571735054c9551ea2043cc06c2413bd45a7059b0
Route::get('/order', function () {
    return view('order');
});
Route::get('/show', function () {
    return view('show');
});




Route::resource('machines', MachineController::class);



