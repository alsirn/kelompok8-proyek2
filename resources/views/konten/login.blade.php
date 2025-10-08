@extends('bagianAwal.main')

@section('title', 'Login - WebSaya.Com')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4" style="color: #1eaae9;">Sign In</h2>
                    
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        
                        <button type="submit" class="btn w-100 mb-3" style="background-color: #1eaae9; color: white; border-radius: 30px; padding: 10px;">
                            Sign In
                        </button>
                        
                        <div class="text-center">
                            <a href="#" class="text-decoration-none" style="color: #1eaae9;">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control {
        border-radius: 8px;
        padding: 10px 15px;
    }
    
    .form-control:focus {
        border-color: #1eaae9;
        box-shadow: 0 0 0 0.2rem rgba(30, 170, 233, 0.25);
    }
    
    .card {
        border-radius: 15px;
        border: none;
    }
</style>

@endsection