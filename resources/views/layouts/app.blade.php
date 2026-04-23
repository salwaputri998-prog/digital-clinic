<!DOCTYPE html>
<html>
<head>
    <title>Klinik Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <x-navbar />

    <div class="p-6">
        @yield('content')
    </div>

    <x-footer />

</body>
</html>