<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category', [CategoryController ::class,'index'])->name('category.index');
Route::get('/category', [CategoryController ::class,'store'])->name('category.store');
Route::get('/category/create', [CategoryController ::class,'create'])->name('category.create');