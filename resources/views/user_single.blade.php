
<!DOCTYPE html>
<html>
<head>
    <title>Data Single User</title>
</head>
<body>
    <h3>Data Single User</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level ID</th>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr>
    </table>
</body>
</html>
