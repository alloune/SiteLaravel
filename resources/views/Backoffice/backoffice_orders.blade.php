@extends('layouts.app')
@section('title', "Backoffice orders")
@section('content')


    <table class="table table-hover" style="margin-top: 100px">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Number</th>
            <th scope="col">Date</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Order Total</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($orders as $order)



            <tbody>
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->number }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
                <td>{{ $order->total }} €</td>
                <td>
                    <a href="{{ route('order.show', $order->id) }}"> <button type="button" class="btn btn-primary">View</button></a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>



@endsection
