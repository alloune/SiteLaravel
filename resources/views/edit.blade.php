@extends('layouts.app')
<br>
<br>

<div class="text-center">
    <img src="{{$product->img}}" class="rounded" alt="{{$product->name}}">
</div>
<form  action="/backoffice/product/{{$product->id}}/update" method="post">

    @csrf
    {{ method_field('put') }}

    <legend>Modifier produit</legend>

        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nom du produit</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$product->name}}" placeholder={{$product->name}}>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Prix du produit</label>
            <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" value="{{$product->price}}" placeholder={{$product->price}}>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">modifier</button>

</form>
