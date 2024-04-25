<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', [CategoryController ::class,'index'])->name('categories.index');
Route::get('/categories', [CategoryController ::class,'store'])->name('categories.store');
Route::get('/categories/create', [CategoryController ::class,'create'])->name('categories.create');
Route::get('/categories/{category}', [CategoryController ::class,'destroy'])->name('categories.destroy');
Route::get('/categories/{category}', [CategoryController ::class,'update'])->name('categories.update');
Route::get('/categories/{category}/edit', [CategoryController ::class,'edit'])->name('categories.edit');