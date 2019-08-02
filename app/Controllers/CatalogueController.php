<?php

namespace App\Controllers;

use App\Models\ProductsModel;

// include_once './backend/modelo/MProducto.php';
// include_once './backend/controlador/CProducto.php';
// include_once './backend/controlador/CIndex.php';
// $cIndex = new CIndex();
// $cProducto = new CProducto();

class CatalogueController {

    private $model;

    public function __construct() {
        $this->model = new ProductsModel();
    }

    public function catalogueAction() {
        include './app/Views/Pages/catalogue.php';
    }

    public function getProducts() {
        $products = $this->model->getProducts();
        $acu = "";
        foreach ($products as $product) {
            $acu = $acu . '
                <div class="col-lg-3 mt-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="' . $product["imageProductUri"] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $product["productName"] . '</h5>
                            <span>Precio</span>
                            <p>'.$product["productPrice"].'</p>
                            <a href="detalle.php?id_instrumento='.$product["productId"].'">Ver más</a>
                        </div>
                    </div>
                </div>
            ';
        }
        return $acu;
    }

}
