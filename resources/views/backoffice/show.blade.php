@extends('layouts.app')

@section('title', 'BackOffice --  Graduate')

@section('content')


    <h1>Rendu de la formation</h1>

    <h3>Nom de la formation : </h3>
    <p>{{ $backoffice->name }}</p>

    <h3>Description : </h3>
    <p>{{ $backoffice->description }}</p>

    <h3>Image : </h3>
    <img src="{{ $backoffice->image }}">

    <h3>Prix : </h3>
    <p>{{ $backoffice->price }} €</p>

    <h3>Poids : </h3>
    <p>{{ $backoffice->weight }}</p>

    <h3>Disponible: </h3>
    <p>{{ $backoffice->available }}</p>

    <h3>Quantité : </h3>
    <p>{{ $backoffice->quantity }}</p>







@endsection

