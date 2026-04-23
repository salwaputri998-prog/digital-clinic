@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('navbar')

<div class="p-6">
    <h1 class="text-2xl font-bold text-center">Dashboard</h1>

    <div class="grid grid-cols-3 gap-4 mt-6">
        <div class="bg-blue-500 text-white p-4 rounded">Data Pasien</div>
        <div class="bg-green-500 text-white p-4 rounded">Jadwal</div>
        <div class="bg-purple-500 text-white p-4 rounded">Laporan</div>
    </div>
</div>
