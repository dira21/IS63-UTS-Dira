<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\WeaponController;
// use App\Http\Controllers\SupplierController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::resource('categories', CategoryController::class)->except(['show']);
// Route::resource('weapons', WeaponController::class)->except(['show']);
// Route::resource('suppliers', SupplierController::class)->except(['show']);
