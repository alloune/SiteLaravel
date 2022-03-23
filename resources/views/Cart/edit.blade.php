@extends('layouts.template')

@section('title', 'Panier')

@section('content')

    @if(count($order->products)==0)
    <h1 style="margin-top: 60px">VOTRE PANIER EST VIDE</h1>
    @endif


        {{--update d'une formation existante--}}

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

    <input type="hidden" name="updatingCart" value="">
            @foreach($order->products as $product)

                <tr>
                    <td>{{ $product->name }}</td>
                    <td style="color: black">{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->price }} €</td>
                    <form action="{{ route('cart.destroy', $product) }}" method="post">
                        @csrf
                        @method('delete')
                    <td><button class="btn btn-dark" type="submit">Supprimer</button> </td>
                    </form>
                </tr>
                            @endforeach

            </tbody>
        </table>
{{--    <form method="post" action="{{ route('cart.update', 1 )}}">--}}
{{--        @csrf--}}
{{--        @method('put')--}}
{{--        <input type="submit" value="Valider les changements">--}}
{{--    </form>--}}
</div>






@endsection

