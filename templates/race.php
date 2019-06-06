<?php
require dirname(__DIR__) . '/autoloader.php';

$vehicle = new Vehicle('Renault', 'essence', 4);
var_dump($vehicle);
$vehicle->move(100);
var_dump($vehicle);
$vehicle->setBrand('mercedes');
var_dump($vehicle);
Cpt::setCompteur(0);
echo (Cpt::getCompteur());
////Plane
$airbus380 = new Plane('Airbus', 'Kérosène', 22);
$airbus380->setMaxAlt(10000);
var_dump($airbus380);
$airbus380->move(200);
var_dump($airbus380);
$yatch = new Boat('commander', 'essence', ['dunkerk','marsaille','Calais']);
var_dump($yatch);
$garage = new Garage();
$garage->addVehicle($vehicle);
$garage->addVehicle($airbus380);
$garage->addVehicle($yatch);
var_dump($garage);
////compteur
echo (Cpt::getCompteur());
Cpt::setCompteur(1);
echo (Cpt::getCompteur());
Cpt::add();
echo (Cpt::getCompteur());



