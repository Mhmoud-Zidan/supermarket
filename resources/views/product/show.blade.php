@extends('product.layout')
@section('content')
    <div class="container pt-5">

        <div class="container pt-4">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('products.index') }}">Back </a>Product Name: {{ $product->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <h5 class="card-title">{{ $product->price }} LE</h5>
                    <p class="card-text">{{ $product->detail }}</p>
                </div>
            </div>
        </div>

    @endsection
