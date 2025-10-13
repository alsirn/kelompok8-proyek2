
@extends('bagianAwal.main')

@section('title', 'FotoStudio - Your Trusted Photography Store')

@section('content')
<!-- Hero Banner -->
<div class="hero-banner" id="hero">
    <div class="hero-content">
        <h1 class="animate-fade-in">Welcome To FotoStudio</h1>
        <p class="hero-subtitle animate-fade-in-delayed">FotoStudio Punya Amal</p>
        <a href="#contact" class="btn btn-primary btn-lg mt-4 animate-fade-in-delayed">Contact Us</a>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
        <div class="arrow-scroll">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- Intersection Observer Target -->
<div id="navbar-observer-target"></div>

<!-- Description Section -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <p class="lead">
                We provide high-quality photography equipment and excellent customer service to make your creative journey easy and enjoyable. From professional cameras to essential accessories, find everything you need to capture life's precious moments.
            </p>
        </div>
    </div>
</div>

<!-- Featured Products -->
<div class="container mb-5">
    <h2 class="text-center mb-4">Products</h2>
    <div class="product-scroll">
        <div class="product-row">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="/png/PaketBiasa.jpg" alt="Product 1">
                </div>
                <div class="product-details">
                    <h3>Paket Biasa</h3>
                    <p class="price">200.00</p>
                    <a href="/shop" class="btn btn-primary">Menu Detail</a>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="/png/PaketKeluarga.jpg" alt="Product 2">
                </div>
                <div class="product-details">
                    <h3>Paket Keluarga</h3>
                    <p class="price">400.00</p>
                    <a href="/shop" class="btn btn-primary">Menu Detail</a>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="/png/PaketPengantin.jpg" alt="Product 3">
                </div>
                <div class="product-details">
                    <h3>Paket Wedding</h3>
                    <p class="price">1000.00</p>
                    <a href="/shop" class="btn btn-primary">Menu Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="/shop" class="btn btn-lg btn-outline-primary">Liat Semua Product</a>
    </div>
</div>

