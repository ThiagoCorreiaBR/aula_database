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

    public function create()
    {
        return view('products.create');
    }

    public function store(request $request)
    {
        Product::create(
            [
                'name' => $request ->name,
                'description' => $request ->description,
                'price' => $request ->price,
            ]
        );
        return redirect('/');
    }

    public function show($id)
    {
        $product = product::find($id); //find so funciona pra ID
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update($id,request $request)
    {
        $product = product::find($id);
        $product->update(
            [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description
            ]
        );
        return redirect('/show/'. $id);
    }

    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('/');
    }
}
