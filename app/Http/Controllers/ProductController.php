<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::all();
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
            "description"=>'required|unique:products|max:255',
            "image"=>'required|max:255|',
            "price"=>'required||int|min:0',
            "available"=>'required']);



        Product::create([
            "name" => $request->input("name"),
            "description" => $request->input("description"),
            "image" => $request->input('image'),
            "price" => $request->input('price'),
            "available" => $request->input('available'),
            "quantity" => $request->input("quantity")
        ]);
        return redirect(route('backoffice'));


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $backoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Product $backoffice)
        //ATTENTION !!! Le nom de la variable doit être identique au nom dans la route
    {

        return view('backoffice.Products.show', compact("backoffice"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $backoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $backoffice)
    {
        return view('backoffice.Products.edit', compact("backoffice"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $backoffice)
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
     * @param \App\Models\Product $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $backoffice)
    {
        $backoffice->delete();
        return redirect(route('backoffice.index'));
    }


    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('products'));

    }
}
