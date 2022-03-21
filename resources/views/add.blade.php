@extends('layouts.app')


@section('content')
<br>
<br>

<form  action="{{route ('creat')}}" method="POST">

    @csrf

    <legend>Modifier produit</legend>

    <th class="mb-3">
        <th></TH><label for="disabledTextInput" class="form-label">ID</label></th>
        <input type="text" name="id" class="form-control" value="" placeholder=>
    </div>
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">NAME</label>
        <input type="text" name="name" class="form-control" value="" placeholder=>
    </div>
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">PRICE</label>
        <input type="text" name="price" class="form-control" value="" placeholder=>
    </div>
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">IMG</label>
        <input type="text" name="img" class="form-control" value="" placeholder=>
    </div>
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">QUANTITY</label>
        <input type="text" name="price" class="form-control" value="" placeholder=>
    </div>
    <button type="submit" class="btn btn-primary">modifer</button>

</form>














@endsection
