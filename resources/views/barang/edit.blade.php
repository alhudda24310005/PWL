@extends('layouts.template')

@section('title', 'Edit Barang')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Barang</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Edit Barang</h3></div>
        <form action="{{ route('barang.update', $barang->barang_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror" required>
                        <option value="">- Pilih Kategori -</option>
                        @foreach ($kategoris as $item)
                            <option value="{{ $item->kategori_id }}" @selected(old('kategori_id', $barang->kategori_id) == $item->kategori_id)>
                                {{ $item->kategori_nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('kategori_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Barang</label>
                    <input type="text" name="barang_kode" class="form-control @error('barang_kode') is-invalid @enderror"
                           value="{{ old('barang_kode', $barang->barang_kode) }}" required>
                    @error('barang_kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" name="barang_nama" class="form-control @error('barang_nama') is-invalid @enderror"
                           value="{{ old('barang_nama', $barang->barang_nama) }}" required>
                    @error('barang_nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Beli</label>
                    <input type="number" name="harga_beli" class="form-control @error('harga_beli') is-invalid @enderror"
                           value="{{ old('harga_beli', $barang->harga_beli) }}" required>
                    @error('harga_beli')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror"
                           value="{{ old('harga_jual', $barang->harga_jual) }}" required>
                    @error('harga_jual')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </form>
    </div>
@endsection