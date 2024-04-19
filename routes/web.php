<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CarController;

Route::get('/', [PageController::class,'welcome'])->name('welcome');
Route::get('/cars/index',[CarController::class,'index'])->name('cars.index');
Route::get('/cars/create',[CarController::class,'create'])->name('cars.create');
Route::post('/cars/store',[CarController::class,'store'])->name('cars.store');
Route::get('/cars/{car}/edit',[CarController::class,'edit'])->name('cars.edit');
Route::put('/cars/{car}/update',[CarController::class,'update'])->name('cars.update');
Route::resource('/orders',OrderController::class);