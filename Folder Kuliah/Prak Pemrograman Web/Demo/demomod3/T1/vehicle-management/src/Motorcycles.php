<?php
namespace src;

use Abstracts\Vehicle;
use Traits\VehicleTraits;

class Motorcycles extends Vehicle {
    use VehicleTraits;

    public function getDetails() {
        return "Motorcycle Brand: {$this->brand}, Model: {$this->model}";
    }
}