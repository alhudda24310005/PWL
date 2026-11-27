@extends('layouts.template')

@section('title', 'Data Supplier')

@section('breadcrumb')
    <li class="breadcrumb-item active">Supplier</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Daftar supplier yang terdaftar dalam sistem</h3>
            <div class="card-tools">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm w-100" id="table_supplier">
                <thead>
                    <tr><th>No</th><th>Kode</th><th>Nama Supplier</th><th>Alamat</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
<script>
    const tableSupplier = new DataTable('#table_supplier', {
        processing: true,
        serverSide: true,
        ajax: { url: "{{ route('supplier.list') }}" },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'supplier_kode' },
            { data: 'supplier_nama' },
            { data: 'supplier_alamat' },
            { data: 'aksi', orderable: false, searchable: false },
        ],
    });
</script>
@endpush