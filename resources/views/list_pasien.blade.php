<html>
<head>
    <title>List Pasien</title>
</head>
<body>
    <div>
        <h1>List Pasien</h1>
        <p>ID Pasien: {{ $id ?? 'P001' }}</p>
        <p>Nama Pasien: {{ $nama ?? 'Salwa' }}</p>
        <p>Alamat: {{ $alamat ?? 'Jakarta' }}</p>
        <p>No. Telepon: {{ $telepon ?? '08123456789' }}</p>
    </div>
</body>
</html>