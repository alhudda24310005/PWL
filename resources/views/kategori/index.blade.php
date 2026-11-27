@extends('layouts.template')

@section('title', 'Data Kategori')

@section('breadcrumb')
    <li class="breadcrumb-item active">Kategori</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Daftar kategori barang yang terdaftar dalam sistem</h3>
            <div class="card-tools">
                <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm w-100" id="table_kategori">
                <thead>
                    <tr><th>No</th><th>Kode Kategori</th><th>Nama Kategori</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
<script>
    const tableKategori = new DataTable('#table_kategori', {
        processing: true,
        serverSide: true,
        ajax: { url: "{{ route('kategori.list') }}" },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'kategori_kode' },
            { data: 'kategori_nama' },
            { data: 'aksi', orderable: false, searchable: false },
        ],
    });
</script>
@endpush