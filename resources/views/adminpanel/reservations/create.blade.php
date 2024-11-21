@extends('layouts.app')

@section('content')
    <h1>Create Reservation</h1>

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="student_number">Student</label>
            <select id="student_number" name="student_number" required>
                @foreach ($students as $student)
                    <option value="{{ $student->student_number }}">{{ $student->student_name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="product_id">Product</label>
            <select id="product_id" name="product_id" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="loan_date">Reservation Date</label>
            <input type="date" id="loan_date" name="loan_date" required>
        </div>

        <button type="submit">Create Reservation</button>
    </form>
@endsection
