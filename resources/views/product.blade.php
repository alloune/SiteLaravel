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
                    <form action="{{route('product',$product->id) }}" method="GET">
                        <li>

                            <p>{{ $product->name }}</p>
                            <img src="{{ $product->image }}">
                            <p>Prix : {{ $product->price }} €</p>
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="submit" value="Voir les infos">

                        </li>
                    </form>

                @endforeach
            </ul>

        </div>
    </div>


@endsection
