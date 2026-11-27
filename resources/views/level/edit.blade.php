@extends('layouts.template')

@section('title', 'Edit Level')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('level.index') }}">Level</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Edit Level</h3></div>
        <form action="{{ route('level.update', $level->level_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kode Level</label>
                    <input type="text" name="level_kode" class="form-control @error('level_kode') is-invalid @enderror"
                           value="{{ old('level_kode', $level->level_kode) }}" required>
                    @error('level_kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Level</label>
                    <input type="text" name="level_nama" class="form-control @error('level_nama') is-invalid @enderror"
                           value="{{ old('level_nama', $level->level_nama) }}" required>
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