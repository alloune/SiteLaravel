@extends('layouts.template')
@section('title', "Home")
@section('content')


    <div>
        <div class="homepage_img">
            <img src="{{ asset('homepage_graduation.jpg') }} " alt="graduating">
            <div class="centered_text">
                <p>APPRENEZ DES PLUS GRANDES<br>UNIVERSITES DEPUIS CHEZ VOUS</p>
                <a href="{{ route('register') }}" class="img_button">Inscrivez-vous<br>gratuitement</a>
            </div>
        </div>
    </div>
    <div class="bodyHP">
        <h1 class="h1_homepage">Découvrez nos formations dans diverses domaines<br>provenant des meilleures universités du
            monde
        </h1>
        <div class="logo_university_homepage">
            @foreach($listLogo as $key => $logo)
                <img src="{{ $logo['logo'] }}" alt="logo university">
            @endforeach
        </div>
        <div class="courses_button">
            <a href="{{ route('products') }}" class="myButton">Découvrez nos cours certifiants</a>
        </div>
    </div>



@endsection
