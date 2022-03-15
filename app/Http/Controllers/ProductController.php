<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view("backoffice.Products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Products::create([
            "name"=>$request->input("name"),
            "description"=>$request->input("description"),
            "image"=>$request->input('image'),
            "price"=>$request->input('price'),
            "weight"=>$request->input('weight'),
            "available"=>$request->input('available'),
            "quantity"=>$request->input("quantity")
        ]);
        return redirect(route('backoffice.Products.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Products $backoffice)
        //ATTENTION !!! Le nom de la variable doit être identique au nom dans la route
    {

        return view('backoffice.Products.show', compact("backoffice"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $backoffice)
    {
        return view('backoffice.Products.edit', compact("backoffice"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $backoffice)
    {
        $backoffice->update([
            "name"=>$request->input("name"),
            "description"=>$request->input("description"),
            "image"=>$request->input('image'),
            "price"=>$request->input('price'),
            "weight"=>$request->input('weight'),
            "available"=>$request->input('available'),
            "quantity"=>$request->input("quantity")
        ]);
        return redirect()->route("backoffice.Products.show", ['backoffice'=> $backoffice->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $backoffice)
    {
        $backoffice->delete();
        return redirect(route('backoffice.Products.index'));
    }
}
