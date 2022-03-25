<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class UserController extends Controller
{


    public function index(Request $request)
    {
        $products = Product::orderBy($request->query->get('sortBy') ?? 'name', 'ASC')->get();
//        $products = Product::orderBy('name', 'ASC')->get();
////        if($request->query->get('sortBy') === 'price')
////        {
////            $products=Product::orderBy('price','ASC')->get();
////        }
//        $product_test = Product::where()
//        $products = DB::select('SELECT * FROM products');



        return view('product', ['products' => $products]);
    }

    public function displayProduct(Request $request)
    {


        $id = $request->input('id');

//        $product = DB::select("SELECT * FROM products WHERE id = :id", array('id'=>$id));
        $product = Product::where('id', $id)->first();

        return view('unique', ['product' => $product]);

    }

}
