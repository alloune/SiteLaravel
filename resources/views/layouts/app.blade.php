<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/bahjat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.navbar')
@yield('content')
</body>
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
</html>
