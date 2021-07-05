<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po'Clockdex</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $_SERVER["BASE_URI"] ?>/assets/css/style.css">
    <link rel="shortcut icon" href="<?= $_SERVER["BASE_URI"] ?>/assets/png-clipart-pokeball-pokeball.png" type="image/x-icon">
</head>
<body class="background">
    <header>
        <nav class="navbar">
            <a class="page-title">Pokédex</a>
            <ul class="navbar__list">
                <li class="navbar__item">
                    <a href="<?= $router->generate("home") ?>" class="navbar__link">Liste</a>
                </li>
                <li class="navbar__item">
                    <a href="<?= $router->generate("type") ?>" class="navbar__link">Types</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
    
