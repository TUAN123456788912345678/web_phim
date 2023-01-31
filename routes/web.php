<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/' ,[IndexController::class, 'home'])->name('homepage');
Route::get('/danh-muc' ,[IndexController::class, 'category'])->name('category');
Route::get('/the-loai' ,[IndexController::class, 'genre']);
Route::get('/quoc-gia' ,[IndexController::class, 'country']);
Route::get('/phim' ,[IndexController::class, 'movie']);
Route::get('/xem-phim' ,[IndexController::class, 'watch']);
Route::get('/episode' ,[IndexController::class, 'episode']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
