@extends('layouts.template')

@section('title', 'Edit Kategori')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Edit Kategori</h3></div>
        <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kode Kategori</label>
                    <input type="text" name="kategori_kode" class="form-control @error('kategori_kode') is-invalid @enderror"
                           value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
                    @error('kategori_kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="kategori_nama" class="form-control @error('kategori_nama') is-invalid @enderror"
                           value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
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