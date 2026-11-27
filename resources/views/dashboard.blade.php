@extends('layouts.template')

@section('title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <div class="row">
        @foreach ([
            ['Pengguna', $jumlahUser, 'bi-people', 'primary'],
            ['Kategori', $jumlahKategori, 'bi-tags', 'success'],
            ['Barang', $jumlahBarang, 'bi-box-seam', 'warning'],
            ['Transaksi', $jumlahPenjualan, 'bi-cart-check', 'danger'],
        ] as [$label, $nilai, $ikon, $warna])
            <div class="col-lg-3 col-6 mb-3">
                <div class="card text-bg-{{ $warna }} h-100">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="mb-0">{{ $nilai }}</h3>
                            <p class="mb-0">{{ $label }}</p>
                        </div>
                        <i class="bi {{ $ikon }} display-6 opacity-50"></i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="card">
        <div class="card-header"><h3 class="card-title">Selamat Datang</h3></div>
        <div class="card-body">
            Ini adalah halaman utama aplikasi Point of Sales (PoS) sederhana.
        </div>
    </div>
@endsection