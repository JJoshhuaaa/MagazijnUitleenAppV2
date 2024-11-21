<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }
    
    public function create()
    {
        return view('reservations.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'item' => 'required',
            'reservation_time' => 'required|date',
        ]);
    
        Reservation::create($request->all());
    
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation created successfully.');
    }
    
}
