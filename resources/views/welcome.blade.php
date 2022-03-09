@extends('layouts.app')
@section('title')
    <title>Home</title>
@endsection

@section('content')

    <div class="homepage_img">
        <img src="{{ asset('homepage_graduation.jpg') }}" alt="graduating">
        <div class="centered_text">
            <p>APPRENEZ<br>DES PLUS GRANDES UNIVERSITES  DEPUIS CHEZ VOUS</p>
            <a href="#" class="img_button">Inscrivez-vous gratuitement</a>
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
    </div>


@endsection
