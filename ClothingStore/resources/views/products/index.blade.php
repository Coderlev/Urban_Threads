@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center">Our Products</h1>

        <!-- Search Form -->
        <form action="{{ route('search') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search products..." value="{{ request('query') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <!-- Category Links -->
        <div class="text-center mb-4">
            <h3>Categories</h3>
            <ul class="list-inline">
                @foreach ($categories as $category)
                    <li class="list-inline-item">
                        <a href="{{ route('category.products', $category->id) }}" class="btn btn-outline-primary">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Search Results Message -->
        @if(request()->has('query'))
            <h3 class="text-center">Search Results for "{{ request('query') }}"</h3>
        @endif

        <!-- Products List -->
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Product Image -->
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="card-img-top img-fluid">
                        @else
                            <img src="{{ asset('images/default-product.jpg') }}" alt="Default Image" class="card-img-top img-fluid">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>${{ number_format($product->price, 2) }}</strong></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
