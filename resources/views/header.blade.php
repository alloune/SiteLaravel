<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bahjat.css') }}">

    <div class="topnav">
        <img src="{{ asset('Logo.svg') }}">
        <a href="#">Connexion</a>
        <a href="#">Mon panier</a>
        <a href="#">A propos</a>
        <a href="#">Diplômes</a>
    </div>
</head>
