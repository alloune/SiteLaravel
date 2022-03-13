@extends('layouts.app')

@section('title', 'BackOffice --  Graduate')

@section('content')

    <h1>Bienvenue sur la page de gestion de base de données</h1>



    <table>
        <thead>
        <tr>
            <th>Nom du produit</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)

            <tr>
                <td>{{ $product->name }}</td>
                <td><a href="{{ route('backoffice.show', $product) }}"> PRODUCT ID = {{ $product->id  }} Voir</a></td>
                <td><a href="#">Modifier</a></td>
                <td>Supprimer</td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <h3>Ajouter une formation</h3>
@endsection
