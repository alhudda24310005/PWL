@extends('layouts.template')

@section('title', 'Data Level')

@section('breadcrumb')
    <li class="breadcrumb-item active">Level</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Daftar level pengguna yang terdaftar dalam sistem</h3>
            <div class="card-tools">
                <a href="{{ route('level.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm w-100" id="table_level">
                <thead>
                    <tr><th>No</th><th>Kode Level</th><th>Nama Level</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
<script>
    const tableLevel = new DataTable('#table_level', {
        processing: true,
        serverSide: true,
        ajax: { url: "{{ route('level.list') }}" },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'level_kode' },
            { data: 'level_nama' },
            { data: 'aksi', orderable: false, searchable: false },
        ],
    });
</script>
@endpush