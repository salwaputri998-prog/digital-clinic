<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Klinik Digital')</title>
</head>
<body style="font-family: Arial; margin:0;">

    <!-- HEADER -->
    <header style="background: blue; color: white; padding: 15px;">
        @include('components.header')
    </header>

    <!-- CONTENT -->
    <div class="container" style="padding: 20px;">
        <h1>List Produk</h1>

        <main>
            @yield('content')
        </main>
    </div>

    <!-- FOOTER -->
    <footer style="background: gray; color: white; padding: 15px; margin-top:20px;">
        @include('components.footer')
    </footer>

</body>
</html>