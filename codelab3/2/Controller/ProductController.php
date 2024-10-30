<?php
namespace Controller;

class ProductController {
    private $controllerName;
    private $controllerMethod;

    public function __construct() {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "GET";
    }

    public function getAllProduct() {
        // Array Dummy Data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }

    private function getControllerAttribute() {
        return [
            "name" => $this->controllerName,
            "method" => $this->controllerMethod
        ];
    }

    private function responseFormatter($statusCode, $message, $data) {
        return json_encode([
            "status" => $statusCode,
            "message" => $message,
            "data" => $data
        ]);
    }
}