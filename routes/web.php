<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::prefix('auth')->group(function () {
    Route::get('register', [AuthController::class, 'getRegister'])->name('auth.register');
    Route::post('register', [AuthController::class, 'postRegister'])->name('auth.register');
    Route::get('login', [AuthController::class, 'getLogin'])->name('auth.login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('auth.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});
