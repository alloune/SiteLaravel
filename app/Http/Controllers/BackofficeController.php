<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class BackofficeController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('backoffice', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add (Request $request )
    {


        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function creat (Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'img' => 'required|max:255',
            'quantity' => 'required|max:255',
        ]);

        Product::create([
            "title" => $request->title,
            "name" => $request->name,
            "summary" => $request->summary,
            "price" => $request->price,
            "discount" => $request->discount,
            "img" => $request->img,
            "quantity" => $request->quantity,
            "categorie" => $request->categorie,
            "available" => $request->available,
        ]);

        $products = Product::all();

        return view('backoffice',['products' => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Backoffice $backoffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $product = Product::find($id);

        return view('edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $product = Product::find($id);

        $this->validate($request,[
            'name' => 'required|max:255',
            'price' => 'required|max:255',
        ]);
        $product->update([
            "name" => $request->name,
            "price" => $request->price
        ]);

        return redirect('backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        Product::where('id',$id)->delete();

        return view('supprimer',);
    }

}
