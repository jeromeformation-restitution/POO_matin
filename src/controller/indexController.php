<?php

use src\entities\Produit;
use src\utilities\Database;

require dirname(__DIR__, 2) . '/autoloader.php';

$database = new Database();
$database->connect();
$sql  = 'SELECT * FROM produit WHERE publication_state = 1';
$produits = $database->query($sql, Produit::class);
