<?php
$pokemons = $viewData['pokemonsByType'];
$pokemonsList = $viewData['pokemonList'];
?>

<?php foreach ($pokemons as $pokemon) : ?>

    <article class="card">
        <img src="<?= $router->generate('home') ?>/assets/img/<?= $pokemon->getNumber() ?>.png" alt="">
        <?php foreach ($pokemonsList as $pokemonName) : ?>
            <?php if ($pokemonName->getNumber() == $pokemon->getNumber()) : ?>
                <h3><a href="<?= $router->generate('pokemon',['id'=>$pokemon->getNumber()])?>">#<?= $pokemon->getNumber() ." ". $pokemonName->getName() ?></a> </h3>
            <?php endif; ?>
        <?php endforeach; ?>
        </a>
    </article>
<?php endforeach; ?>