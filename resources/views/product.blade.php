@extends('layouts.template')
@section('title', 'Products')
@section('content')

    @if($errors->any())
        <div class="errorDisplay">

            @foreach($errors->all() as $error)
                <div style="color: red">Oups ! {{ $error }}</div>
            @endforeach
        </div>
    @endif
    <div class="teacherBlock">
        @if(Auth::check())
            <h2>Bienvenue {{ Auth::user()->name }}</h2>
        @else
            <h2>Bienvenue utilisateur anonyme ;)</h2>
        @endif

    </div>
    <div class="globalDesc">
        <div class="description">
            <h3>Conditions</h3>
            <form method="get" action="{{ route('products') }}">
                <select name="sortBy">

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
                    <div class="displayCourse">
                        <li class="listCourse">
                            <p>{{ $product->name }}</p>
                            <img src="{{ $product->image }}">
                            <p>Prix : {{ $product->price }} €</p>

                            <div class="actionBtn">
                                <form action="{{route('product',$product->id) }}" method="GET">
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input class="btn btn-dark" type="submit" value="Voir les infos">
                                </form>
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf
                                    <input type="number" name="quantity" placeholder="Quantité">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="order_id" value="1">
                                    <input class="btn btn-dark" type="submit" value="Ajouter au panier">
                                </form>
                            </div>
                    </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>


@endsection
