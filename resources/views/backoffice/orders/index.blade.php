@extends('backoffice.layout.index')
@section('title', 'Tous les produits')



@section('content')





    <table class="table  table-striped">
        <thead>
        <tr>
            <th>Numéro de commande</th>
            <th></th>
            <th colspan="2">Client</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)

            <tr>
                <td>{{ $order->number }} </td>
                <td><a class="btn btn-dark" href="{{ route('orders.show', ['order'=>$order]) }}"> Voir la commande</a> </td>
                <td>{{ $order->customer->first_name }}</td>
                <td>{{ $order->customer->last_name }}</td>

        @endforeach
        </tbody>

    </table>

@endsection

