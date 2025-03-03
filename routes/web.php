<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('/dashboard',[AdminController::class , 'index']);
