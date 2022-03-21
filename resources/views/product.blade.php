@extends('layouts.app')
@section('title')
    <title>Products</title>
@endsection
@section('content')

    @foreach ($products as $product)
        <p>Nom du produit {{$product->name}}</p>
        <a href="/product/{{$product->id}}"><img src="{{$product->img}}" alt="image de : {{$product->name}}"></a>

        @if ($product->price > 20)
            <p>mauvaise affaire</p>
        @endif
        <p>{{$product->name}} = {{$product->price}}</p>
        <p>il reste {{$product->quantity}} de ce produit en stock</p>

    @endforeach

    <div class="resume">
        <img src="#" alt="Image de présentation">
        <p>Présentation de la formation, le prix</p>
        <p> Petit cadre pour presenter l'école</p>
    </div>
    </div>
@endsection
