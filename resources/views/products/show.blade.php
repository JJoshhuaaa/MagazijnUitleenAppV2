@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $product->name }}</h1>

        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>

        <a href="{{ route('products.index') }}" class="btn btn-primary" style="--bs-btn-bg: #00555c;">Back to Product List</a>
    </div>
@endsection
