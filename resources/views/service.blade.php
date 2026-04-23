@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('navbar')

<div class="p-6">
    <h1 class="text-2xl font-bold text-center">Layanan Kami</h1>

    <div class="grid grid-cols-3 gap-4 mt-6">
        <div class="bg-white p-4 shadow rounded">
            <h2 class="font-bold">Konsultasi</h2>
            <p>Online dengan dokter</p>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h2 class="font-bold">Vaksinasi</h2>
            <p>Layanan vaksin</p>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h2 class="font-bold">Checkup</h2>
            <p>Pemeriksaan kesehatan</p>
        </div>
    </div>
</div>
