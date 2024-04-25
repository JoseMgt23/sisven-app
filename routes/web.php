<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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

//Custmoers

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
