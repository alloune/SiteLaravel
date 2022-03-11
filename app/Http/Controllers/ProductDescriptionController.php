<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDescriptionController extends Controller
{
    public function displayProduct($id)
    {
        $product = DB::select('select * from products where id = :id', ['id' => $id]);
        return view('product_description_db', ['product' => $product]) ;
    }

}
