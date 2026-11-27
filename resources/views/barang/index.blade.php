@extends('layouts.template')

@section('title', 'Data Barang')

@section('breadcrumb')
    <li class="breadcrumb-item active">Barang</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Daftar barang yang terdaftar dalam sistem</h3>
            <div class="card-tools">
                <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label for="filter_kategori" class="col-auto col-form-label">Filter Kategori:</label>
                <div class="col-md-3">
                    <select id="filter_kategori" class="form-select form-select-sm">
                        <option value="">- Semua Kategori -</option>
                        @foreach ($kategoris as $item)
                            <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <table class="table table-bordered table-striped table-hover table-sm w-100" id="table_barang">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
<script>
    const tableBarang = new DataTable('#table_barang', {
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('barang.list') }}",
            data: function (d) {
                d.kategori_id = document.getElementById('filter_kategori').value;
            }
        },
        columns: [
            { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
            { data: 'barang_kode' },
            { data: 'barang_nama' },
            { data: 'kategori.kategori_nama', name: 'kategori.kategori_nama', orderable: false },
            { data: 'harga_beli' },
            { data: 'harga_jual' },
            { data: 'aksi', orderable: false, searchable: false },
        ],
    });

    document.getElementById('filter_kategori').addEventListener('change', function () {
        tableBarang.ajax.reload();
    });
</script>
@endpush