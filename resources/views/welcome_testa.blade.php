@extends('layouts.app')
@section('title', "Home")
@section('content')

    <div class="homepage_img">
        <img src="{{ asset('homepage_graduation.jpg') }} " alt="graduating">
        <div class="centered_text">
            <p>APPRENEZ<br>DES PLUS GRANDES UNIVERSITES  DEPUIS CHEZ VOUS</p>
            <a href="{{ route('products') }}" class="img_button">Inscrivez-vous<br>gratuitement</a>
        </div>
    </div>
    <div>
    <h1 class="h1_homepage">Découvrez nos formations dans diverses domaines provenant des meilleures universités du monde</h1>
    </div>
    <div class="logo_university_homepage">
        <img src="{{ asset('logo_universite.jpg') }}" alt="logo university">
    </div>
    <div class="block_with_picture">
        @foreach($listCertif as $key => $certif)
        <div class="">
                <h1>{{ $key }}</h1>
                <p>{{ $certif['description'] }}</p>
                <img src="{{ $certif['backgroundImg'] }}" alt="background image de la fac">
        </div>

        @endforeach
    </div>

    <div class="courses_button">
        <a href="{{ route('products') }}" class="myButton">Découvrez nos cours certifiants</a>
    </div>


@endsection
