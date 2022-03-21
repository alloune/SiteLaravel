<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function displayProductPage(){
        $products = Product::all();

        return view('product', ['products' => $products]);

    }

    public function displayProductDetailPage($id){

        $product = Product::find($id);


        return view('detailProduct', ['product' => $product]);

    }

    public function alphabetiqueProducts(){

        $products = Product::orderBy('name', 'ASC')->get();

        return view('product', ['products' => $products]);

    }

    public function numOrderProducts(){

        $products = Product::orderBy('price', 'ASC')->get();

        return view('product', ['products' => $products]);

    }


}

