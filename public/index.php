<?php
require '../vendor/autoload.php';

$labetedu45 = new App\Truck('red', 9, 200);

echo $labetedu45->cargoProgress() . '<br>';

$labetedu45->setCargo(210);

echo $labetedu45->cargoProgress() . '<br>';

echo $labetedu45->getCurrentSpeed() . '<br>';

echo $labetedu45->forward() . '<br>';

echo $labetedu45->getCurrentSpeed() . '<br>';

echo $labetedu45->brake() . '<br>';

echo $labetedu45->getCurrentSpeed() . '<br>';

var_dump($labetedu45);

$voiture = new \App\Bike('red', 4);
var_dump($voiture);


$highway = new App\MotorWay();

var_dump($highway);

$highway->addVehiclule($voiture);

var_dump($highway);

$jean = new \App\Car('red','5','fuel');
$jean->start();