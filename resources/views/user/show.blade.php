@extends('layouts.template')

@section('title', 'Detail User')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Detail User</h3></div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr><th style="width: 200px">ID</th><td>{{ $user->user_id }}</td></tr>
                <tr><th>Level</th><td>{{ $user->level->level_nama }}</td></tr>
                <tr><th>Username</th><td>{{ $user->username }}</td></tr>
                <tr><th>Nama</th><td>{{ $user->nama }}</td></tr>
                <tr><th>Password</th><td>********</td></tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
@endsection