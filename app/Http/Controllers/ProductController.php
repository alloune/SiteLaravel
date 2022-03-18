<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
            "name"=>'required|unique:products|max:255',
            "image"=>'required|max:255|',
            "price"=>'required||int|min:0',
            "available"=>'required']);



        Products::create([
            "name" => $request->input("name"),
            "description" => $request->input("description"),
            "image" => $request->input('image'),
            "price" => $request->input('price'),
            "available" => $request->input('available'),
            "quantity" => $request->input("quantity")
        ]);
        return redirect(route('backoffice.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Products $backoffice
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
     * @param \App\Models\Products $backoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $backoffice)
    {
        return view('backoffice.Products.edit', compact("backoffice"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Products $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $backoffice)
    {
        $request->validate([
            "name" =>'required|max:44',
            "image" => 'required|max:255',
            "price" => 'required|integer|min:0',
            "available" => 'required|integer|max:1',
            "quantity" => 'required|integer|max:9999'
        ]);

        $backoffice->update([
            "name" => $request->input("name"),
            "description" => $request->input("description"),
            "image" => $request->input('image'),
            "price" => $request->input('price'),
            "available" => $request->input('available'),
            "quantity" => $request->input("quantity")
        ]);
        return redirect()->route("backoffice.show", ['backoffice' => $backoffice->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Products $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $backoffice)
    {
        $backoffice->delete();
        return redirect(route('backoffice.index'));
    }
}
