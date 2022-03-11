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
    public function displayProduct(int $id): Factory|View|Application
    {
        $product = Products::where('id', $id)->get();
        return view('product_description_db', ['product' => $product]);
    }

}
