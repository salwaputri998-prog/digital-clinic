@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('navbar')

<div class="p-6 flex justify-center">
    <div class="bg-white p-6 rounded shadow w-80">
        <h1 class="text-xl font-bold text-center">Register</h1>

        <input type="text" placeholder="Nama" class="w-full mt-4 p-2 border rounded">
        <input type="email" placeholder="Email" class="w-full mt-2 p-2 border rounded">

        <button class="w-full mt-4 bg-green-600 text-white p-2 rounded">
            Daftar
        </button>
    </div>
</div>