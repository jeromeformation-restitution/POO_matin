<?php

require 'autoloader.php';

$hamac = new Produit; //myAutoloader ("Produit")
$hamac->setName('Hamac');
$hamac->setDescription('Pour se reposer après une semaine de PHP');
$hamac->setImageName('hamac.jpg');
$hamac->setPrice(25);

$parasol = new Produit;
$parasol->setName('parasol');
$parasol->setDescription('Pour éviter les UV');
$parasol->setImageName('parasol.jpg');
$parasol->setPrice(-58);

$produits = [$hamac, $parasol];

require('inc/header.php');

?>

<main class="container">
    <section class="row">
    <?php foreach ($produits as $produit) : ?>
    <div class="card" style="width: 18rem;">
        <img src="../images/uploads/<?= $produit->getImageName() ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $produit->getName()?></h5>
            <p class="card-text"><?= $produit->getdescription() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php endforeach; ?>
    </section>
</main>

<?php
require ('inc/footer.php');
?>