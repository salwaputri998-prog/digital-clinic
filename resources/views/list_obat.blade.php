<html>
<head>
    <title>List Obat</title>
</head>
<body>
    <div>
        <h1>List Obat</h1>
        <p>Kode Obat: {{ $id ?? 'OBT001' }}</p>
        <p>Nama Obat: {{ $nama ?? 'Paracetamol' }}</p>
        <p>Harga: {{ $harga ?? 'Rp 10.000' }}</p>
        <p>Stok: {{ $stok ?? '100' }}</p>
    </div>
</body>
</html>