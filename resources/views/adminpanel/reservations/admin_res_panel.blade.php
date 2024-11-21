@extends('layouts.app')

@section('content')
    <h1>All Reservations</h1>

    <a href="{{ route('reservations.create') }}" class="btn btn-primary" style="--bs-btn-bg: #00555c;">Create Reservation</a>

    @if($reservations->isEmpty())
        <p>No reservations found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Product Name</th>
                    <th>Barcode</th>
                    <th>Reservation Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->student_name }}</td>
                        <td>{{ $reservation->product_name }}</td>
                        <td>{{ $reservation->barcode }}</td>
                        <td>{{ $reservation->loan_date }}</td>
                        <td>
                            <a href="{{ route('reservations.show', ['reservation_id' => $reservation->reservation_id]) }}">Details</a>

                            <form action="{{ route('reservations.destroy', ['reservation_id' => $reservation->reservation_id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
