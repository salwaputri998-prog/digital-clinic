@vite(['resources/css/app.css', 'resources/js/app.js'])

@include('navbar')

<div class="bg-gray-100 min-h-screen p-6 text-center">

    <h1 class="text-2xl font-bold text-blue-600">Contact</h1>

    <p class="mt-4">Email: klinik@email.com</p>
    <p>Telepon: 08123456789</p>

    <!-- FLOWBITE BUTTON -->
    <button 
        data-modal-target="popup" 
        data-modal-toggle="popup"
        class="mt-4 bg-green-600 text-white px-4 py-2 rounded">
        Info Klinik
    </button>

    <!-- FLOWBITE MODAL -->
    <div id="popup" class="hidden mt-4">
        <div class="bg-white p-4 rounded shadow">
            <p>Klinik buka setiap hari pukul 08.00 - 20.00</p>
        </div>
    </div>

</div>