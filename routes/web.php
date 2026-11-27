<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;

Route::get('/', DashboardController::class)->name('dashboard');

Route::prefix('level')->name('level.')->controller(LevelController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/list', 'list')->name('list');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->whereNumber('id')->name('show');
    Route::get('/{id}/edit', 'edit')->whereNumber('id')->name('edit');
    Route::put('/{id}', 'update')->whereNumber('id')->name('update');
    Route::delete('/{id}', 'destroy')->whereNumber('id')->name('destroy');
});

Route::prefix('kategori')->name('kategori.')->controller(KategoriController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/list', 'list')->name('list');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->whereNumber('id')->name('show');
    Route::get('/{id}/edit', 'edit')->whereNumber('id')->name('edit');
    Route::put('/{id}', 'update')->whereNumber('id')->name('update');
    Route::delete('/{id}', 'destroy')->whereNumber('id')->name('destroy');
});

Route::prefix('supplier')->name('supplier.')->controller(SupplierController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/list', 'list')->name('list');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->whereNumber('id')->name('show');
    Route::get('/{id}/edit', 'edit')->whereNumber('id')->name('edit');
    Route::put('/{id}', 'update')->whereNumber('id')->name('update');
    Route::delete('/{id}', 'destroy')->whereNumber('id')->name('destroy');
});

Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/list', 'list')->name('list');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->whereNumber('id')->name('show');
    Route::get('/{id}/edit', 'edit')->whereNumber('id')->name('edit');
    Route::put('/{id}', 'update')->whereNumber('id')->name('update');
    Route::delete('/{id}', 'destroy')->whereNumber('id')->name('destroy');
});

Route::prefix('barang')->name('barang.')->controller(BarangController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/list', 'list')->name('list');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->whereNumber('id')->name('show');
    Route::get('/{id}/edit', 'edit')->whereNumber('id')->name('edit');
    Route::put('/{id}', 'update')->whereNumber('id')->name('update');
    Route::delete('/{id}', 'destroy')->whereNumber('id')->name('destroy');
});


Route::get('/kategori/sql', function () {
    return DB::table('m_barang')
        ->orderBy('harga_jual', 'desc')
        ->limit(5)
        ->toRawSql();
});

Route::fallback(function () {
    return 'Halaman tidak ditemukan';
});