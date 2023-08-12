<div><h3>Cliquez sur un type pour voir tous les Pokémons de ce type</h3></br>
</div>
<div class="types-wrapper">

    <?php foreach ($viewData['types'] as $type) : ?>
        <article class="type" style="background-color: #<?= $type->getColor(); ?>">
            <a href = "<?=$router->generate('type', ['id'=> $type->getId()])?>"class="type--item"><?= $type->getName() ?></a>
        </article>
    <?php endforeach; ?>

    </section>
</div>