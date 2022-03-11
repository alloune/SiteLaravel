@extends('layouts.app')
@section('title', 'Product')
@section('content')

    <div class="teacherBlock">
        <h2>Hello</h2>
    </div>

    <div class="globalDesc">
{{--        @dd($product[0])--}}

        @foreach($product as $key => $list)
            <li>
        <p>Nom du produit: {{ $list->name }}</p>
            <img src="{{ $list->image }}">
                <p>Prix: {{ $list->price }} €</p>
            </li>
        @endforeach

    </div>
@endsection
