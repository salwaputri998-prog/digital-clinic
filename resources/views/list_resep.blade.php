<html>
<head>
    <title>List Resep</title>
</head>
<body>
    <div>
        <h1>List Resep</h1>
        <p>No Resep: {{ $no_resep ?? 'R001' }}</p>
        <p>Nama Pasien: {{ $pasien ?? 'Salwa' }}</p>
        <p>Nama Dokter: {{ $dokter ?? 'Dr. Budi' }}</p>
        <p>Nama Obat: {{ $obat ?? 'Paracetamol' }}</p>
        <p>Dosis: {{ $dosis ?? '3x1' }}</p>
    </div>
</body>
</html>