<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
//AdmincpController//
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;

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
Route::get('/danh-muc/{slug}' ,[IndexController::class, 'category'])->name('category');
Route::get('/the-loai/{slug}' ,[IndexController::class, 'genre']);
Route::get('/quoc-gia/{slug}' ,[IndexController::class, 'country']);
Route::get('/phim' ,[IndexController::class, 'movie']);
Route::get('/xem-phim' ,[IndexController::class, 'watch']);
Route::get('/episode' ,[IndexController::class, 'episode']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route admin
Route::resource('category', CategoryController::class);
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);
Route::resource('movie', MovieController::class);
Route::resource('episode', EpisodeController::class);
