@extends('layouts.app')

@section('content')

<div class="max-w-sm mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-xl font-bold text-center">Login</h1>

    <input type="text" placeholder="Username" class="w-full mt-4 p-2 border rounded">
    <input type="password" placeholder="Password" class="w-full mt-2 p-2 border rounded">

    <button class="w-full mt-4 bg-blue-600 text-white p-2 rounded">
        Login
    </button>

</div>

@endsection