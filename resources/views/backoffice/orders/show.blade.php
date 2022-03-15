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
                <p>TEST</p>
{{--                @dd($order)--}}
                @if(count($order->product)==0)
                    <p style="font-style: italic">Cette commande n'a plus d'article</p>
                @else
                @foreach($order->product as $product)



                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
            @endif
            </tbody>

        </table>





@endsection

