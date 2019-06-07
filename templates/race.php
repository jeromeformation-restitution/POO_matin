<?php

use src\vehicles\Car;
use src\vehicles\Moto;
use src\vehicles\Plane;
use src\vehicles\SuperCopter;

require dirname(__DIR__) . '/autoloader.php';

$plane=new Plane('airforceone','kerozene',4,10000);
$plane->move(10000);


$moto=new Moto('suzuki',"essence",2,900);
$moto->move(50);
$moto->move(50);

$supercopter=new SuperCopter('ko',"essence",4,1900);
$supercopter->move(50);

$car=new Car('lamborgini bitcoin',"essence",4);
$car->move(1);
