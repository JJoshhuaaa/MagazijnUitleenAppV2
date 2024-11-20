<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BarcodeController extends Controller
{
    // Display the barcode input form
    public function showForm()
    {
        return view('barcode_search');
    }

    // Search for a product by barcode
    public function search(Request $request)
    {
        $barcode = $request->input('barcode');

        // Check if the barcode exists in the products table
        $product = Product::where('barcode', $barcode)->first();

        if ($product) {
            return view('barcode_search', ['product' => $product]);
        } else {
            return view('barcode_search', ['message' => 'No product found for the scanned barcode.']);
        }
    }
}
