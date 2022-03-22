@extends('layouts.app')
@section('title', "Backoffice")
@section('content')

    <div class="one_product">
        <div class="product_description">
            <img src="{{ $product->image }}" alt="{{ $product->name }}">
        </div>
        <div class="product_description">
            <h2>Le produit {{ $product->name }}</h2>
            <h3>Prix: {{ $product->price }} €</h3>
            <h3>Description: {!! $product->description !!}</h3>
            <h3>Poid: {{ $product->weight }} g</h3>
        </div>
    </div>



@endsection
