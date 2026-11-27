@extends('layouts.template')

@section('title', 'Detail Barang')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Barang</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Detail Barang</h3></div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr><th style="width: 200px">ID</th><td>{{ $barang->barang_id }}</td></tr>
                <tr><th>Kategori</th><td>{{ $barang->kategori->kategori_nama }}</td></tr>
                <tr><th>Kode Barang</th><td>{{ $barang->barang_kode }}</td></tr>
                <tr><th>Nama Barang</th><td>{{ $barang->barang_nama }}</td></tr>
                <tr><th>Harga Beli</th><td>Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}</td></tr>
                <tr><th>Harga Jual</th><td>Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</td></tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
@endsection