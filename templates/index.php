<?php
require ('inc/header.php');
require dirname(__DIR__) . '/src/controller/indexController.php';
?>

<main class="container">
    <section class="row">
    <?php foreach ($produits as $produit) : ?>
    <div class="card" style="width: 18rem;">
        <img src="/public/images/uploads/<?= $produit->getImageName() ?>" class="card-img-top" alt="...">
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