<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;
        //return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return $product;
    }

    public function store(Request $request)
    {
        //dd($request->name);
        // info("...");
        //dd($request->all());
        $request->validate([
            'name' => ['required'],
            'qty' => ['required'],
            'price' => ['required'],
            'description' => ['nullable'],
        ]);

        $result =  Product::create([
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        // dd($request->all());
        return $result;
        //return redirect()->route('product.index');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => ['required'],
            'qty' => ['required'],
            'price' => ['required'],
            'description' => ['nullable'],
        ]);

        $product->update([
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        $product = $product->fresh();
        return $product;
        //return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return $product;
        //return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
