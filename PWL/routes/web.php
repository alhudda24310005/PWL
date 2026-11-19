<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\KategoriController;

Route::get('/', HomeController::class)->name('home');

Route::prefix('category')->name('products.')->controller(ProductController::class)->group(function () {
    Route::get('/food-beverage', 'foodBeverage')->name('food-beverage');
    Route::get('/beauty-health', 'beautyHealth')->name('beauty-health');
    Route::get('/home-care', 'homeCare')->name('home-care');
    Route::get('/baby-kid', 'babyKid')->name('baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])
    ->whereNumber('id')
    ->where('name', '[A-Za-z]+')
    ->name('user.show');

Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');

Route::get('/kategori', [KategoriController::class, 'index']);

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
