<?php

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

Route::get('/',[App\Http\Controllers\PublicController::class, 'index']);
Route::get('/listproduct',[App\Http\Controllers\PublicController::class, 'listproduct']);
Route::get('/blog',[App\Http\Controllers\PublicController::class, 'blog']);
Route::get('/contact',[App\Http\Controllers\PublicController::class, 'contact']);
Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
