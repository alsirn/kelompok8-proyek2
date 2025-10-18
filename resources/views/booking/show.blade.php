@extends('bagianAwal.main')

@section('title', 'Booking - ' . $data['title'])

@section('content')
<div class="container my-5">
    <div class="card shadow-lg p-4">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="{{ asset($data['image']) }}" class="img-fluid rounded" alt="{{ $data['title'] }}">
            </div>
            
             <div class="col-md-7">
        <h3 style="color: #1eaae9;">{{ $data['title'] }}</h3>
        <h4>Detail Paket:</h4>
        {!! $data['description'] !!}
        
        <h5 class="mt-3 mb-3">
            Harga: <span style="color:#1eaae9;">{{ $data['price'] }}</span>
        </h5>
        
                <form>
                    <div class="mb-3">
                        <label for="date" class="form-label">Pilih Tanggal Pemotretan</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color:#1eaae9; color:white;">Konfirmasi Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
