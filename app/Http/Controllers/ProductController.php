<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function displayProductPage(): Factory|View|Application
    {

        $products = Product::get();

        return view('product_db', ['products' => $products]);

    }

    public function sortProducts(Request $request): Factory|View|Application
    {
        $products = Product::orderBy('name', 'ASC')->get();
        if ($request->query->get('products') === 'price') {
            $products = Product::orderBy('price', 'ASC')->get();
        }
        return view('product_db', ['products' => $products]);
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('products'));
    }
}
