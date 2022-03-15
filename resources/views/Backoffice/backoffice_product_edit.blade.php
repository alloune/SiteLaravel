@extends('layouts.app')
@section('title', "Backoffice")
@section('content')

    <div class="one_product">
        <form class="one_product" method="post" action="{{ route('backofficeproductupdate', ['product'=>$product->id]) }}">
            @csrf
            @method('PUT')
        <div class="product_description">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail">
        </div>
        <div class="product_description">
            <label>Nom du produit:</label>
            <input type="text" name="name" value="{{ $product->name }}">
            <label>Categorie:</label>
            <input type="text" name="category_id" value="{{ $product->category_id }}">
            <label>Prix:</label>
            <input type="text" name="price" value="{{ $product->price }}">
            <label>Description:</label>
            <textarea type="text" name="description" value="{{ $product->description }}"></textarea>
            <label>Image:</label>
            <input type="text" name="image" value="{{ $product->image }}">
            <label>Poid:</label>
            <input type="text" name="weight" value="{{ $product->weight }}">
            <label>En vente:</label>
            <input type="text" name="available" value="{{ $product->available }}">
            <label>Quantité disponible:</label>
            <input type="text" name="quantity" value="{{ $product->quantity }}">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
    </div>




@endsection
