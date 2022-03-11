@extends('layouts.app')
@section('title', 'Product')
@section('content')



    <div class="one_product">
{{--        @dd($product[0])--}}
        @foreach($product as $key => $list)
            <div class="product_description">
                <img src="{{ $list->image }}" alt="{{ $list->name }}">
            </div>
                <div class="product_description">
                    <h2>Le produit {{ $list->name }}</h2>
                    <h3>Prix: {{ $list->price }} €</h3>
                    <a href="{{ route('products') }}" class="img_button">Ajouter au panier</a>
                </div>
        @endforeach
    </div>
@endsection
