<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class ProductDetailsController {

    private $model;

    public function __construct() {
        $this->model = new ProductsModel();
    }

    public function productDetailsAction($request) {
        $idProduct = substr($_GET['route'], 9);
        include './app/Views/Pages/productDetails.php';
    }

    public function getProductById($idProduct){
        $product= $this->model->getProductById($idProduct);
        return $product;
    }

    public function getBrandById($idProduct){
        $brand= $this->model->getBrandById($idProduct);
        return $brand;
    }

    public function getProductType($idProduct){
        $productType= $this->model->getProductType($idProduct);
        return $productType;
    }

}
