<?php

use App\Http\Controllers\HolaqohController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\UstadzController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('holaqohs', HolaqohController::class);
Route::resource('santri', SantriController::class);
Route::resource('ustadzs', UstadzController::class);
Route::resource('kamar', KamarController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
