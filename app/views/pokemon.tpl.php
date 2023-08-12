<div class="form-card">
    <h1> Détails de <?= $viewData['pokemon']->getName(); ?> </h1>

    <div class="card--pokemon">
        <img src="<?= $absoluteURL ?>/assets/img/<?= $viewData['pokemon']->getNumber(); ?>.png" alt="<?= $viewData['pokemon']->getName(); ?>">
        <article class="card">

            <div class="pokement-details">
                <h2>#<?= $viewData['pokemon']->getNumber() . " " . $viewData['pokemon']->getName(); ?></h2>
                <?php $types = $viewData['types']; ?>
                <?php foreach ($types as $type) : ?>
                    <p class="pokemon_type" style="background-color:#<?= $type->getColor(); ?>"><?= $type->getName() ?></p>
                <?php endforeach; ?>
                <h2>Statistiques</h2>
                <?php
                $rating = 100 / 255; // produit en croix pour definir le pourcentage avec une base de 255;

                ?>
                <table class="stats">
                    <tr class="stats__row">

                        <td class="stats--item">PV</td>
                        <td class="stats--item value"><?= $viewData['pokemon']->getHp(); ?></td>


                        <td class="stats--item--wrapper">
                            <div class="progress" style="width: <?= ($viewData['pokemon']->getHp()) * $rating ?>%"></div>
                        </td>


                    </tr>
                    <tr class="stats__row">

                        <td class="stats--item">Attaque</td>
                        <td class="stats--item value"><?= $viewData['pokemon']->getAttack(); ?></td>


                        <td class="stats--item--wrapper">
                            <div class="progress" style="width: <?= ($viewData['pokemon']->getHp()) * $rating ?>%"></div>
                        </td>

                    </tr>
                    <tr class="stats__row">

                        <td class="stats--item">Défense</td>
                        <td class="stats--item value"><?= $viewData['pokemon']->getDefense(); ?></td>


                        <td class="stats--item--wrapper">
                            <div class="progress" style="width: <?= ($viewData['pokemon']->getDefense()) * $rating ?>%"></div>
                        </td>

                    </tr>
                    <tr class="stats__row">

                        <td class="stats--item">Attaque Spé</td>
                        <td class="stats--item value"><?= $viewData['pokemon']->getSpeAttack(); ?></td>


                        <td class="stats--item--wrapper">
                            <div class="progress" style="width: <?= ($viewData['pokemon']->getSpeAttack()) * $rating ?>%"></div>
                        </td>



                    </tr>
                    <tr class="stats__row">

                        <td class="stats--item">Défense Spé</td>
                        <td class="stats--item value"><?= $viewData['pokemon']->getSpeDefense(); ?></td>


                        <td class="stats--item--wrapper">
                            <div class="progress" style="width: <?= ($viewData['pokemon']->getSpeDefense()) * $rating ?>%"></div>
                        </td>

                    </tr>
                    <tr>

                        <td class="stats--item">Vitesse</td>
                        <td class="stats--item value"><?= $viewData['pokemon']->getSpeed(); ?></td>


                        <td class="stats--item--wrapper">
                            <div class="progress" style="width: <?= ($viewData['pokemon']->getSpeed()) * $rating ?>%"></div>
                        </td>

                    </tr>

                </table>
            </div>


        </article>
    </div>
    <a href="<?= $router->generate('home')?>">Revenir à la liste</a>