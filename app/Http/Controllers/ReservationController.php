<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('query');
        
        $results = DB::table('reservations')
            ->join('products', 'reservations.product_id', '=', 'products.id')
            ->where('products.barcode', 'LIKE', "%{$search}%")
            ->orWhere('products.product_name', 'LIKE', "%{$search}%")
            ->orWhere('products.description', 'LIKE', "%{$search}%")
            ->select('reservations.*', 'products.product_name', 'products.description', 'products.barcode')
            ->get();

        return view('adminpanel.reservations.search_results', compact('results'));
    }


    public function show($reservation_id)
    {
        $reservation = DB::table('reservations')
            ->join('products', 'reservations.product_id', '=', 'products.id')
            ->join('students', 'reservations.student_number', '=', 'students.student_number')
            ->where('reservations.reservation_id', $reservation_id) 
            ->select('reservations.*', 'products.product_name', 'products.description', 'products.barcode', 'students.student_name')
            ->first();
    
        if (!$reservation) {
            return abort(404, 'Reservation not found.');
        }
    
        return view('adminpanel.reservations.show', compact('reservation'));
    }
    

    public function index()
{
    $reservations = DB::table('reservations')
        ->join('products', 'reservations.product_id', '=', 'products.id')
        ->join('students', 'reservations.student_number', '=', 'students.student_number')
        ->select('reservations.*', 'products.product_name', 'products.description', 'products.barcode', 'students.student_name')
        ->get(); 
    

    return view('adminpanel.reservations.admin_res_panel', compact('reservations'));
}

public function create()
{
    $products = DB::table('products')->get();  
    $students = DB::table('students')->get();  
    return view('adminpanel.reservations.create', compact('products', 'students'));
}

public function store(Request $request)
{
   
    $request->validate([
        'student_number' => 'required|exists:students,student_number',  
        'product_id' => 'required|exists:products,id',  
        'loan_date' => 'required|date',  
    ]);

   
    DB::table('reservations')->insert([
        'student_number' => $request->student_number,
        'product_id' => $request->product_id,
        'loan_date' => $request->loan_date,
        'expire_date' => now()->addDays(7),  
    ]);

  
    return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
}


public function update(Request $request, $reservation_id)
{
   
    DB::table('reservations')
        ->where('reservation_id', $reservation_id)
        ->update([
            'student_number' => $request->student_number,
            'product_id' => $request->product_id,
            'loan_date' => $request->loan_date,
        ]);

    return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
}

public function destroy($reservation_id)
{
    DB::table('reservations')
        ->where('reservation_id', $reservation_id)
        ->delete();

    return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
}

}
