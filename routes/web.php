<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'welcome'])->name('welcome');
Route::get('/cars/index',[PageController::class,'index'])->name('cars.index');
Route::resource('/orders',OrderController::class);