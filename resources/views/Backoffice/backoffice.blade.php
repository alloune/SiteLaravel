@extends('layouts.app')
@section('title', "Backoffice")
@section('content')

    <table class="table table-hover" style="margin-top: 100px">
        <thead>
        <tr><th scope="col"> <a href="{{ route('backofficeproductadd') }}"><button type="button" class="btn btn-success">Add product</button></a></th></tr>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
            <th scope="col">No going back</th>
        </tr>
        </thead>

        @foreach($products as $key => $list)
        <tbody>
        <tr class="{{ $list->quantity === 0 ? 'bg-warning': ''}}"> {{-- if condition (ternary condition --}}

            <th scope="row">{{ $list->id }}</th>
            <td>{{ $list->name }}</td>
            <td>{{ $list->description }}</td>
            <td>{{ $list->price }} €</td>
            <td>{{ $list->quantity }}</td>
            <td>
                <a href="{{ route('backofficeproduct', $list->id) }}"> <button type="button" class="btn btn-primary">View</button></a>
                <a href="{{ route('backofficeproductedit', $list->id) }}"><button type="button" class="btn btn-primary">Update</button></a>
                </td>
            <td>
                <form method="post" action="{{ route('backofficeproductsdelete', $list) }}">
                    @csrf
                    @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        </tbody>
        @endforeach
    </table>

@endsection
