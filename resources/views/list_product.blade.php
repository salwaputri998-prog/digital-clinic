@extends('layout.list')

@section('title', 'List Produk')

@section('content')

<table border="1" cellpadding="10" cellspacing="0" 
style="border-collapse: collapse; width: 50%; text-align:center;">

    <tr style="background-color: #4CAF50; color: white;">
        <th>ID</th>
        <th>Produk</th>
    </tr>

    <tr>
        <td>{{ $id }}</td>
        <td>{{ $produk }}</td>
    </tr>

</table>

@endsection