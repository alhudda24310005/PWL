
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>

    <h2>Tambah Barang</h2>

    <form action="{{ url('/barang') }}" method="POST">
        @csrf

        <div>
            <label>Kode Barang</label><br>
            <input type="text" name="barang_kode" required>
        </div>

        <br>

        <div>
            <label>Nama Barang</label><br>
            <input type="text" name="barang_nama" required>
        </div>

        <br>

        <div>
            <label>Kategori Barang</label><br>
            <select name="kategori_id" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->kategori_id }}">
                        {{ $item->kategori_nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label>Harga Beli</label><br>
            <input type="number" name="harga_beli" required>
        </div>

        <br>

        <div>
            <label>Harga Jual</label><br>
            <input type="number" name="harga_jual" required>
        </div>

        <br>

        <button type="submit">Simpan Barang</button>
        <a href="{{ url('/barang') }}">Kembali</a>
    </form>

</body>
</html>
