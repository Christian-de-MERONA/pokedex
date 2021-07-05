<div class="container">
    <?php foreach ($pokemons as $pokemon) : ?>
        <div class="card">
            <a href="<?= $_SERVER["BASE_URI"] . "/detail/" . $pokemon->getNumero() ?>" class="card__image-link">
                <img src="<?= $_SERVER["BASE_URI"] . "/assets/img/" . $pokemon->getNumero() . ".png"  ?>" alt="<?= $pokemon->getNom() ?>" class="card__image">
            </a>
            <a href="<?= $_SERVER["BASE_URI"] . "/detail/" . $pokemon->getNumero() ?>" class="card__name">#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></a>
        </div>
    <?php endforeach ?>
</div>