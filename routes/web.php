<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'percobaan';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

// Route::get('/about', function () {
//     return 'NIM: 24.31.0005 - Nama: Abdulloh Al-Hudda';
// });

Route::get('/user/{name}/{nim}', function ($name, $nim) {
    return 'Nama saya ' . $name . ' NIM saya ' . $nim;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
})->whereNumber('id');

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/tentang', function () {
    return 'NIM: 24.31.0005, Nama: Abdulloh Al-Hudda';
})->name('about');

Route::get('/link-about', function () {
    return 'URL halaman about: ' . route('about');
});

Route::get('/ke-about', function () {
    return redirect()->route('about');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');

    Route::get('/users', function () {
        return 'Kelola User';
    })->name('users');
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

// Praktikum 4 - DB Facade
Route::get('/level', [LevelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);