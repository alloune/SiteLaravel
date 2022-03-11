<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function displayProductPage()
    {

        $products = DB::select('select * from products');

        return view('product_db', ['products' => $products]);

    }

}
