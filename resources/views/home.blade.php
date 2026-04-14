@vite(['resources/css/app.css', 'resources/js/app.js'])

<nav class="bg-blue-600 p-4 text-white">
    <div class="flex justify-between">
        <h1 class="font-bold">Klinik Digital</h1>
        <div class="space-x-4">
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/service">Service</a>
            <a href="/contact">Contact</a>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            <a href="/dashboard">Dashboard</a>
        </div>
    </div>
</nav>

<div class="p-6 text-center">
    <h1 class="text-3xl font-bold text-blue-600">Selamat Datang di Klinik Digital</h1>

    <img src="{{ asset('images/dokter.png') }}" class="mx-auto mt-4 rounded-lg shadow-lg w-60">

    <p class="mt-4 text-gray-600">Layanan kesehatan online terpercaya.</p>
</div>