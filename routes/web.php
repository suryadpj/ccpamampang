<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseidController;
use App\Http\Controllers\SinglevinController;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/caridata', [App\Http\Controllers\HomeController::class, 'caridata'])->name('home')->middleware('auth');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('home')->middleware('auth');

Route::resource('databaseid', DatabaseidController::class);
Route::resource('singlevin', SinglevinController::class);
