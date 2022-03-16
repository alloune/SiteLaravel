@extends('backoffice.layout.index')

@section('title', 'Creation')

@section('content')

    @if($errors->any())
        <div class="errorDisplay">

        @foreach($errors->all() as $error)
            <div style="color: red">Oups ! {{ $error }}</div>
        @endforeach
        </div>
    @endif


            <form method="POST" action="{{ route('backoffice.store') }}">
                @csrf
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th>Valeur</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nom</td>
                        <td><input type="text" placeholder="Nom" name="name" ></td>
{{--                        class="@error('name') is-invalid @enderror" a mettre dans le form--}}
{{--                        @error('name')--}}
{{--                        <tr>{{ $error }}</tr>--}}
{{--                        @enderror--}}

                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>
                            <input type="textarea" cols="40" rows="5" placeholder="Description de la formation"
                                   name="description"></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="texte" placeholder="Lien de l'image" name="image"></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="number" placeholder="Prix" name="price"></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><input type="text" placeholder="Poids (en g)" name="weight"></td>
                    </tr>
                    <tr>
                        <td>Disponible</td>
                        <td><select name="available">
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Quantité</td>
                        <td><input type="number" placeholder="Unité" name="quantity"></td>
                    </tr>
                    </tbody>

                </table>
                <input type="submit" value="Ajouter la formation">
            </form>


@endsection

