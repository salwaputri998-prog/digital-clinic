<html>
<head>
    <title>Dashboard Pasien - Klinik Digital</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-family: sans-serif; }
        th { background-color: #4CAF50; color: white; padding: 12px; text-align: left; border: 1px solid #ddd; }
        td { padding: 12px; border: 1px solid #ddd; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Dashboard Pasien</h1>
    <p>Menampilkan daftar layanan dan biaya pendaftaran dari fungsi <b>getData()</b>.</p>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Layanan / Barang</th>
                <th>Biaya (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama'] }}</td>
                <td>{{ number_format($dataku['biaya'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ url('/') }}">← Kembali ke Home</a>
</body>
</html>