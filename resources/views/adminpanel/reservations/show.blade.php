@extends('layouts.app')

@section('content')
    <h1>Reservation Details</h1>

    @if($reservation)
        <p><strong>Student Name:</strong> {{ $reservation->student_name }}</p>
        <p><strong>Product Name:</strong> {{ $reservation->product_name }}</p>
        <p><strong>Barcode:</strong> {{ $reservation->barcode }}</p>
        <p><strong>Description:</strong> {{ $reservation->description }}</p>
        <p><strong>Loan Date:</strong> {{ $reservation->loan_date }}</p>
        <p><strong>Expire Date:</strong> {{ $reservation->expire_date }}</p>
        <p><strong>Special Requests:</strong> {{ $reservation->special_requests ?? 'None' }}</p>
    @else
        <p>Reservation not found.</p>
    @endif
@endsection
