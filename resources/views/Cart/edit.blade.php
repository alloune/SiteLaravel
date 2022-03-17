@extends('layouts.app')

@section('title', 'BackOffice --  Graduate')

@section('content')

    @if(count($order->products)==0)
    <h1>VOTRE PANIER EST VIDE</h1>
    @endif

    <form method="POST" action="#">
        {{--update d'une formation existante--}}
        @method("PUT")
        @csrf
<div class="container">
    <div class="row">
        <p>Voici votre panier !</p>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)

                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->price }} €</td>




                </tr>

            @endforeach

            </tbody>
        </table>
        <input type="submit" value="Valider les changements">
</div>
    </form>





@endsection

