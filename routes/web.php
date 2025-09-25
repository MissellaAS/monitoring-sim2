<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MachineController; // <-- betulkan nama controller

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
<<<<<<< HEAD

Route::resource('machines', MachineController::class);

Route::get('/order', function () {
    return view('order');
});
=======
Route::get('/order', function () {
    return view('order');
});


Route::resource('machines', MachineController::class);



>>>>>>> 571735054c9551ea2043cc06c2413bd45a7059b0
