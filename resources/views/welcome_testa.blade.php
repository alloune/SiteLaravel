@extends('layouts.template')
@section('title', "Home")
@section('content')

    <div class="homepage_img">
        <img src="{{ asset('homepage_graduation.jpg') }} " alt="graduating">
        <div class="centered_text">
            <p>APPRENEZ<br>DES PLUS GRANDES UNIVERSITES DEPUIS CHEZ VOUS</p>
            <a href="{{ route('products') }}" class="img_button">Inscrivez-vous<br>gratuitement</a>
        </div>
    </div>

  <div class="bodyHP">
    <h1 class="h1_homepage">Découvrez nos formations dans diverses domaines provenant des meilleures universités du monde</h1>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="search" required/>
        <button type="submit">Search</button>
    </form>
    <div>
        <h1 class="h1_homepage">Découvrez nos formations dans diverses domaines provenant des meilleures universités du monde</h1>
    </div>
    <div class="logo_university_homepage">
        @foreach($listLogo as $key => $logo)
            <img src="{{ $logo['logo'] }}" alt="logo university">
        @endforeach
    </div>
    <div class="block_with_picture">

    </div>

        @foreach($listCertif as $key => $certif)
            <div class="">
                <h1>{{ $key }}</h1>
                <p>{{ $certif['description'] }}</p>
                <img src="{{ $certif['backgroundImg'] }}" alt="background image de la fac">

                @endforeach
            </div>

            <div class="courses_button">
                <a href="{{ route('products') }}" class="myButton">Découvrez nos cours certifiants</a>
            </div>
    </div>
  </div>


@endsection
