@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center">
        <h1>{{ $category->name }}</h1> <!-- Displaying the category name -->

        <div class="row">
            @foreach ($category->products as $product) 
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
