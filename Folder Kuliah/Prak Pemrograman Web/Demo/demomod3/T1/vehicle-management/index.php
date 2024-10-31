<?php
require_once 'src/Traits/VehicleTraits.php';
require_once 'src/Abstracts/Vehicle.php';
require_once 'src/Cars.php';
require_once 'src/Motorcycles.php';

use src\Cars;
use src\Motorcycles;

// Membuat objek mobil
$car = new Cars("Toyota", "Camry");
echo $car->getDetails() . PHP_EOL;
echo $car->start() . PHP_EOL;
echo $car->stop() . PHP_EOL;

// Membuat objek sepeda motor
$motorcycle = new Motorcycles("Honda", "CBR");
echo $motorcycle->getDetails() . PHP_EOL;
echo $motorcycle->start() . PHP_EOL;
echo $motorcycle->stop() . PHP_EOL;