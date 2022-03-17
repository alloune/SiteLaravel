@extends('backoffice.layout.index')
@section('title', 'Produit')
@section('content')
    <p>Commande numéro : {{ $order->number }}</p>
        <table>
            <thead>
            <tr>
                <th>Nom de l'article</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
            <tr>
{{--                @dump($order->product)--}}
                @if(count($order->products)==0)
                    <p style="font-style: italic">Cette commande n'a plus d'article</p>
                @else
                @foreach($order->products as $product)
{{--                    @dd($product->pivot->quantity)--}}
                <td>{{ $product->name }}</td>
                <td>{{ $product->pivot->quantity }}</td>
                <td>{{ $product->price }} €</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td>Total</td>
                <td>{{ $total }} €</td>
            </tr>
            @endif
            </tbody>

        </table>
@endsection

