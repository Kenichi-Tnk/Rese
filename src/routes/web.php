<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/register', [AuthController::class,'getRegister'])->name('register');
    Route::post('/register', [AuthController::class,'postRegister'])->name('register.post');

    Route::get('/login', [AuthController::class,'getLogin'])->name('login');
    Route::post('/login', [AuthController::class,'postLogin'])->name('login.post');

    Route::post('/logout', [AuthController::class,'getLogout'])->name('logout');
});

Route::get('/', [ShopController::class,'index'])->name('shops.index');


