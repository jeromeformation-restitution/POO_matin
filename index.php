<?php
require 'autoloader.php';

$bdd = new PDO('mysql:host=localhost;dbname=catalogue2', 'root');
$sql = 'SELECT * FROM produit WHERE publication_state = 1';
$result = $bdd->query($sql);
$produits = $result->fetchAll(PDO::FETCH_CLASS,'Produit');
var_dump ($produits);

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