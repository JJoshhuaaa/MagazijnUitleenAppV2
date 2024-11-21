@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>

    @if($results->isEmpty())
        <p>No reservations found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Barcode</th>
                    <th>Description</th>
                    <th>Reservation Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $reservation)
                    <tr>
                        <td>{{ $reservation->product_name }}</td>
                        <td>{{ $reservation->barcode }}</td>
                        <td>{{ $reservation->description }}</td>
                        <td>{{ $reservation->loan_date }}</td>
                        <td>
                            <a href="{{ route('reservations.show', ['student_number' => $reservation->student_number, 'product_id' => $reservation->product_id]) }}">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
