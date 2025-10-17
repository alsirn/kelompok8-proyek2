<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('png/logo_fotustudio-removebg-preview.png') }}" alt="Logo" width="60" class="me-2">

        </a>

        <!-- Tombol toggle untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Isi Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Search Bar -->
            <form class="d-flex mx-auto" style="width: 300px;">
                <input class="form-control me-2" type="search" placeholder="Cari Produk untukmu" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <!-- Menu Navigasi -->
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"style="color:#1eaae9;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/shop') }}"style="color: #1eaae9;">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}"style="color: #1eaae9;">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}" style="color:#1eaae9;">Contact</a></li>
                
                <!-- Ikon -->
                <li class="nav-item ms-3">
                    <a href="{{ url('/cart') }}" style="color:#1eaae9;"><i class="bi bi-cart3 fs-5"></i></a>
                </li>
                @auth
                <li class="nav-item ms-3">
                    <span class="nav-link">Welcome, {{ auth()->user()->name }}</span>
                </li>
                <li class="nav-item ms-2">
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button class="btn btn-link nav-link" type="submit" style="color:#1eaae9;">Logout</button>
                    </form>
                </li>
                @else
                <li class="nav-item ms-3">
                    <a href="{{ url('/login') }}" style="color:#1eaae9;"><i class="bi bi-person-circle fs-5"></i></a>
                </li>
                <li class="nav-item ms-2">
                    <a href="{{ url('/register') }}" class="nav-link" style="color:#1eaae9;">Register</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>