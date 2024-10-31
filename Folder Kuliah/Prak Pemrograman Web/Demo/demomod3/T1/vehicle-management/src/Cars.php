<?php
namespace src;

use Abstracts\Vehicle;
use Traits\VehicleTraits;

class Cars extends Vehicle {
    use VehicleTraits;

    public function getDetails() {
        return "Car Brand: {$this->brand}, Model: {$this->model}";
    }
}