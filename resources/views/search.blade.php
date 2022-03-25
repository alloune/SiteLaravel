@extends('layouts.app')
@section('title', "Search")

@section('content')




    <div class="card border-info mb-3" style="max-width: 800px; margin-top: 100px; margin-left: 25%;">
        @if($products->isNotEmpty())
            @foreach ($products as $product)
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $product->image }}" class="img-fluid rounded-start" alt="{{ $product->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <br>
                    <p class="card-text" style="color: black">{{ $product->description }}</p>
                    <p class="card-text" style="color: black">Prix : {{ $product->price }} €</p>
                </div>
            </div>
        </div>
            @endforeach
        @else
            <div>
                <h2>No result found</h2>
            </div>
        @endif
    </div>


@endsection
