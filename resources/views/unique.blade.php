@extends('layouts.app')

@section('title')
    Graduate - {{ $product[0]->name }}
@endsection

@section('content')
    <div class="productInfo">
        <div>
            <h1>{{ $product[0]->name }}</h1>
            <img src="{{ $product[0]->image }}">
            <p>Prix : {{ $product[0]->price }} €</p>
            <p>Weight : {{ $product[0]->price }}</p>
        </div>
        <div class="productDesc">
            <p>{{ $product[0]->description }}</p>
        </div>
    </div>
@endsection
