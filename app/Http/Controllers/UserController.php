<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{




    public function index()
    {
        $products = DB::select('SELECT * FROM products');

        return view('product', ['products'=> $products]);
    }

    public function displayProduct(Request $request){

        $id = $request->input('id');

        $product = DB::select("SELECT * FROM products WHERE id = :id", array('id'=>$id));

        return view('unique', ['product'=>$product]);

    }

}
