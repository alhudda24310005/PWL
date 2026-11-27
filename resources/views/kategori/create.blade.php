@extends('layouts.template')

@section('title', 'Tambah Kategori')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Tambah Kategori</h3></div>
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kode Kategori</label>
                    <input type="text" name="kategori_kode" class="form-control @error('kategori_kode') is-invalid @enderror"
                           value="{{ old('kategori_kode') }}" required>
                    @error('kategori_kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="kategori_nama" class="form-control @error('kategori_nama') is-invalid @enderror"
                           value="{{ old('kategori_nama') }}" required>
                    @error('kategori_nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </form>
    </div>
@endsection