<?php
namespace App\Models;

require_once 'Vehicle.php';
require_once 'DisplayTrait.php';

use App\Models\Vehicle;
use App\Traits\DisplayTrait;

class Car extends Vehicle {
    use DisplayTrait;

    private $numDoors;

    public function __construct($brand, $color, $numDoors) {
        parent::__construct($brand, $color);
        $this->numDoors = $numDoors;
    }

    public function drive() {
        return "The car is driving smoothly.";
    }

    public function getNumDoors() {
        return $this->numDoors;
    }
}
