<?php

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\OneCategoryController;
use App\Http\Controllers\OneNewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [OneCategoryController::class, 'getOneCategory'])->name('getOneCategory');
Route::get('news/{id}', [OneNewsController::class, 'getOneNews'])->name('getOneNews');
