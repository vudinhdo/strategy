<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ImageController::class,'list']);

Route::get('/image/{slug}', [ImageController::class, 'detail'])->name('image.detail');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');