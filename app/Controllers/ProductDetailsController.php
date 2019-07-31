<?php

namespace App\Controllers;

use App\Controllers\ProductsController;


// include_once './backend/controlador/CProducto.php';
// include_once './backend/controlador/CIndex.php';
// $cIndex = new CIndex();


class ProductDetailsController {

    private $model;

    public function __construct() {
        // $this->model = new ProductsModel();
    }

    public function productDetailsAction() {
        $cProducto = new ProductsController();
        // $id_instrumento = $_GET["id_instrumento"];
        // $instrumento= $cProducto->instrumento($id_instrumento);
        // $marca=$cProducto->marca($id_instrumento);
        // $tipo_inst=$cProducto->tipo_inst($id_instrumento);
        include './app/Views/Pages/productDetails.php';
    }

}
