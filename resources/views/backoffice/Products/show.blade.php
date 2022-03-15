@extends('backoffice.layout.index')

@section('title', 'BackOffice --  Show')

@section('content')

    <div class="card mb-3" style="max-width: 1240px;">
        <div class="row g-2">
            <div class="col-md-4">
                <img src="{{ $backoffice->image }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $backoffice->name }}</h5>
                    <p class="card-text"> Description :{{ $backoffice->description }}</p>
                    <p class="card-text"> Prix :{{ $backoffice->price }} €</p>
                    <p class="card-text">Poids : {{ $backoffice->weight }} g</p>
                    <p class="card-text">Disponible : @if($backoffice->available  == 1)Oui
                        @else
                    Non
                        @endif</p>
                    <p class="card-text">Quantité disponible : {{ $backoffice->quantity }}</p>

                </div>
            </div>
        </div>
    </div>





@endsection

