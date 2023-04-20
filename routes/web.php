<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete-music');
Route::get('/add_music', [App\Http\Controllers\AddMusicController::class, 'index'])->name('add-music');
Route::post('/add_music', [App\Http\Controllers\AddMusicController::class, 'store'])->name('store-music');
