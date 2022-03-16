@extends('layouts.app')
@section('title', 'Products')
@section('content')


    <div class="teacherBlock">
        <h2>Nom du produit</h2>
        <p>Nom du prof</p>
        <p>Descritpion du prof</p>

    </div>
    <div class="globalDesc">
        <div class="description">
            <h3>Conditions</h3>
            <form method="get" action="{{ route('products') }}">
            <select name ="sortBy">

                <option value="name">
                    Trier par nom
                </option>
                <option value="price">
                    Trier par prix
                </option>
            </select>
            <input type="submit" value="Valider">
            </form>

            <ul>
                @foreach($products as $product)

                        <li>

                            <p>{{ $product->name }}</p>
                            <img src="{{ $product->image }}">
                            <p>Prix : {{ $product->price }} €</p>
                            <div class="actionBtn">
                            <form action="{{route('product',$product->id) }}" method="GET">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input class="btn btn-dark" type="submit" value="Voir les infos">
                            </form>
                            <form action="#" method="GET">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input class="btn btn-dark" type="submit" value="Ajouter au panier">
                            </form>
                            </div>

                        </li>


                @endforeach
            </ul>

        </div>
    </div>


@endsection
