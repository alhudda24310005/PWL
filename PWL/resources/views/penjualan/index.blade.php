@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')
    <div class="section-head">
        <div>
            <p class="muted">Point of Sales / Transaksi</p>
            <h2 style="margin:0;">Ringkasan Penjualan</h2>
        </div>
        <span class="status">Contoh tampilan statis</span>
    </div>

    <div class="card" style="margin-bottom:18px;">
        <p class="muted">Nomor transaksi</p>
        <h3 style="margin-bottom:4px;">TRX-2026-001</h3>
        <p class="muted">Tanggal: {{ date('d-m-Y') }} · Kasir: Admin</p>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>No.</th><th>Produk</th><th>Qty</th><th>Harga</th><th>Subtotal</th></tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['qty'] }}</td>
                        <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($item['qty'] * $item['price'], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr><th colspan="4" style="text-align:right;">Total</th><th>Rp {{ number_format($total, 0, ',', '.') }}</th></tr>
            </tfoot>
        </table>
    </div>
    <p class="muted" style="margin-top:14px;">Halaman ini masih berupa tampilan statis, sesuai ketentuan Jobsheet 02.</p>
@endsection
