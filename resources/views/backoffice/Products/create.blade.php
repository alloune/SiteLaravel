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
                        <td><input type="text" class="@error('name') is-invalid @enderror" placeholder="Nom" name="name" >
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>
{{--                        class="@error('name') is-invalid @enderror" a mettre dans le form--}}
{{--                        @error('name')--}}
{{--                        <tr>{{ $error }}</tr>--}}
{{--                        @enderror--}}

                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>
                            <input type="textarea" name="description" class="@error('description') is-invalid @enderror" cols="40" rows="5" placeholder="Description de la formation">
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>

                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="texte" class="@error('image') is-invalid @enderror" placeholder="Lien de l'image" name="image">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="number" class="@error('price') is-invalid @enderror" placeholder="Prix" name="price">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>
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
                        <td><input type="number" class="@error('quantity') is-invalid @enderror" placeholder="Unité" name="quantity">
                            @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                    </tbody>

                </table>
                <input type="submit" value="Ajouter la formation">
            </form>


@endsection

