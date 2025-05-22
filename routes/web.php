<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VendorController::class, 'index'])->name('vendors.index');
Route::get('vendors/{vendor:slug}', [VendorController::class, 'show'])->name('vendors.show');
Route::get('categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
