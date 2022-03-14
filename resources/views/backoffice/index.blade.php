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
                <td><a href="{{ route('backoffice.show', ['backoffice'=>$product]) }}">Voir</a></td>
                <td><a href="{{ route('backoffice.edit', ['backoffice'=>$product]) }}">Modifier</a></td>
                <td><form method="Post" action="{{ route('backoffice.destroy', ['backoffice'=>$product->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <h3>Ajouter une formation</h3>

    <a href="{{ route("backoffice.create") }}">Créer une formation</a>
@endsection

