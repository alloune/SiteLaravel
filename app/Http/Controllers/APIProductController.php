<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class APIProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required|string|max:255',
//            'category_id' => 'required|numeric|min:0',
//            'price' => 'required|numeric|min:0',
//            'description' => 'required|string',
//            'image' => 'required|url',
//            'weight' => 'required|numeric|min:0',
//            'available' => 'required|boolean',
//            'quantity' => 'required|numeric|min:0',
//        ]);

        $product = Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'weight' => $request->input('weight'),
            'available' => $request->input('available'),
            'quantity' => $request->input('quantity'),
        ]);

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
//        $this->validate($request, [
//            'name' => 'required|string|max:255',
//            'category_id' => 'required|numeric|min:0',
//            'price' => 'required|numeric|min:0',
//            'description' => 'required|string',
//            'image' => 'required|url',
//            'weight' => 'required|numeric|min:0',
//            'available' => 'required|boolean',
//            'quantity' => 'required|numeric|min:0',
//        ]);

        $product->update([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "price" => $request->price,
            "description" => $request->description,
            "image" => $request->image,
            "weight" => $request->weight,
            "available" => $request->available,
            "quantity" => $request->quantity,
        ]);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json();
    }
}
