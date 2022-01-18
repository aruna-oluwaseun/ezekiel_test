<?php

use App\Http\Controllers\ListingController;
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




Route::resource('users', \App\Http\Controllers\UserController::class);

Route::resource('currencies', \App\Http\Controllers\ExchangeRateController::class);

Route::post('convert', [\App\Http\Controllers\ExchangeRateController::class,'convert'])->name('currency.convert');





