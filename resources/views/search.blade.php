@extends('layouts.app')
@section('title', "Search")
@section('content')


    <div style="margin-top: 100px">
        @if($products->isNotEmpty())
            @foreach ($products as $product)
                <div>
                    <h2>{{ $product->name }}</h2>
                    <img src="{{ $product->image }}">
                </div>
            @endforeach
        @else
            <div>
                <h2>No result found</h2>
            </div>
        @endif
    </div>


@endsection
