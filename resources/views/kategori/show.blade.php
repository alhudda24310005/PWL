@extends('layouts.template')

@section('title', 'Detail Kategori')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Detail Kategori</h3></div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr><th style="width: 200px">ID</th><td>{{ $kategori->kategori_id }}</td></tr>
                <tr><th>Kode Kategori</th><td>{{ $kategori->kategori_kode }}</td></tr>
                <tr><th>Nama Kategori</th><td>{{ $kategori->kategori_nama }}</td></tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
@endsection