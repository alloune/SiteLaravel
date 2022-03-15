@extends('layouts.app')
@section('title', "Backoffice")
@section('content')

    <table class="table" style="margin-top: 100px">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
        </tr>
        </thead>
        @foreach($products as $key => $list)
        <tbody>
        <tr
            @if($list->quantity === 0)
            class="bg-danger"
            @endif>
            <th scope="row">{{ $list->id }}</th>
            <td>{{ $list->name }}</td>
            <td>{{ $list->description }}</td>
            <td>{{ $list->price }} €</td>
            <td>{{ $list->quantity }}</td>
            <td
                @if($list->quantity === 0)
                class="bg-white"
                @endif>
                <a href="{{ route('backofficeproduct', $list->id) }}"> <button type="button" class="btn btn-primary">View</button></a>
                <a href="{{ route('backofficeproductedit', $list->id) }}"><button type="button" class="btn btn-primary">Update</button></a>

                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>

        </tbody>
        @endforeach

    </table>

    <a href="{{ route('backofficeproductadd') }}"><button type="button" class="btn btn-success">Add product</button></a>



@endsection
