<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allproduct = Product::all();
        return view("products.index", compact("allproduct"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        Product::create($request->all());
        return redirect()->route("products.admin");

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.admin')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.admin')->with('success', 'Product deleted successfully!');
    }

    public function admin()
    {
        $allproduct = Product::all();
        return view('products.admin', compact('allproduct'));
    }

}
