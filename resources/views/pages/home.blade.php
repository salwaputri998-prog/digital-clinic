@extends('layouts.app')

@section('content')

<div class="text-center">

    <h1 class="text-4xl font-bold text-blue-600">
        Selamat Datang di Klinik Digital
    </h1>

    <p class="mt-3 text-gray-600">
        Layanan kesehatan modern & terpercaya
    </p>

    <img src="{{ asset('images/dokter.png') }}" 
         class="mx-auto mt-6 w-40 rounded-lg shadow">

</div>

<div class="grid md:grid-cols-3 gap-6 mt-10">

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h2 class="font-bold text-blue-600">Konsultasi</h2>
        <p class="text-gray-600 mt-2">Chat dokter langsung</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h2 class="font-bold text-green-600">Cek Kesehatan</h2>
        <p class="text-gray-600 mt-2">Pantau kondisi tubuh</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h2 class="font-bold text-purple-600">Vaksinasi</h2>
        <p class="text-gray-600 mt-2">Perlindungan kesehatan</p>
    </div>

</div>

@endsection