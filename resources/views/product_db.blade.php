@extends('layouts.app')
@section('title', 'Products')
@section('content')

    <div class="teacherBlock">
        <h2>Nos produits</h2>
    </div>
    <form action="{{ route('sortedproducts') }}" method="GET">
    <label for="products">Trier par:</label>
    <select name="products" id="products">
        <option value="name">Nom du produit</option>
        <option value="price">Prix</option>
    </select>
    <input type="submit" value="Valider">
    </form>
    <div class="globalDesc">

        @foreach($products as $key => $list)
            <li>
        <p>Nom du produit: {{ $list->name }}</p>
            <a href="{{ route('product', $list->id) }}"><img src="{{ $list->image }}"></a>
                <p>Prix: {{ $list->price }} €</p>
            </li>

        @endforeach

    </div>
@endsection
