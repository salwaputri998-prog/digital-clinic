<html>
<head>
    <title>List Kunjungan</title>
</head>
<body>
    <div>
        <h1>List Kunjungan</h1>
        <p>ID Kunjungan: {{ $id ?? 'K001' }}</p>
        <p>Nama Pasien: {{ $pasien ?? 'Salwa' }}</p>
        <p>Nama Dokter: {{ $dokter ?? 'Dr. Budi' }}</p>
        <p>Tanggal: {{ $tanggal ?? '2024-03-17' }}</p>
        <p>Keluhan: {{ $keluhan ?? 'Demam' }}</p>
    </div>
</body>
</html>