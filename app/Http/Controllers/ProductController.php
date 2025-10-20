<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function store(Request $request) {
         $validatedData = $request-validate([
         'name' => 'required|max:255',
            'code' => 'required',
         ]);
         $product = Product::create($validatedData);
         return response()->json($product, 201);
        }
}
