<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class UserController extends Controller
{




    public function index()
    {
//        $product_test = Products::where()
//        $products = DB::select('SELECT * FROM products');
        $products = Products::orderBy("name")->
        get();


        return view('product', ['products'=> $products]);
    }

    public function displayProduct(Request $request){




        $id = $request->input('id');

//        $product = DB::select("SELECT * FROM products WHERE id = :id", array('id'=>$id));
        $product = Products::where('id', $id)->
        get();

        return view('unique', ['product'=>$product]);

    }

}
