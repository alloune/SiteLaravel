<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BackofficeProductController extends Controller
{

    public function displayBakcOfficeProducts(): Factory|View|Application
    {
        $products = Products::orderBy('name', 'ASC')->get();
        return view('Backoffice.backoffice', ['products' => $products]);
    }

    public function displayBakcOfficeProduct(Products $product): Factory|View|Application
    {

        return view('Backoffice.backoffice_product', ['product' => $product]);
    }

    public function editBakcOfficeProduct(Products $product, Request $request): Factory|View|Application
    {


        return view('Backoffice.backoffice_product_edit', ['product' => $product]);
    }

    public function updateBackOfficeProduct(Request $request, Products $product): RedirectResponse
    {

        $product->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'weight' => $request->input('weight'),
            'available' => $request->input('available'),
            'quantity' => $request->input('quantity'),
            ]);
        return redirect()->route("backofficeproducts");
    }
}
