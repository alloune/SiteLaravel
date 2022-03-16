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
        </tr>
        </thead>
            <tbody>
            <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->number }}</td>
            <td>{{ $order->customer_id }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
            </tr>

            </tbody>
    </table>


@endsection
