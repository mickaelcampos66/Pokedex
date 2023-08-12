<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="<?= $router->generate('home') ?>/assets/css/style.css" rel="stylesheet">
    <title>Pokedex</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="navbar-name" href="<?= $router->generate('home') ?>">Pokédex</a>
            <ul id="nav">
                <li class="nav-item"><a href="<?= $router->generate('home') ?>" class="nav-link">Liste</a></li>
                <li class="nav-item"><a href="<?= $router->generate('types') ?>#" class="nav-link">Types</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">