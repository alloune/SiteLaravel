@extends('layouts.app')
@section('title', "Backoffice")
@section('content')



    <table class="table table-hover" style="margin-top: 100px">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Number</th>
            <th scope="col">Customer id</th>
            <th scope="col">Date</th>
            <th scope="col">Total</th>
            <th scope="col">Customer Name</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->number }}</td>
            <td>{{ $order->customer_id }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
            <td style="background-color: lightgrey; font-weight: bold">Products Ordered</td>
            <td style="background-color: lightgrey; font-weight: bold">Product Quantity</td>
        </tr>
        @foreach($order->products as $product)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="background-color: lightgrey">{{ $product->name }}</td>
                <td style="background-color: lightgrey">{{ $product->quantity }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
