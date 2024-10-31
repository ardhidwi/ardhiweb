<?php
namespace App\Models;

require_once 'Vehicle.php';
require_once 'DisplayTrait.php';

use App\Models\Vehicle;
use App\Traits\DisplayTrait;

class Bike extends Vehicle {
    use DisplayTrait;

    private $hasCarrier;

    public function __construct($brand, $color, $hasCarrier) {
        parent::__construct($brand, $color);
        $this->hasCarrier = $hasCarrier;
    }

    public function drive() {
        return "The bike is being pedaled.";
    }

    public function hasCarrier() {
        return $this->hasCarrier;
    }
}
