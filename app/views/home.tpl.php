
<?php foreach ($viewData['pokemons'] as $pokemon) : ?>
    
    <article class="card"><a href="<?= $router->generate('pokemon',['id'=>$pokemon->getNumber()])?>">
        <img src="<?= $router->generate('home')?>/assets/img/<?=$pokemon->getNumber()?>.png" alt="<?=$pokemon->getName()?>">
        <h3>#<?=$pokemon->getNumber() . ' ' . $pokemon->getName()?></h3>
        </a>
    </article>
<?php endforeach; ?>