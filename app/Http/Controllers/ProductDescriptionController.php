<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductDescriptionController extends Controller
{
//    public function displayProduct(int $id): Factory|View|Application
//    {
//        $product = Products::find($id);
//        return view('product_description_db', ['product' => $product]);
//    }
    public function displayProduct(Products $product): Factory|View|Application
    {

        return view('product_description_db', ['product' => $product]);
    }

}
