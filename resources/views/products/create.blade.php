@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="--bs-btn-bg: #00555c;">Create Product</button>
        </form>
    </div>
@endsection
