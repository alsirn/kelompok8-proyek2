<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        /* Monochrome theme: black, white, gray */
    </style>
</head>
<body>
    <header>
        {{-- @include('baginAwal.header') --}}
    </header>
    @include('bagianAwal.nav')
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="bg-dark text-white text-center p-3 mt-4">
        @include('bagianAwal.footer')
        &copy; 2024 WebSaya.Com
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