<!-- Gallery Section -->
<div class="container mb-5">
    <h2 class="text-center mb-4">Gallery</h2>
    <div class="gallery-grid">
        <!-- Gallery Item 1 -->
        <div class="gallery-item">
            <img src="/png/1308724.png" alt="Wedding Session">
            <div class="gallery-overlay">
                <div class="gallery-caption">Wedding Session</div>
            </div>
        </div>
        <!-- Gallery Item 2 -->
        <div class="gallery-item">
            <img src="/png/1308724.png" alt="Outdoor Portrait">
            <div class="gallery-overlay">
                <div class="gallery-caption">Outdoor Portrait</div>
            </div>
        </div>
        <!-- Gallery Item 3 -->
        <div class="gallery-item">
            <img src="/png/1308724.png" alt="Family Session">
            <div class="gallery-overlay">
                <div class="gallery-caption">Family Session</div>
            </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="gallery-item">
            <img src="/png/1308724.png" alt="Pre-wedding">
            <div class="gallery-overlay">
                <div class="gallery-caption">Pre-wedding</div>
            </div>
        </div>
        <!-- Gallery Item 5 -->
        <div class="gallery-item">
            <img src="/png/1308724.png" alt="Studio Portrait">
            <div class="gallery-overlay">
                <div class="gallery-caption">Studio Portrait</div>
            </div>
        </div>
        <!-- Gallery Item 6 -->
        <div class="gallery-item">
            <img src="/png/1308724.png" alt="Children Session">
            <div class="gallery-overlay">
                <div class="gallery-caption">Children Session</div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="/gallery" class="btn btn-lg btn-outline-primary">Liat Semua Galerry</a>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="container-fluid contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <form class="contact-form p-4">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-info p-4">
                    <h3 class="mb-4">Get in Touch</h3>
                    <div class="contact-item mb-3">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p>Singajaya<br>Gatau</p>
                    </div>
                    <div class="contact-item mb-3">
                        <i class="bi bi-telephone-fill"></i>
                        <p>Gtaua</p>
                    </div>
                    <div class="contact-item mb-3">
                        <i class="bi bi-envelope-fill"></i>
                        <p>Gatau@gmail.com</p>
                    </div>
                    <div class="social-links mt-4">
                        <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-color: #1eaae9;
    }

    /* Hero Banner */
    .hero-banner {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(30, 170, 233, 0.7)),
                    url('/png/1308724.png') center/cover no-repeat fixed;
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 0;
        padding: 0;
        color: white;
        text-align: center;
    }

    .hero-content {
        max-width: 800px;
        padding: 0 20px;
        z-index: 2;
    }

    .hero-banner h1 {
        font-size: 4.5rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        opacity: 0;
        transform: translateY(20px);
    }

    .hero-subtitle {
        font-size: 1.8rem;
        opacity: 0;
        transform: translateY(20px);
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .scroll-indicator:hover {
        opacity: 1;
    }

    .mouse {
        width: 26px;
        height: 40px;
        border: 2px solid #fff;
        border-radius: 20px;
        position: relative;
    }

    .wheel {
        width: 4px;
        height: 8px;
        background-color: #fff;
        border-radius: 2px;
        position: absolute;
        top: 6px;
        left: 50%;
        transform: translateX(-50%);
        animation: scroll 2s ease infinite;
    }

    .arrow-scroll {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
    }

    .arrow-scroll span {
        display: block;
        width: 10px;
        height: 10px;
        border-bottom: 2px solid #fff;
        border-right: 2px solid #fff;
        transform: rotate(45deg);
        animation: arrow 2s infinite;
        opacity: 0;
    }

    .arrow-scroll span:nth-child(2) {
        animation-delay: -0.2s;
    }

    .arrow-scroll span:nth-child(3) {
        animation-delay: -0.4s;
    }

    /* Animations */
    @keyframes scroll {
        0% { transform: translate(-50%, 0); opacity: 1; }
        50% { transform: translate(-50%, 10px); opacity: 0; }
        100% { transform: translate(-50%, 0); opacity: 1; }
    }

    @keyframes arrow {
        0% { opacity: 0; transform: rotate(45deg) translate(-20px, -20px); }
        50% { opacity: 1; }
        100% { opacity: 0; transform: rotate(45deg) translate(20px, 20px); }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease forwards;
    }

    .animate-fade-in-delayed {
        animation: fadeIn 1s ease 0.5s forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Navbar Observer Target */
    #navbar-observer-target {
        position: absolute;
        top: 90vh;
        left: 0;
        right: 0;
        height: 1px;
        visibility: hidden;
    }

    /* Products Section */
    .product-scroll {
        overflow-x: auto;
        padding: 20px 0;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none;  /* Internet Explorer 10+ */
    }

    .product-scroll::-webkit-scrollbar {
        display: none; /* WebKit */
    }

    .product-row {
        display: flex;
        gap: 2rem;
        padding: 0 15px;
        min-width: min-content;
    }

    .product-card {
        flex: 0 0 300px;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    .product-image {
        height: 200px;
        overflow: hidden;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .product-details {
        padding: 1.5rem;
        text-align: center;
    }

    .product-details h3 {
        margin-bottom: 0.5rem;
        color: #333;
        font-size: 1.25rem;
    }

    .price {
        color: var(--primary-color);
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .btn.btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        border-radius: 30px;
        padding: 8px 25px;
        transition: all 0.3s ease;
    }

    .btn.btn-primary:hover {
        background-color: white;
        color: var(--primary-color) !important;
        border-color: var(--primary-color);
    }

    .btn.btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
        border-radius: 30px;
        padding: 10px 30px;
        transition: all 0.3s ease;
    }

    .btn.btn-outline-primary:hover {
        background-color: var(--primary-color);
        color: white !important;
        border-color: var(--primary-color);
    }

    /* Gallery Section */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        padding: 0 15px;
    }

    .gallery-item {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        aspect-ratio: 3/2;
        cursor: pointer;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(30, 170, 233, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-caption {
        color: white;
        font-size: 1.2rem;
        font-weight: 500;
        text-align: center;
        padding: 1rem;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-caption {
        transform: translateY(0);
    }

    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Contact Section */
    .contact-section {
        background-color: #f8f9fa;
    }

    .contact-form {
        background: white;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
    }

    .contact-info {
        background: white;
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
        height: 100%;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #dee2e6;
        padding: 0.75rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(30, 170, 233, 0.25);
    }

    .contact-item {
        display: flex;
        align-items: start;
        gap: 15px;
    }

    .contact-item i {
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    .contact-item p {
        margin: 0;
        color: #666;
    }

    .social-links a {
        color: var(--primary-color);
        font-size: 1.5rem;
        transition: transform 0.3s ease;
        display: inline-block;
    }

    .social-links a:hover {
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-banner {
            padding: 60px 20px;
            min-height: 300px;
        }

        .hero-banner h1 {
            font-size: 2.5rem;
            word-wrap: break-word;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            padding: 0 10px;
        }

        .product-scroll {
            margin: 0 -15px;
            padding: 20px 15px;
        }

        .product-card {
            flex: 0 0 250px;
        }

        .lead {
            padding: 0 20px;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .hero-banner h1 {
            font-size: 2rem;
        }

        .product-card {
            flex: 0 0 200px;
        }

        .product-details h3 {
            font-size: 1.1rem;
        }
    }
</style>


<!-- Add Script Section -->


@endsection
