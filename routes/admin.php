<?php

use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_process', [AuthController::class, 'login'])->name('login_process');

Route::middleware('auth:admin')->group(function () {
    Route::resource('news', AdminNewsController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

