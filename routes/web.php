<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PayModeController;
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

//Details

Route::get('/details', [DetailController::class, 'index'])->name('details.index');
Route::post('/details', [DetailController::class, 'store'])->name('details.store');
Route::get('/details/create', [DetailController::class, 'create'])->name('details.create');
Route::get('/details/{detail}', [DetailController::class, 'destroy'])->name('details.destroy');
Route::put('/details/{detail}', [DetailController::class, 'update'])->name('details.update');
Route::get('/details/{detail}/edit', [DetailController::class, 'edit'])->name('details.edit');

//PayMode 
Route::get('/paymodes', [PayModeController::class, 'index'])->name('paymodes.index');
Route::post('/paymodes', [PayModeController::class, 'store'])->name('paymodes.store');
Route::get('/paymodes/create', [PayModeController::class, 'create'])->name('paymodes.create');
Route::delete('/paymodes/{paymode}', [PayModeController::class, 'destroy'])->name('paymodes.destroy');
Route::put('/paymodes/{paymode}', [PayModeController::class, 'update'])->name('paymodes.update');
Route::get('/paymodes/{paymode}/edit', [PayModeController::class, 'edit'])->name('paymodes.edit');

