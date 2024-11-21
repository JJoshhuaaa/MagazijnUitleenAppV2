@extends('layouts.app')

@section('content')
    <h1>Edit Reservation</h1>

    <form action="{{ route('reservations.update', ['student_number' => $reservation->student_number, 'product_id' => $reservation->product_id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="student_number">Student</label>
            <select name="student_number" id="student_number" required>
                @foreach($students as $student)
                    <option value="{{ $student->student_number }}" {{ $student->student_number == $reservation->student_number ? 'selected' : '' }}>
                        {{ $student->student_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id == $reservation->product_id ? 'selected' : '' }}>
                        {{ $product->product_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="loan_date">Loan Date</label>
            <input type="date" name="loan_date" id="loan_date" value="{{ $reservation->loan_date }}" required>
        </div>
        <button type="submit">Update Reservation</button>
    </form>
@endsection
