<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact(
        'shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric',
            'wholesale_price' => 'required|numeric',
            'origin' => 'required|string|max:2',
            'quantity' => 'required|integer|min:0',
            'product_image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imagePath = $request->file('image')->store('public/images');

            $validated['image'] = $imagePath;
        }

        $shop = Shop::create([
            'product_name' => $validated['product_name'],
            'description' => $validated['description'],
            'retail_price' => $validated['retail_price'],
            'wholesale_price' => $validated['wholesale_price'],
            'origin' => $validated['origin'],
            'quantity' => $validated['quantity'],
            'image' => $validated['image'],
        ]);
        return $shop;
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
