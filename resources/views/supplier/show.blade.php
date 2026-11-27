@extends('layouts.template')

@section('title', 'Detail Supplier')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Supplier</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Detail Supplier</h3></div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr><th style="width: 200px">ID</th><td>{{ $supplier->supplier_id }}</td></tr>
                <tr><th>Kode Supplier</th><td>{{ $supplier->supplier_kode }}</td></tr>
                <tr><th>Nama Supplier</th><td>{{ $supplier->supplier_nama }}</td></tr>
                <tr><th>Alamat</th><td>{{ $supplier->supplier_alamat }}</td></tr>
                <tr><th>No. Telepon</th><td>{{ $supplier->supplier_telp ?? '-' }}</td></tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('supplier.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
@endsection