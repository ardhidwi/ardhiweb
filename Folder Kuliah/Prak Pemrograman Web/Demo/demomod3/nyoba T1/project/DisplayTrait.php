<?php
namespace App\Traits;

trait DisplayTrait {
    public function displayDetails() {
        return "Vehicle Details: " . $this;
    }
}
