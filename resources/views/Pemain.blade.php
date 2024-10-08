<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain MU</title>
</head>
<body>
    <h1>Daftar Pemain Manchester United</h1>
    <table class="table table-stripped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama Pemain</th>
        <th>Nomor Punggung</th>
        <th>Posisi</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
        <tr>
            <td>{{ $pemain->id }}</td>
            <td>{{ $pemain->nama_pemain }}</td>
            <td>{{ $pemain->no_punggung }}</td>
            <td>{{ $pemain->posisi }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>