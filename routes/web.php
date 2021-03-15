<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolaBarangController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])
        ->name('admin.home')
        ->middleware('is_admin');


