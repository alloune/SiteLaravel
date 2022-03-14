@extends('layouts.app')
@section('title', 'Product')
@section('content')



    <div class="one_product">
{{--        @dd($product[0])--}}

            <div class="product_description">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
            </div>
                <div class="product_description">
                    <h2>Le produit {{ $product->name }}</h2>
                    <h3>Prix: {{ $product->price }} €</h3>
                    <a href="{{ route('products') }}" class="img_button">Ajouter au panier</a>
                </div>

    </div>
@endsection
