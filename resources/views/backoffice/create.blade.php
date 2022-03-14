@extends('layouts.app')

@section('title', 'BackOffice --  Graduate')

@section('content')


    <h1>Mise à jour de la formation</h1>

        <form method="POST" action="{{ route("backoffice.update", $backoffice) }}">
            {{--update d'une formation existante--}}
            @method("PUT")
            @csrf
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Valeur</th>
                    <th>Modification</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Nom</td>
                    <td>{{ $backoffice->name }}</td>
                    <td><input type="text" value="{{ $backoffice->name }}" name="name"></td>

                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $backoffice->description }}</td>
                    <td>
                        <input type="textarea" value="{{ $backoffice->description }}" cols="40" rows="5"
                               name="description"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><img style="width: 200px" src="{{ $backoffice->image }}"></td>
                    <td><input type="texte" value="{{ $backoffice->image }}" name="image"></td>
                </tr>
                <tr>
                    <td>Prix</td>
                    <td>{{ $backoffice->price }} €</td>
                    <td><input type="number" value="{{ $backoffice->price }}" name="price"></td>
                </tr>
                <tr>
                    <td>Poids</td>
                    <td>{{ $backoffice->weight }}</td>
                    <td><input type="text" value="{{ $backoffice->weight }}" name="weight"></td>
                </tr>
                <tr>
                    <td>Disponible</td>
                    <td>@if($backoffice->available==1)
                            Oui
                        @else
                            Non
                        @endif
                    </td>
                    <td><select name="available">
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Quantité</td>
                    <td>{{ $backoffice->quantity }}</td>
                    <td><input type="number" value="{{ $backoffice->quantity }}" name="quantity"></td>
                </tr>
                </tbody>

            </table>
            <input type="submit" value="Valider les changements">

                </form>



@endsection

