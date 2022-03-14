@extends('layouts.app')
@section('title', "Backoffice")
@section('content')

    <div class="one_product">

        <div class="product_description">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail">
        </div>
        <div class="product_description">
            <p>Le produit: {{ $product->name }}</p>
            <p>categorie: {{ $product->category_id }}</p>
            <p>Prix: {{ $product->price }} €</p>
            <p>Description: {{ $product->description }}</p>
            <p>Image: {{ $product->image }}</p>
            <p>Poid: {{ $product->weight }} g</p>
            <p>En vente: {{ $product->available }}</p>
            <p>Quantité: {{ $product->quantity }}</p>
            <button type="button" class="btn btn-primary">Update</button>
        </div>
    </div>




@endsection
