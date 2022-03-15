<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function displayProductPage(){
        $products = Products::all();

        return view('product', ['products' => $products]);

    }

    public function displayProductDetailPage($id){
        $product = Products::find($id);
//        $product = Products::select('select * from products where id = ?', [$id]);

        return view('detailProduct', ['product' => $product]);

    }

    public function alphabetiqueProducts(){

        $products = Products::orderBy('name', 'ASC')->get();

        return view('product', ['products' => $products]);

    }

    public function numOrderProducts(){

        $products = Products::orderBy('price', 'ASC')->get();

        return view('product', ['products' => $products]);

    }


}

