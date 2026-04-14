@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('navbar')

<div class="p-6 text-center">
    <h1 class="text-2xl font-bold">Tentang Kami</h1>

    <img src="{{ asset('images/hospital.jpg') }}" class="mx-auto mt-4 rounded-lg w-60">

    <p class="mt-3 text-gray-600">Platform kesehatan berbasis teknologi.</p>
</div>