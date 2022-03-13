@extends('layouts.app')

@section('title')
{{--    Graduate - {{ $product->name }}--}}
@endsection

@section('content')
    <div class="productInfo">
{{--@dd($product)--}}
        <div>
            <h1>{{ $product->name }}</h1>
            <img src="{{ $product->image }}">
            <p>Prix : {{ $product->price }} €</p>
            <p>Weight : {{ $product->price }}</p>
        </div>
        <div class="productDesc">
            <p>{{ $product->description }}</p>
        </div>
    </div>
@endsection
