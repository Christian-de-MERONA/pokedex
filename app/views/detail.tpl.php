<div class="detail-card">
    <h1 class="detail-card__title">Details de <?= $pokemon->getNom() ?></h1>
    <div class="detail-card__container">
        <div class="image">
            <img src="<?= $_SERVER["BASE_URI"] ?>/assets/img/<?= $pokemon->getNumero() ?>.png" alt="<?= $pokemon->getNom() ?>" class="detail-card__image">
        </div>
        <div class="stats">
            <h2>#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></h2>
            <div class="pokemon-types">
                <?php foreach($types as $type) : ?>
                    <a class="small-color-box" href="<?= $router->generate("pokemon-of-type", ['id' => $type->getId()]) ?>" style="background-color: #<?= $type->getColor() ?>;"><?= $type->getName() ?></a>
                <?php endforeach ?>
            </div>
            <h3>Statistiques</h3>
                <div class="stats-table">
                    <div class="stat-item">
                        <a class="stats-name">PV</a>
                        <a class="stats-num"><?= $pokemon->getPv() ?></a>
                        <div class="stats-background">
                            <div class="stats-level" style="width: <?= $pokemon->getPv() ?>px;"></div>
                        </div>
                    </div>
                    <div class="stat-item">
                        <a class="stats-name">Attaque</a>
                        <a class="stats-num"><?= $pokemon->getAttaque() ?></a>
                        <div class="stats-background">
                            <div class="stats-level" style="width: <?= $pokemon->getAttaque() ?>px;"></div>
                        </div>
                    </div>
                    <div class="stat-item">
                        <a class="stats-name">Défense</a>
                        <a class="stats-num"><?= $pokemon->getDefense() ?></a>
                        <div class="stats-background">
                            <div class="stats-level"  style="width: <?= $pokemon->getDefense() ?>px;"></div>
                        </div>
                    </div>
                    <div class="stat-item">
                        <a class="stats-name">Attaque Spé.</a>
                        <a class="stats-num"><?= $pokemon->getAttaqueSpe() ?></a>
                        <div class="stats-background">
                            <div class="stats-level"  style="width: <?= $pokemon->getAttaqueSpe() ?>px;"></div>
                        </div>
                    </div>
                    <div class="stat-item">
                        <a class="stats-name">Defense spé.</a>
                        <a class="stats-num"><?= $pokemon->getDefenseSpe() ?></a>
                        <div class="stats-background">
                            <div class="stats-level"  style="width: <?= $pokemon->getDefenseSpe() ?>px;"></div>
                        </div>
                    </div>
                    <div class="stat-item">
                        <a class="stats-name">Vitesse</a>
                        <a class="stats-num"><?= $pokemon->getVitesse() ?></a>
                        <div class="stats-background">
                            <div class="stats-level"  style="width: <?= $pokemon->getVitesse() ?>px;"></div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div>