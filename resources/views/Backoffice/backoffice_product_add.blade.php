@extends('layouts.app')
@section('title', "Backoffice")
@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="one_product">
        <form class="one_product" method="post" action="{{ route('backofficeproductadd', ['product'=>$product->id]) }}">
            @csrf

            <div class="product_description">
                <label>Nom du produit:</label>
                <input type="text" name="name">
                <label>Categorie:</label>
                <input type="text" name="category_id">
                <label>Prix:</label>
                <input type="text" name="price">
                <label>Description:</label>
                <textarea name="description"></textarea>
                <label>Image:</label>
                <input type="text" name="image">
                <label>Poid:</label>
                <input type="text" name="weight">
                <label>En vente:</label>
                <input type="text" name="available">
                <label>Quantité disponible:</label>
                <input type="text" name="quantity">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>




@endsection