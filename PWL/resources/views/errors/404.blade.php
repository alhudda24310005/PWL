@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <div class="card" style="text-align:center;padding:48px 20px;">
        <p style="font-size:54px;font-weight:800;color:#2563eb;margin:0;">404</p>
        <h2>Halaman tidak ditemukan</h2>
        <p class="muted">URL yang kamu buka tidak tersedia atau parameternya tidak sesuai.</p>
        <a class="btn" href="{{ route('home') }}">Kembali ke Home</a>
    </div>
@endsection
