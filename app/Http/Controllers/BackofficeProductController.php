<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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


}
