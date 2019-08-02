<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class ProductDetailsController {

    private $model;

    public function __construct() {
        $this->model = new ProductsModel();
    }

    public function productDetailsAction($request) {
        $productId = substr($_GET['route'], 9);
        include './app/Views/Pages/productDetails.php';
    }

    public function getProductById($productId){
        $product= $this->model->getProductById($productId);
        return $product;
    }

    public function getProductImages($productId) {
        $productImages = $this->model->getProductImages($productId);
        $acu = "";
        foreach ($productImages as $productImage) {
            $acu = $acu . '
                <div class="col-md-4">
                    <img src="' . $productImage["imageProductUri"] . '" class="img-fluid" alt=""/>
                </div>
            ';
        }
        return $acu;
    }

    //** Ya no se utiliza en espera a elimnarlo* */
    public function getBrandById($productId){
        $brand= $this->model->getBrandById($productId);
        return $brand;
    }

    //** Ya no se utiliza en espera a elimnarlo* */
    public function getProductType($productId){
        $productType= $this->model->getProductType($productId);
        return $productType;
    }

}
