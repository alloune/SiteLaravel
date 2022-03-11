@extends('layouts.app')




@section('content')

    @foreach ($product as $features)
        <p>Nom du produit {{$features->name}}</p>
        <img src="{{$features->img}}" alt="image de : {{$features->name}}">
        <p>il reste {{$features->quantity}} de ce produit en stock</p>

    @endforeach





    @endsection




    {{--    @foreach ($products as $product)--}}
{{--        <p>Nom du produit {{$product->name}}</p>--}}













