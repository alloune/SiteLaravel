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
        <tr>
            <th scope="row">{{ $list->id }}</th>
            <td>{{ $list->name }}</td>
            <td>{{ $list->description }}</td>
            <td>{{ $list->price }} €</td>
            <td>{{ $list->quantity }}</td>
            <td><div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div></td>
        </tr>
        </tbody>
        @endforeach
    </table>


@endsection
