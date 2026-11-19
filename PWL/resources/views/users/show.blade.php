@extends('layouts.app')

@section('title', 'Profil User')

@section('content')
    <div class="section-head">
        <div>
            <p class="muted">Data pengguna dari parameter URL</p>
            <h2 style="margin:0;">Profil Pengguna</h2>
        </div>
    </div>

    <div class="card" style="max-width:620px;">
        <p class="muted">Informasi yang diambil dari URL</p>
        <p><strong>ID Pengguna:</strong> {{ $id }}</p>
        <p><strong>Nama Pengguna:</strong> {{ $name }}</p>
        <p class="muted">Contoh URL: /user/123/name/Andi</p>
        <a class="btn" href="{{ route('user.show', ['id' => 456, 'name' => 'Budi']) }}">Contoh user lain</a>
    </div>
@endsection
