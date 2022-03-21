@extends('layouts.app')

@section('content')

    <br>
    <br>

    <div class="text-center">
        <img src="{{$product->img}}" class="rounded" alt="{{$product->name}}">
    </div>

    <form  action="/backoffice/product/{{$product->id}}/update" method="post">

        @csrf

        <legend>Modifier produit</legend>

        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nom du produit</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder={{$product->name}}>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Prix du produit</label>
            <input type="text" name="price" class="form-control" value="{{$product->price}}" placeholder={{$product->price}}>
        </div>
        <button type="submit" class="btn btn-primary">modifer</button>

    </form>

@endsection
