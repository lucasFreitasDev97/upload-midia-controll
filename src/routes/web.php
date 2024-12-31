<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('categories/update/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
