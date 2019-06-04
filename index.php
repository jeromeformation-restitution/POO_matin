<?php

require 'autoloader.php';

$hamac = new Produit; //myAutoloader ("Produit")
$hamac->setName('Hamac');
$hamac->setDescription('Pour se reposer après une semaine de PHP');
$hamac->setImageName('hamac.jpg');
$hamac->setPrice(25);

var_dump($hamac);


$parasol = new Produit;
$parasol->setName('parasol');
$parasol->setDescription('Pour eviter les UV');
$parasol->setImageName('parasol.jpg');
$parasol->setPrice(-58);

var_dump($parasol);