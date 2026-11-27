@extends('layouts.template')

@section('title', 'Edit Supplier')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Supplier</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Edit Supplier</h3></div>
        <form action="{{ route('supplier.update', $supplier->supplier_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kode Supplier</label>
                    <input type="text" name="supplier_kode" class="form-control @error('supplier_kode') is-invalid @enderror"
                           value="{{ old('supplier_kode', $supplier->supplier_kode) }}" required>
                    @error('supplier_kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Supplier</label>
                    <input type="text" name="supplier_nama" class="form-control @error('supplier_nama') is-invalid @enderror"
                           value="{{ old('supplier_nama', $supplier->supplier_nama) }}" required>
                    @error('supplier_nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="supplier_alamat" class="form-control @error('supplier_alamat') is-invalid @enderror" rows="3" required>{{ old('supplier_alamat', $supplier->supplier_alamat) }}</textarea>
                    @error('supplier_alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">No. Telepon</label>
                    <input type="text" name="supplier_telp" class="form-control @error('supplier_telp') is-invalid @enderror"
                           value="{{ old('supplier_telp', $supplier->supplier_telp) }}">
                    @error('supplier_telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('supplier.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </form>
    </div>
@endsection