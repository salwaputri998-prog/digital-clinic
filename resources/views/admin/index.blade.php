<html>
<head>
    <title>Dashboard Klinik Digital</title>
    <style>
        /* CSS ini untuk membuat tampilan hijau seperti di foto kamu */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-family: sans-serif; }
        th { background-color: #4CAF50; color: white; padding: 12px; text-align: left; border: 1px solid #ddd; }
        td { padding: 12px; border: 1px solid #ddd; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Dashboard Klinik Digital</h1>
    <p>Menampilkan data dari fungsi <b>getData()</b> di Controller.</p>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang / Layanan</th>
                <th>Harga / Biaya (Rp)</th>
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