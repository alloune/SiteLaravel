
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bahjat.css') }}">
    <link rel="stylesheet" href="{{ asset('apropos.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

@include('layouts.navbar')
@yield('content')

<footer>
    <div class="firstPartFoot">
        <div class="listFooterGraduate">
            <h3>Graduate</h3>

            <ul>
                <li>A propos</li>
                <li>Ce que nous proposons</li>
                <li>Direction</li>
                <li>Carrières</li>
                <li>Catalogue</li>
                <li>Graduate Plus</li>
                <li>Certificats professionnels</li>

            </ul>
        </div>
        <div class="listFooterCommunaute">
            <h3>Communauté</h3>

            <ul>
                <li>Étudiants</li>
                <li>Partenaires</li>
                <li>Développeurs</li>
                <li>Béta testeur</li>
                <li>Traducteurs</li>
                <li>Blog Tech</li>
                <li>Centre d'enseignement</li>
            </ul>
        </div>
    </div>
    <div class="favicon">
        <p>&copy; 2022 Graduate Inc. Tous droits réservés.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
