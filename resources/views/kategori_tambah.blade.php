
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
</head>
<body>
    <h3>Form Tambah Kategori</h3>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <label>Kode Kategori</label><br>
        <input type="text" name="kategori_kode"
               value="{{ old('kategori_kode') }}">
        @error('kategori_kode')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Nama Kategori</label><br>
        <input type="text" name="kategori_nama"
               value="{{ old('kategori_nama') }}">
        @error('kategori_nama')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Simpan</button>
        <a href="/kategori">Kembali</a>
    </form>
</body>
</html>
