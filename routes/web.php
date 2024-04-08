<?php

use Illuminate\Support\Facades\Route;

Route::get('categories',[\App\Http\Controllers\CategoryController::class,'index']);
Route::get('categories/create',[\App\Http\Controllers\CategoryController::class,'create']);


Route::get('/', function () {
    return view('welcome');
});
