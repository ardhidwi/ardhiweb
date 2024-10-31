<?php
require_once 'Car.php';
require_once 'Bike.php';

use App\Models\Car;
use App\Models\Bike;

// Membuat instance Car
$car = new Car("Toyota", "Red", 4);
echo $car->displayDetails() . PHP_EOL;
echo $car->drive() . PHP_EOL;
echo "Doors: " . $car->getNumDoors() . PHP_EOL;

// Membuat instance Bike
$bike = new Bike("Yamaha", "Blue", true);
echo $bike->displayDetails() . PHP_EOL;
echo $bike->drive() . PHP_EOL;
echo "Has Carrier: " . ($bike->hasCarrier() ? "Yes" : "No") . PHP_EOL;
