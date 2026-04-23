@extends('layouts.app')

@section('content')

<div class="max-w-sm mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-xl font-bold text-center">Register</h1>

    <input type="text" placeholder="Nama" class="w-full mt-4 p-2 border rounded">
    <input type="email" placeholder="Email" class="w-full mt-2 p-2 border rounded">

    <button class="w-full mt-4 bg-green-600 text-white p-2 rounded">
        Daftar
    </button>

</div>

@endsection