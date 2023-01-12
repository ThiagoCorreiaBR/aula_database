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
}
