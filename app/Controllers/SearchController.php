<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class SearchController {

    private $model;
    private $request;

    public function __construct() {
        $this->model = new ProductsModel();
    }

    public function searchAction($request) {
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            // var_dump($postData);
        }
        $this->request = $request;
        include './app/Views/Pages/search.php';
    }

    public function searchProducts() {
        // $text =  substr($_GET['route'], 7);
        $postData = $this->request->getParsedBody();
        $products = $this->model->searchProducts($postData['text']);
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
                            <a href="/catalogoEmai/producto/'.$product["productId"].'">Ver más</a>
                        </div>
                    </div>
                </div>
            ';
        }
        return $acu;
    }

}
