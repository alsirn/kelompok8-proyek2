@extends('bagianAwal.main')

@section('title', 'Shop - WebSaya.Com')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4" style="color: #1eaae9;">Our Products</h2>
    
    <div class="row g-4">
        <!-- Product Card 1 -->
        <div class="col-md-4 col-lg-3">
            <div class="card product-card h-100">
                <img src="{{ asset('png/1308724.png') }}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text text-muted">100k</p>
                    <button class="btn btn-add-cart w-100">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card product-card h-100">
                <img src="{{ asset('png/Screenshot 2025-10-09 204518.png') }}" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text text-muted">200k</p>
                    <button class="btn btn-add-cart w-100">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="col-md-4 col-lg-3">
            <div class="card product-card h-100">
                <img src="{{ asset('png/elaina.jpg') }}" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text text-muted">300k</p>
                    <button class="btn btn-add-cart w-100">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="col-md-4 col-lg-3">
            <div class="card product-card h-100">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 4">
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text text-muted">400k</p>
                    <button class="btn btn-add-cart w-100">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .product-card {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        object-fit: cover;
    }

    .btn-add-cart {
        background-color: #1eaae9;
        color: white;
        border-radius: 30px;
        padding: 8px 20px;
        transition: all 0.3s ease;
    }

    .btn-add-cart:hover {
        background-color: white;
        color: #1eaae9;
        border: 2px solid #1eaae9;
    }
</style>

@endsection