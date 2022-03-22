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


    <form method="POST" action="{{ route("customers.update", $customer) }}">
        {{--update d'une formation existante--}}
        @method("PUT")
        @csrf
<div class="container">
    <div class="row">
        <p>FORMULAIRE EDITION CUSTOMER</p>
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
                    <td><input type="text" name="last_name"  value="{{$customer->last_name}}"></td>
                    <td><input type="text" name="first_name"  value="{{$customer->first_name}}"></td>
                    <td><input type="text" name="address"  value="{{$customer->address}}"></td>
                    <td><input type="text" name="postal_code"  value="{{$customer->postal_code}}"></td>
                    <td><input type="text" name="city"  value="{{$customer->city}}"></td>



                </tr>
            </tbody>
        </table>
        <input type="submit" value="Valider les changements">
</div>
    </form>





@endsection

