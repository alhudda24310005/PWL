<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>
    <h3>Tambah User</h3>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label>Username</label><br>
        <input type="text" name="username" value="{{ old('username') }}">
        @error('username')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}">
        @error('nama')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Password</label><br>
        <input type="password" name="password">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <label>Level</label><br>
        <select name="level_id">
            @foreach ($level as $l)
                <option value="{{ $l->level_id }}">
                    {{ $l->level_nama }}
                </option>
            @endforeach
        </select>
        @error('level_id')
            <p>{{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('user.index') }}">Kembali</a>
    </form>
</body>
</html>