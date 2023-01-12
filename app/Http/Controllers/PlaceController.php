<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $lugares = Place::all();

        return view('places.index', compact('lugares'));
    }

    public function create()
    {
        return view('places.create');
    }

    public function store(request $lugares)
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