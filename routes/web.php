<?php

use Illuminate\Support\Facades\Route;




Route::get('login',[\App\Http\Controllers\UserController::class,'login']);
Route::get('register',[\App\Http\Controllers\UserController::class,'register']);
Route::get('products',[\App\Http\Controllers\CategoryController::class,'index']);
Route::get('categories/create',[\App\Http\Controllers\CategoryController::class,'create']);
Route::post('categories/create',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('categories/{id}/edit',[\App\Http\Controllers\CategoryController::class,'edit']);
Route::post('categories/edit/{id}', [\App\Http\Controllers\CategoryController::class,'update'])->name('update');
Route::get('categories/{id}/delete',[\App\Http\Controllers\CategoryController::class,'destroy']);


Route::get('/', function () {
    return view('welcome');
});
