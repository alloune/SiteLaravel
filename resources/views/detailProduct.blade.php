@extends('layouts.app')




@section('content')


        <p>Nom du produit {{$product->name}}</p>
        <img src="{{$product->img}}" alt="image de : {{$product->name}}">
        <p>il reste {{$product->quantity}} de ce produit en stock</p>

@endsection











