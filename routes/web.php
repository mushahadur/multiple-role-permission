<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\DashboardController;

// Auth::routes();
Route::get('/', [HomeController::class, 'index']);


Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('roles', RolesController::class);
});



