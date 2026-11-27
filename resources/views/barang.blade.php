
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>

    <h2>Data Barang</h2>

    <a href="{{ url('/barang/tambah') }}">+ Tambah Barang</a>

    <br><br>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
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

        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->barang_kode }}</td>
                    <td>{{ $item->barang_nama }}</td>
                    <td>{{ $item->kategori->kategori_nama ?? '-' }}</td>
                    <td>Rp{{ number_format($item->harga_beli, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                    <td>
                        <a href="#">Edit</a> |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" align="center">
                        Belum ada data barang.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
