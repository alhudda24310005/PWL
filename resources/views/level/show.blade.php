@extends('layouts.template')

@section('title', 'Detail Level')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('level.index') }}">Level</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header"><h3 class="card-title">Detail Level</h3></div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr><th style="width: 200px">ID</th><td>{{ $level->level_id }}</td></tr>
                <tr><th>Kode Level</th><td>{{ $level->level_kode }}</td></tr>
                <tr><th>Nama Level</th><td>{{ $level->level_nama }}</td></tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('level.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
@endsection