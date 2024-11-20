@extends('layouts.app')

@section('title', 'Barcode Search')

@section('content')
<div class="container">
    <h1>Scan or Enter Barcode</h1>
    <form id="barcode-form" method="GET" action="{{ route('barcode.search') }}">
        @csrf
        <div class="form-group">
            <label for="barcode">Barcode:</label>
            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Scan barcode" autofocus>
        </div>
        <button type="submit" class="btn btn-primary" style="--bs-btn-bg: #00555c;">Search</button>
    </form>

    @if(isset($product))
        <h2>Product Details</h2>
        <ul>
            <li><strong>Product Naam:</strong> {{ $product->product_name }}</li>
            <li><strong>Beschrijving:</strong> {{ $product->description }}</li>
            <li><strong>Categorie:</strong> {{ $product->category }}</li>
            <li><strong>Barcode:</strong> {{ $product->barcode }}</li>
        </ul>
    @elseif(isset($message))
        <p>{{ $message }}</p>
    @endif
</div>

<script>
    document.getElementById('barcode').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            document.getElementById('barcode-form').submit();
        }
    });
</script>
@endsection
