<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Admin
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'getLogin'])->name('admin.auth.login');
});

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
