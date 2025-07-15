<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Kerjasama</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #000; }
        th, td { padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <h2>Data Kerjasama</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kerjasama as $k)
                <tr>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->email }}</td>
                    <td>{{ $k->pesan }}</td>
                    <td>{{ $k->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
