<?php
namespace App\Models;

abstract class Vehicle {
    protected $brand;
    protected $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    abstract public function drive(); // Abstract method untuk implementasi di subclass

    // Getter untuk brand
    public function getBrand() {
        return $this->brand;
    }

    // Getter untuk color
    public function getColor() {
        return $this->color;
    }

    // Magic Method __toString untuk output readable
    public function __toString() {
        return "Brand: {$this->brand}, Color: {$this->color}";
    }
}
