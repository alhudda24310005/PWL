
<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h3>Data User</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level ID</th>
        </tr>

        @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
