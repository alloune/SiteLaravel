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
        <h2>Cours gratuits</h2>
        <p>Nos cours gratuits dispensées par des universités et des entreprises privées</p>
        <img src="{{ asset('cours_pics.jpg') }}" alt="test">
    </div>
    <div class="courses_button">
        <a href="{{ route('products') }}" class="myButton">Découvrez nos cours gratuits</a>
    </div>
    </div>
    <div class="block_with_picture">
        <h2>Formations diplomantes</h2>
        <p>Formez-vous dans les universités les plus prestigieuses du monde et valoriser votre travail par l’obtention
            d’un diplôme</p>
        <img src="{{ asset('cours_pics.jpg') }}" alt="test">
    </div>
    <div class="courses_button">
        <a href="{{ route('products') }}" class="myButton">Découvrez nos formations diplomantes </a>
    </div>
    </div>
    <div class="block_with_picture">
        <h2>Cours certifiants</h2>
        <p>Découvrez nos cours certifiants. Attirez les recruteurs en valorisant votre validation du cours par une certification
            délivrée par une université.</p>
        <img src="{{ asset('cours_pics.jpg') }}" alt="test">
    </div>
    <div class="courses_button">
        <a href="{{ route('products') }}" class="myButton">Découvrez nos cours certifiants</a>
    </div>


@endsection
