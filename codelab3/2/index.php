<?php
// Aktifkan error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include file ProductController.php
include "Controller/ProductController.php";

// Gunakan namespace yang sesuai
use Controller\ProductController;

// Buat instance dari ProductController
$productController = new ProductController();

// Panggil method getAllProduct dan tampilkan hasilnya
$response = $productController->getAllProduct();
echo $response;
?>