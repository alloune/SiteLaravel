@extends('layouts.app')
@section('title', 'Products')
@section('content')

    <div class="teacherBlock">
        <h2>Nos produits</h2>
    </div>

    <div class="globalDesc">

        @foreach($products as $key => $list)
            <li>
        <p>Nom du produit: {{ $list->name }}</p>
            <img src="{{ $list->image }}">
                <p>Prix: {{ $list->price }} €</p>
            </li>
        @endforeach

    </div>
@endsection
