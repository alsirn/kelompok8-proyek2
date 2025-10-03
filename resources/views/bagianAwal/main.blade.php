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
        :root{
            --bg-dark: #0d0d0d;
            --bg-light: #ffffff;
            --muted: #6c6c6c;
            --card-bg: #f5f5f5;
            --nav-bg: #1a1a1a;
            --accent: #2b2b2b;
        }
        body{
            background-color: var(--bg-light);
            color: #111;
        }
        .navbar, .bg-primary{
            background-color: var(--nav-bg) !important;
        }
        .navbar .nav-link{
            color: #e9e9e9 !important;
        }
        .navbar .nav-link.active{
            background-color: transparent;
            color: var(--bg-light) !important;
            font-weight: 600;
            border-bottom: 2px solid #e9e9e9;
        }
        header .alert{
            background-color: var(--card-bg) !important;
            color: #111;
            border: 0;
        }
        footer{
            background-color: var(--accent);
            color: #fff;
        }
        .card{
            background-color: white;
            border: 1px solid #e6e6e6;
        }
        table.table thead th{
            border-bottom: 2px solid #ddd;
            color: #222;
        }
        .list-group-item{
            background-color: #f8f8f8;
            border: 1px solid #eee;
        }
        a.brand{
            color: #fff;
            text-decoration: none;
            font-weight: 700;
        }
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
