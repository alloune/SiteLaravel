@extends('backoffice.layout.index')
@section('title', 'Tous les produits')



@section('content')





    <table class="table  table-striped">
        <thead>
        <tr>
            <th>Nom du produit</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)

            <tr>
                <td>{{ $product->name }}</td>
                <td>
                    <a class="btn btn-light" href="{{ route('backoffice.show', ['backoffice'=>$product]) }}">Voir</a>
                    <a class="btn btn-light"
                       href="{{ route('backoffice.edit', ['backoffice'=>$product]) }}">Modifier</a>
                </td>
                <td>
                    <form method="Post" action="{{ route('backoffice.destroy', ['backoffice'=>$product->id]) }}">

                @csrf
                @method('DELETE')
                <input type="submit" value="Supprimer">
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>


    <button type="button" class="btn btn-primary btn-lg"><a style="text-decoration: none; color:white;"
                                                            href="{{ route("backoffice.create") }}">Créer une
            formation</a></button>
@endsection

