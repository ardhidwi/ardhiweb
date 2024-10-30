<?php

namespace Controller;

class Controller
{
    // Variable Attributes
    var $controllerName;
    var $controllerMethod;

    // Method to get all attributes
    public function getControllerAttribute()
    {
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod,
        ];
    }
}