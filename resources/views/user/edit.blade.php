@extends('layouts.template')

@section('title', 'Edit User')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Form Edit User</h3></div>
        <form action="{{ route('user.update', $user->user_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <select name="level_id" class="form-select @error('level_id') is-invalid @enderror" required>
                        <option value="">- Pilih Level -</option>
                        @foreach ($levels as $item)
                            <option value="{{ $item->level_id }}" @selected(old('level_id', $user->level_id) == $item->level_id)>
                                {{ $item->level_nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('level_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                           value="{{ old('username', $user->username) }}" required>
                    @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                           value="{{ old('nama', $user->nama) }}" required>
                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password <small class="text-muted">(Kosongkan jika tidak diganti)</small></label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </form>
    </div>
@endsection