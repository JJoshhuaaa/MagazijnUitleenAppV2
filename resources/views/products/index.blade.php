@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">All Products</h1>

        <!-- Check if there are any products -->
        @if($products->isEmpty())
            <p>No products available.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="background-color: #00555c;">#</th>
                        <th style="background-color: #00555c;">Product Name</th>
                        <th style="background-color: #00555c;">Description</th>
                        <th style="background-color: #00555c;">Category</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->description }}</td>
        <td>
            @if($product->category)
                ${{ $product->category }}
            @else
                N/A <!-- Or leave it empty -->
            @endif
        </td>
    </tr>
@endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
