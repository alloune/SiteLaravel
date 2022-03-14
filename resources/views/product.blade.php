@extends('layouts.app')




@section('content')

    @foreach ($products as $product)
        <p>Nom du produit {{$product->name}}</p>
        <a href="/product/{{$product->id}}"><img src="{{$product->img}}" alt="image de : {{$product->name}}"></a>
        <p>{{$product->name}} = {{$product->price}}</p>
        <p>il reste {{$product->quantity}} de ce produit en stock</p>

    @endforeach

@endsection
