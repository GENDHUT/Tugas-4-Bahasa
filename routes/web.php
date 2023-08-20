<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use app\Models\User;


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
    return view('Home');
});

Route::get('/shop', function () {
    return view('Shop');
});

Route::get('/contact', function () {
    return view('Contact');
});

<<<<<<< HEAD
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authentic']);
Route::post('/logout', [LoginController::class, 'logout']);

=======
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentic']);
>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
<<<<<<< HEAD
=======

>>>>>>> 5579e37ecd7cf7acb03ed0853cb32ba47c757e87
