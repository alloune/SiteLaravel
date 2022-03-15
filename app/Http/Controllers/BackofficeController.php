<?php

namespace App\Http\Controllers;

use App\Models\Backoffice;
use App\Models\Products;
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
        $products = Products::all();

        return view('backoffice', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Backoffice $backoffice)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Backoffice $backoffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backoffice  $backoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Backoffice $backoffice)
    {
        //
    }
}
