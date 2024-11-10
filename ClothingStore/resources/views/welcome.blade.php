@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <!-- Hero Section -->
    <div class="hero bg-light p-5 rounded shadow-sm">
        <h1 class="display-4">Welcome to Urban Threads!</h1>
        <p class="lead mt-3 mb-4">Discover your unique style with our curated collection of trendy clothing.</p>
        <a href="{{ route('shop') }}" class="btn btn-primary btn-lg px-4">Shop Now</a>
    </div>

    <!-- Features Section -->
    <div class="row text-center mt-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-truck fa-2x text-primary mb-3"></i>
                    <h5 class="card-title">Free Shipping</h5>
                    <p class="card-text">Enjoy free shipping on all orders above $50.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-redo fa-2x text-primary mb-3"></i>
                    <h5 class="card-title">Easy Returns</h5>
                    <p class="card-text">Hassle-free returns within 30 days of purchase.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-tag fa-2x text-primary mb-3"></i>
                    <h5 class="card-title">Exclusive Offers</h5>
                    <p class="card-text">Get access to exclusive discounts and new arrivals.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
