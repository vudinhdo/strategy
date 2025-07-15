<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ImageController::class,'list']);

Route::get('/image/{slug}', [ImageController::class, 'detail'])->name('image.detail');
// Route::get('/images/tag/{tag}', [App\Http\Controllers\ImageController::class, 'listByTag']);