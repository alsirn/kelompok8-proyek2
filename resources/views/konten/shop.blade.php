@extends('bagianAwal.main')

@section('title', 'Shop - WebSaya.Com')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-5" style="color: #1eaae9; font-weight: 600;">
        Pilih paket untuk menciptakan momen indah Anda
    </h2>

    <div class="row g-4">
        <!-- Personal -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm h-100 border-0 rounded-4">
                <img src="{{ asset('png/fotoSingle FOTU.jpg') }}" class="card-img-top rounded-top-4" alt="Personal">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Personal Gallery</h5>
                    <a href="{{ route('booking.show', 'personal') }}" class="btn btn-primary w-100 fw-semibold">
                        Booking now
                    </a>
                </div>
            </div>
        </div>

        <!-- Family -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm h-100 border-0 rounded-4">
                <img src="{{ asset('png/PaketKeluarga.jpg') }}" class="card-img-top rounded-top-4" alt="Family">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Family</h5>
                    <a href="{{ route('booking.show', 'family') }}" class="btn btn-primary w-100 fw-semibold">
                        Booking now
                    </a>
                </div>
            </div>
        </div>

        <!-- Maternity -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm h-100 border-0 rounded-4">
                <img src="{{ asset('png/PaketBayi.jpg') }}" class="card-img-top rounded-top-4" alt="Maternity">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Maternity & Baby</h5>
                    <a href="{{ route('booking.show', 'maternity') }}" class="btn btn-primary w-100 fw-semibold">
                        Booking now
                    </a>
                </div>
            </div>
        </div>

        <!-- Prewedding -->
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm h-100 border-0 rounded-4">
                <img src="{{ asset('png/PaketPengantin.jpg') }}" class="card-img-top rounded-top-4" alt="Prewedding">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Prewedding</h5>
                    <a href="{{ route('booking.show', 'prewedding') }}" class="btn btn-primary w-100 fw-semibold">
                        Booking now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }
    .btn-primary {
        background-color: #1eaae9;
        border: none;
    }
    .btn-primary:hover {
        background-color: #1582c7;
    }
</style>
@endsection