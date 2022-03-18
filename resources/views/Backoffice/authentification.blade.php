@extends('layouts.app')
@section('title', "Backoffice")
@section('content')




    <div class="one_product" style="margin-bottom: 100px">
        <form class="row g-2">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

@endsection
