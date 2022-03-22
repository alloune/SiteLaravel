<?php

namespace App\Http\Controllers;

use App\Models\Order_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Products;


class Order_ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display du panier. Il aura besoin du parametre du client

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Adding line to create a command

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productQuantity = Products::find($request->product_id);
        $limitQuantity = $productQuantity->quantity;

        $request->validate([
            'product_id' => 'required|integer',
            'order_id' => 'required',
            "quantity" => "required|integer|min:0|max:$limitQuantity"
        ]);

        $isset = Order_Product::where('product_id', $request->input('product_id'))->where('order_id', $request->input('order_id'))->first();
        if (isset($isset)) {


            $this->update($request, $isset);

        } else {
            Order_Product::create([
                    'product_id' => $request->input('product_id'),
                    'order_id' => $request->input('order_id'),
                    'quantity' => $request->input('quantity')
                ]

            );


        }

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order_Product $order_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Order_Product $order_Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order_Product $order_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)//remettre un type order_product
    {
        $order = Order::find($id);


        return view('Cart.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order_Product $order_Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_Product $isset)
    {


        $oldQuantity = $isset->quantity;
        $newQuantity = $request->input('quantity') + $oldQuantity;

        $isset->where('order_id', $isset->order_id)->where('product_id', $isset->product_id)->update([
            'quantity' => $newQuantity
        ]);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order_Product $order_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {

        Order_Product::where('product_id', $product)->where('order_id', 1)->delete();
        return back();
    }
}
