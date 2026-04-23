@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1 class="text-3xl font-bold text-blue-600">
        Selamat Datang di Klinik Digital
    </h1>

    <img src="{{ asset('images/dokter.png') }}" 
         class="mx-auto mt-4 rounded-lg shadow-lg w-60">

    <p class="mt-4 text-gray-600">
        Layanan kesehatan online terpercaya.
    </p>
</div>

@endsection