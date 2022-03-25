@extends('backoffice.layout.index')
@section('title', 'Tous les produits')



@section('content')





    <table class="table  table-striped">
        <thead>
        <tr>
            <th>Nom du client</th>
            <th>Prenom du client</th>
            <th colspan="3">Adresse du client</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)

            <tr>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->postal_code }}</td>
                <td>{{ $customer->city }}</td>

                <td>
                    <a class="btn btn-light" href="{{ route('customers.edit', $customer) }}">Modifier</a>

                </td>
                <td>
                    <form method="Post" action="{{ route('customers.destroy', $customer->id) }}">

                @csrf
                @method('DELETE')
                <input type="submit" value="Supprimer">
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

<div>
    <button type="button" class="btn btn-primary btn-lg">
        <a style="text-decoration: none; color:white;" href="{{ route("customers.create") }}">Créer un nouveau client</a>
    </button>
</div>
@endsection

