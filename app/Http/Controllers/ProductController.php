<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){
       
       $request->validate([
          'name' => ['required'],
          'qty' => ['required|numeric'],
           'price' => ['required|numeric:2'],
          'description' => ['nullable'],
       ]);

       Product::create([
           'name' => $request->name,
           'qty' => $request->qty,
           'price' => $request->price,
           'description' => $request->description,
       ]);
       

       return redirect()->route('product.index');

   }
}
