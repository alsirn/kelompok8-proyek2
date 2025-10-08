
@extends('bagianAwal.main')

@section('title', $tittle ?? 'FotoBooth.Com')

@section('content')
<div class="py-5 text-center">
    <h1 style="color: #1eaae9;">{{ $tittle ?? 'Welcome to FotoBooth.Com' }}</h1>
    <p class="lead text-muted">{{ $konten ?? 'Discover our products, gallery and contact us.' }}</p>
</div>

@endsection