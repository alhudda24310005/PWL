@extends('layouts.template')

@section('title', 'Tambah Level')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('level.index') }}">Level</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Tambah Level</h3></div>
        <form action="{{ route('level.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kode Level</label>
                    <input type="text" name="level_kode" class="form-control @error('level_kode') is-invalid @enderror"
                           value="{{ old('level_kode') }}" required>
                    @error('level_kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Level</label>
                    <input type="text" name="level_nama" class="form-control @error('level_nama') is-invalid @enderror"
                           value="{{ old('level_nama') }}" required>
                    @error('level_nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('level.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </form>
    </div>
@endsection