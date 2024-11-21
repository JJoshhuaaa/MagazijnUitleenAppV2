<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
    public function show($id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);

        // Return the view with the product data
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        // Retrieve the product by its ID
        $product = Product::findOrFail($id);

        // Return the edit view with the product data
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id)
{
    // Validate incoming data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
    ]);

    // Find the product by ID
    $product = Product::findOrFail($id);

    // Update the product data
    $product->update([
        'name' => $request->product_name,
        'description' => $request->description,
        'price' => $request->category,
    ]);

    // Redirect to the product index with a success message
    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}
public function destroy($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Delete the product
        $product->delete();

        // Redirect back with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
