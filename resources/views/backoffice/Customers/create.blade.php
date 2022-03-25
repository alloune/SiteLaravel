@extends('backoffice.layout.index')

@section('title', 'BackOffice --  Graduate')

@section('content')

    @if($errors->any())
        <div class="errorDisplay">

            @foreach($errors->all() as $error)
                <div style="color: red">Oups ! {{ $error }}</div>
            @endforeach
        </div>
    @endif


    <form method="POST" action="{{ route("customers.store") }}">
        {{--update d'une formation existante--}}
        @csrf
        <div class="container">
            <div class="row">
                <p>FORMULAIRE CREATION CUSTOMER</p>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="last_name"  placeholder="Nom"></td>
                    <td><input type="text" name="first_name"  placeholder="Prenom"></td>
                    <td><input type="text" name="address"  placeholder="Adresse"></td>
                    <td><input type="text" name="postal_code"  placeholder="Code Postal"></td>
                    <td><input type="text" name="city"  placeholder="Ville"></td>



                </tr>
                </tbody>
            </table>
            <input type="submit" value="Valider la creation">
        </div>
    </form>





@endsection

