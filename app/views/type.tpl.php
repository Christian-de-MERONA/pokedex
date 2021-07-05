<h2 class="pokemon-type-title">Cliquez sur un type pour voir tous les Pokémon de ce type</h2>
<div class="color-container">
    <?php foreach($types as $type) : ?>
        <a href="<?= $router->generate("pokemon-of-type", ['id' => $type->getId()]) ?>" class="color-box" style="background-color:#<?= $type->getColor() ?>">
            <?= $type->getName()?>
        </a>
    <?php endforeach ?>
</div>