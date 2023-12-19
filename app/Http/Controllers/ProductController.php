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
//       dd($request->all());
return $result;
       return redirect()->route('product.index');

   }
}
