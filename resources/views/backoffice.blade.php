@extends('layouts.app')


@section('content')
    <br>
    <br>

    <a href="{{ route("add")}}"><button type="button" class="btn btn-secondary">ajouter</button></a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CATHEGORIES</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
             <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                 <td>{{$product->categorie}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                 <th><a href="{{ route("displayProductDetailPage",['id'=>$product->id])}}"><button type="button" class="btn btn-info">voir</button></a></th>
                 <th><a href="{{ route("edit",['id'=>$product->id])}}"> <button type="button" class="btn btn-success">modifier</button></a></th>
                 <form  action="/backoffice/product/{{$product->id}}/delete" method="post">
                     @method('delete')
                         @csrf
                     <th><a href="{{ route("delete",['id'=>$product->id])}}"><button type="submit" class="btn btn-danger">supprimer</button></a></th>
                    </form>
                 </th>


            </tr>

            @endforeach
            </tbody>
        </table>

@endsection



{{--        <p>Nom du produit {{$product->name}}</p>--}}
{{--        <a href="/product/{{$product->id}}"><img src="{{$product->img}}" alt="image de : {{$product->name}}"></a>--}}
{{--        <p>{{$product->name}} = {{$product->price}}</p>--}}
{{--        <p>il reste {{$product->quantity}} de ce produit en stock</p>--}}

{{--    <th scope="col">Player</th>--}}
