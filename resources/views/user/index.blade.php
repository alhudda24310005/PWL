@extends('layouts.template')

@section('title', 'Data User')

@section('breadcrumb')
    <li class="breadcrumb-item active">User</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Daftar user yang terdaftar dalam sistem</h3>
            <div class="card-tools">
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm w-100" id="table_user">
                <thead>
                    <tr><th>No</th><th>Username</th><th>Nama</th><th>Level Pengguna</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
<script>
    const tableUser = new DataTable('#table_user', {
        processing: true,
        serverSide: true,
        ajax: { url: "{{ route('user.list') }}" },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'username' },
            { data: 'nama' },
            { data: 'level.level_nama', name: 'level.level_nama', orderable: false },
            { data: 'aksi', orderable: false, searchable: false },
        ],
    });
</script>
@endpush