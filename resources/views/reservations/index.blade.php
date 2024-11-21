@extends('layouts.app')

@section('content')
<h1>Reservatie lijst</h1>
<a href="{{ route('reservations.create') }}" class="btn btn-primary">Добавить резервацию</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Product naam</th>
            <th>tijd</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
            <td>{{ $reservation->name }}</td>
            <td>{{ $reservation->email }}</td>
            <td>{{ $reservation->item }}</td>
            <td>{{ $reservation->reservation_time }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
