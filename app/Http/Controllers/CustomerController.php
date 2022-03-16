<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
        return view('backoffice.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.Customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|min:3|max:44',
            'last_name'=>'required|min:3|max:44',
            'city'=>'required|min:3|max:44',
            'address'=>'required|max:100',
            'postal_code'=>'required|min:5|max:5',
        ]);

        Customer::create([
            "first_name"=>$request->input('first_name'),
            "last_name"=>$request->input('last_name'),
            "address"=>$request->input('address'),
            "postal_code"=>$request->input('postal_code'),
            "city"=>$request->input('city'),
        ]);
        return redirect(route('customers.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('backoffice.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $request->validate([
            'first_name'=>'required|min:3|max:44',
            'last_name'=>'required|min:3|max:44',
            'city'=>'required|min:3|max:44',
            'address'=>'required|max:100',
            'postal_code'=>'required|min:5|max:5',
        ]);

        $customer->update([
            "first_name"=>$request->input('first_name'),
            "last_name"=>$request->input('last_name'),
            "address"=>$request->input('address'),
            "postal_code"=>$request->input('postal_code'),
            "city"=>$request->input('city'),
        ]);

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        return 'On va dire que t\'as réussit à delete ... . Customer = '.$customer->first_name;
    }
}
