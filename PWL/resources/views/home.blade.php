@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <p style="text-transform:uppercase;letter-spacing:2px;font-size:12px;font-weight:700;">Point of Sales</p>
        <h2>Selamat datang di PWL POS</h2>
        <p>Aplikasi latihan Point of Sales untuk menampilkan kategori produk, profil pengguna berdasarkan parameter URL, dan ringkasan transaksi penjualan.</p>
        <a class="btn btn-light" href="{{ route('products.food-beverage') }}">Lihat Produk</a>
        <a class="btn" style="background:#ffffff22;border:1px solid #ffffff66;margin-left:6px;" href="{{ route('penjualan') }}">Lihat Penjualan</a>
    </section>

    <div class="grid">
        <article class="card">
            <h3>Products</h3>
            <p class="muted">Produk dikelompokkan ke dalam empat kategori.</p>
            <a class="btn" href="{{ route('products.food-beverage') }}">Buka kategori</a>
        </article>
        <article class="card">
            <h3>User</h3>
            <p class="muted">Contoh route dengan parameter ID angka dan nama berupa huruf.</p>
            <a class="btn" href="{{ route('user.show', ['id' => 123, 'name' => 'Andi']) }}">Lihat profil</a>
        </article>
        <article class="card">
            <h3>Penjualan</h3>
            <p class="muted">Contoh halaman transaksi statis sesuai jobsheet.</p>
            <a class="btn" href="{{ route('penjualan') }}">Buka transaksi</a>
        </article>
    </div>
@endsection
