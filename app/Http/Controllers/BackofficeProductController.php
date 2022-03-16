<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BackofficeProductController extends Controller
{

    public function displayBakcOfficeProducts(): Factory|View|Application
    {
        $products = Product::orderBy('name', 'ASC')->get();
        return view('Backoffice.backoffice', ['products' => $products]);
    }

    public function displayBakcOfficeProduct(Product $product): Factory|View|Application
    {

        return view('Backoffice.backoffice_product', ['product' => $product]);
    }

    public function editBakcOfficeProduct(Product $product): Factory|View|Application
    {

        return view('Backoffice.backoffice_product_edit', ['product' => $product]);
    }

    public function updateBackOfficeProduct(Request $request, Product $product): RedirectResponse
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

    public function showAddBackOfficeProduct(Product $product): Application|Factory|View
    {

        return view("Backoffice.backoffice_product_add", ['product' => $product]);
    }

    public function addBackOfficeProduct(Request $request, Product $product): RedirectResponse
    {
        $product->create([
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

    public function deleteBackOfficeProduct(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('backofficeproducts');
    }


}
