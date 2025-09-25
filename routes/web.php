<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\MachineController;

=======
use App\Http\Controllers\MachineController; // <-- betulkan nama controller
>>>>>>> 92d489519cf4b33ec254c463004b40e038d0d1c9

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



=======
>>>>>>> 92d489519cf4b33ec254c463004b40e038d0d1c9

Route::resource('machines', MachineController::class);

Route::get('/order', function () {
    return view('order');
});
