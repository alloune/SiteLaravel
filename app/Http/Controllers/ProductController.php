<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{
    public function displayProductPage(): Factory|View|Application
    {

        $products = Products::get();

        return view('product_db', ['products' => $products]);

    }

    public function sortProducts(): Factory|View|Application
    {
        if ($_REQUEST == ['products' => 'price']) {

            $products = Products::orderBy('price', 'ASC')->get();
            return view('product_db', ['products' => $products]);
        }

        else {
            $products = Products::orderBy('name', 'ASC')->get();
        }
        return view('product_db', ['products' => $products]);
    }
}
