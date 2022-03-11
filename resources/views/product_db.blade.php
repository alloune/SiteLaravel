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
            <a href="{{ route('product', $list->id) }}"><img src="{{ $list->image }}"></a>
                <p>Prix: {{ $list->price }} €</p>
            </li>

        @endforeach
{{--        @dump($list)--}}

    </div>
@endsection
